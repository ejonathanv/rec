<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|min:5|max:100|unique:posts,title',
            'resume' => 'required|string|min:10|max:500',
            'content' => 'required|string|min:10|max:10000',
            'cover' => 'nullable|image|mimes:jpg,jpeg,png,gif,svg|max:5000'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El título es requerido',
            'title.string' => 'El título debe ser un texto',
            'title.min' => 'El título debe tener al menos 5 caracteres',
            'title.unique' => 'El título ya existe',
            'title.max' => 'El título debe tener máximo 100 caracteres',
            'resume.required' => 'El resumen es requerido',
            'resume.string' => 'El resumen debe ser un texto',
            'resume.min' => 'El resumen debe tener al menos 10 caracteres',
            'resume.max' => 'El resumen debe tener máximo 500 caracteres',
            'content.required' => 'El contenido es requerido',
            'content.string' => 'El contenido debe ser un texto',
            'content.min' => 'El contenido debe tener al menos 10 caracteres',
            'content.max' => 'El contenido debe tener máximo 10000 caracteres',
            'cover.image' => 'El archivo debe ser una imagen',
            'cover.mimes' => 'El archivo debe ser una imagen de tipo: jpg, jpeg, png, gif, svg',
            'cover.max' => 'El archivo debe pesar máximo 5MB'
        ];
    }
}
