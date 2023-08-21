<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
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
            'names' => ['required'],
            'lastNames' => ['required'],
            'address' => ['required'],
            'dui' => ['required', 'max:10'],
            'nip' => ['required', 'max:10'],
            'nit' => ['required', 'max:15'],
            'nup' => ['required', 'max:15'],
            'career_id' => ['required'],
            'category_id' => ['required'],
            'position_id' => ['required'],
            'departure' => ['required', 'max:10'],
            'subLevel' => ['required', 'max:10'],
            'entryDate' => ['required', 'date'],
            'status' => ['required']
        ];
    }
}
