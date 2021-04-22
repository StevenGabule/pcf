<?php

namespace App\Http\Requests\Student;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'last_school_id' => 'required|max:3',
            'last_school_award' => 'required|max:255',
            'last_school_year_attended' => 'required|max:3',
            'lrn' => 'required',
        ];
    }
}
