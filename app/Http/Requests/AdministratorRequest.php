<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdministratorRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // change this to false when auth is implemented
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'jabatan' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Field name should not be empty',
            'email.required' => 'Field email should not be empty',
            'email.email' => 'Invalid email format',
            'jabatan.required' => 'Field jabatan should not be empty',
        ];
    }
}
