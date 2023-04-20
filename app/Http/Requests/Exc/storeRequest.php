<?php

namespace App\Http\Requests\Exc;

use Illuminate\Foundation\Http\FormRequest;

class storeRequest extends FormRequest
{
    public $file;
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'file' => 'required|mimes:xlsx'
        ];
    }
}
