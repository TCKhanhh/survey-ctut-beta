<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'ho_ten' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email|max:255', // Xóa regex cũ, dùng rule email mặc định
            'sdt' => 'required|regex:/^[0-9]{10}$/',
            'mat_khau' => 'required|min:8|max:50',
            'nhap_lai_mat_khau' => 'required|same:mat_khau',
        ];
    }

    public function messages()
    {
        return [
            'ho_ten.required' => 'Họ tên không được để trống',
            'ho_ten.string' => 'Họ tên phải là chuỗi ký tự',
            'ho_ten.max' => 'Họ tên không được vượt quá 255 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã được sử dụng',
            'email.max' => 'Email không được vượt quá 255 ký tự',
            'sdt.required' => 'Số điện thoại không được để trống',
            'sdt.regex' => 'Số điện thoại phải có 10 chữ số',
            'mat_khau.required' => 'Mật khẩu không được để trống',
            'mat_khau.min' => 'Mật khẩu phải có ít nhất 8 ký tự',
            'mat_khau.max' => 'Mật khẩu không được vượt quá 50 ký tự',
            'nhap_lai_mat_khau.required' => 'Bạn cần nhập lại mật khẩu',
            'nhap_lai_mat_khau.same' => 'Mật khẩu nhập lại không khớp',
        ];
    }
}
