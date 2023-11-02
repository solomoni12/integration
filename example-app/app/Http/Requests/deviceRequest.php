<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class deviceRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z]+$/'],
            'descrption' => ['required', 'string', 'max:255', 'regex:/^[A-Za-z]+$/'],
            'parentConcept' => ['required', 'string', 'max:255'],
            'parentConceptName' => ['required', 'string', 'max:255'],
        ];
    }
}
