<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
{  

    // 1)Make authorize and active of this validation
    public function authorize()
    {
        // set it to true to make this validation process to authorize and active
        return true;
    }

    // 2)Apply Rules by filed names inside FormRequest File as
    public function rules()
    {
        return [
            'name'=>'required',
            'email'=>'required|min:15',
            'password'=>'required',
        ];
    }
    // 3)Customizing Error Message
    public function messages()
    {
        return[
            'name.required'=>'The Name is important',
            'email.required'=>'The :attribute is important',

        ];
    }

    // 4)Customizing the attributes names
    public function attributes()
    {
        return[
            'email'=>'Mail Address',
            'password'=>'PWD',

        ];
    }
}
