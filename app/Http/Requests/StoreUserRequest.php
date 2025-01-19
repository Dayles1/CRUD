<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:30',
            'email' => 'required|email|unique:users,email',
            'age' => 'required|numeric|min:18',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'product_name' => 'required|string|min:3|max:50',
            'price' => 'required|numeric|min:0',
            'date' => 'required|date_format:Y-m-d',
            'password' => 'required|string|min:8|confirmed',
            'url' => 'required|url',
        ];
    }
    
}
