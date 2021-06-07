<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WorkerUpdateRequest extends FormRequest
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
            'id'   => array('unique:workers,id', 'integer'),
            'name' => 'string',
            'surname' => 'string',
            'middle_name' => 'string',
            'phone' => array('regex:/^((\+7|7|8)+([0-9]){10})$/u')
        ];
    }

}
