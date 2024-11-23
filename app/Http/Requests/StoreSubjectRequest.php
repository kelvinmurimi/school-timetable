<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSubjectRequest extends FormRequest
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
            //
            'subject_name' => ['required', 'string', 'max:255'],
            'subject_code' => ['required', 'integer', 'unique:subjects,subject_code'], // Ensure unique subject code
            'subject_teacher' => ['nullable', 'string', 'max:255'], // Assuming teacher is optional
        ];
    }
}
