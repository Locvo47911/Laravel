<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; //Sua return false thanh return true
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return 
        [
            'name'=>'required|min:3|max:10',
            'email'=>'required|email|unique:users, email,',
            'password'=>'required|numeric|min:6'
        ];
    }
    public function messages(){
        return [
            'name.required'=>'Bắt buộc phải nhập',
            'name.min'=>'name ít nhất 3 kí tự',
            'name.max'=>'name nhiều nhất 10 ký tự',
            'email.required'=>'Bắt buộc phải nhập',
            'email.email'=>'email sai định dạng',
            'email.unique'=>'1 email duy nhất',
            'password.numeric'=>'password phải là số'
        ];
    }
}
