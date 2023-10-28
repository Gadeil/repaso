<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
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
            'isbn' => 'required|numeric|min:13',
            'autor' => 'required|string|max:255|min:4',
            'titulo' => 'required|string|max:255|min:4',
            'paginas' => 'required|numeric',
            'editorial' => 'required|string|max:255|min:4',
            'email' => 'required|email|max:50|min:10',
        ];
    }
}
