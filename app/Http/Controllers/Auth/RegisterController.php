<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Auth\RegisterRequest;

class RegisterController extends Controller
{
    public function viewRegister()
    {
        return view('auth.register');
    }

    public function processRegister(RegisterRequest $request)
    {
        try {
            DB::table('users')->insert([
                'ho_ten' => trim($request->ho_ten),
                'email' => strtolower(trim($request->email)),
                'sdt' => trim($request->sdt),
                'mat_khau' => Hash::make($request->mat_khau),
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            return redirect('/dang-nhap')->with('success', 'Đăng ký thành công!');
        } catch (\Exception $e) {
            return redirect()->back()
                ->with('error', 'Có lỗi xảy ra trong quá trình đăng ký. Vui lòng thử lại sau.')
                ->withInput();
        }
    }
}