<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicineRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

 
    public function rules()
    {
        return [
           
                'scientific_name' => 'required',
                'commercial_name' => 'required',
                'category' => 'required',
                'company_name' => 'required',
                'validity' => 'required',
                'price' => 'required',
                'quantity' => 'required',
            
            
        ];
       
    }
    public function messages(): array
{
    return [
        'commercial_name.required' => 'A commercial_name is required',
        'price.required' => 'A price is required',
    ];
}
}
