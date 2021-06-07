<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TimesheetCreateRequest extends FormRequest
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
            'worker_id'    => ['required', 'integer', 'exists:workers,id','min:1'],
            'datetime_in'  => ['required', 'date_format:Y-m-d H:i:s'],
            'datetime_out' => ['required', 'date_format:Y-m-d H:i:s', 'after:datetime_in'],
        ];
    }
}
