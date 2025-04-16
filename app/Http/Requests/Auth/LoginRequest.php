<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Cho phép request này sử dụng
    }

    public function rules()
    {
        return [
            'email' => 'required|email|max:255',
            'mat_khau' => 'required|min:8|max:32'
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.max' => 'Email không được vượt quá 255 ký tự',
            'mat_khau.required' => 'Mật khẩu không được để trống',
            'mat_khau.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'mat_khau.max' => 'Mật khẩu không được vượt quá 32 ký tự'
        ];
    }
}
