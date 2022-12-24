<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecordRegister extends FormRequest
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
            'title' => 'required',
            'body_weight' => 'numeric',
            'records.*.menu_id' =>'required',
            'records.*.weight' =>'numeric',
            'records.*.rep' => 'numeric',
            'records.*.set' => 'numeric',
        ];
    }
}
