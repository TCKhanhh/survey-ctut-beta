<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    // public function handle(Request $request, Closure $next)
    // {
    //     $user = Auth::user();

    //     // Kiểm tra nếu user đã đăng nhập và có quyền admin (quyen_truy_cap = 1)
    //     $isAdmin = DB::table('users')->where('id', $user->id)->where('quyen_truy_cap', 1)->exists();

    //     if ($isAdmin) {
    //         return $next($request);
    //     }

    //     // Nếu không phải admin, chuyển hướng về trang đăng nhập hoặc báo lỗi
    //     return redirect()->route('viewLoginAdmin')->with('error', 'Bạn không có quyền truy cập!.');
    // }


    public function handle(Request $request, Closure $next)
    {

        // if (!session()->has('admin_id')) {
        //     return redirect()->route('viewLoginAdmin')
        //         ->with('error', 'Bạn không có quyền truy cập!');
        // }

        // $user = DB::table('users')
        //     ->where('id', session('admin_id'))
        //     ->where('quyen_truy_cap', 1)
        //     ->first();

        // // if (!$user) {
        // //     session()->forget(['admin_id', 'admin_name']);
        // //     return redirect()->route('viewLoginAdmin')
        // //         ->with('error', 'Bạn không có quyền truy cập!');
        // // }

        // if (!session()->has('admin_id')) {
        //     return redirect()->route('viewLoginAdmin')
        //         ->with('error', 'Bạn không có quyền truy cập!');
        // }


        // Kiểm tra nếu chưa đăng nhập
        if (!Auth::check()) {
            return redirect()->route('viewLoginAdmin')->with('error', 'Vui lòng đăng nhập!');
        }

        // Lấy thông tin user hiện tại từ Auth
        $user = Auth::user();

        // Kiểm tra quyền truy cập
        $isAdmin = DB::table('users')
            ->where('id', $user->id)
            ->where('quyen_truy_cap', 1)
            ->exists();

        if (!$isAdmin) {
            Auth::logout();
            return redirect()->route('viewLoginAdmin')->with('error', 'Bạn không có quyền truy cập!');
        }

        // Cho phép truy cập nếu là admin
        return $next($request);
    }
}