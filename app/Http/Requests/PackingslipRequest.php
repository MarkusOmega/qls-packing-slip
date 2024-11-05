<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PackingslipRequest extends FormRequest
{

  
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'delivery-method' => 'required|integer',
            'shipping-option' => 'required|integer'
        ];
    }
}
