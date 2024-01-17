<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title'=>'required|max:255|min:3|unique:projects,title',
            'slug'=>'max:200|min:3|unique:projects,slug',
            'type_id' => 'nullable|exists:types,id',
            'content'=>'required|max:255|min:3'
        ];
    }
}
