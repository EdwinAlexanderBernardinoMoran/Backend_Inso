<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRegistrationRequest extends FormRequest
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
            'students_id' => ['required'],
            'specialties_id' => ['required'],
            'section_id' => ['required'],
            'sections' => ['required'],
            'anio' => ['required'],
            'state' => ['required'],
            'egresado' => [],
            'status' => ['required']
        ];
    }
}
