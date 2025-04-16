<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckLoginMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        // if (!session()->has('user_id')) {
        //     return redirect()->route('viewLogin')
        //         ->with('error', 'Bạn chưa đăng nhập!');
        // }
        // return $next($request);

        // Kiểm tra nếu chưa đăng nhập
        if (!Auth::check()) {
            return redirect()->route('viewLogin')
                ->with('error', 'Bạn chưa đăng nhập!');
        }

        // Kiểm tra quyền truy cập là user (quyen_truy_cap = 0)
        $user = Auth::user();
        if ($user->quyen_truy_cap != 0) {
            Auth::logout();
            return redirect()->route('viewLogin')
                ->with('error', 'Bạn không có quyền truy cập!');
        }

        // Nếu đúng user, cho phép truy cập
        return $next($request);
    }
}