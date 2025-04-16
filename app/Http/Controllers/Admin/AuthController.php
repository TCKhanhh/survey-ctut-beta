<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AuthController extends Controller
{
    public function viewLoginAdmin()
    {
        return view('admin.auth.login');
    }

    public function processLoginAdmin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'mat_khau' => 'required'
        ]);

        // Tìm user trong database
        $user = DB::table('users')
            ->where('email', $request->email)
            ->where('quyen_truy_cap', 1)
            ->first();

        // Kiểm tra user tồn tại và mật khẩu có đúng không
        if ($user && Hash::check($request->mat_khau, $user->mat_khau)) {
            // Lưu vào session
            session([
                'admin_id' => $user->id,
                'admin_name' => $user->ho_ten
            ]);

            return redirect()->route('viewHomeAdmin')->with('success', 'Đăng nhập thành công.');
        }

        return back()->with('error', 'Email hoặc mật khẩu không đúng.');
    }


    // public function viewHomeAdmin()
    // {
    //     return view('admin.pages.home');
    // }


    public function processLogoutAdmin(Request $request)
    {
        session()->forget(['admin_id', 'admin_name']);

        return redirect()->route('viewLoginAdmin')->with('success', 'Đăng xuất thành công.');
    }
}