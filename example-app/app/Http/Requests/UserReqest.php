<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserReqest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules()
    {
        return [
        'name' => 'required|max:255',
        'number' => 'required|unique:users',
        'password' => 'required',
        ];
    }
    public function messages()
{
    return [
        'name.required' => 'A name is required',
        'number.required' => 'A number is required',
    ];
}
}
