<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponRequest extends FormRequest
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
            'code' => 'required | string', 
            'type' => 'required | string',
            'value' => 'required_if:type,fixed',
            'percent_off' => 'required_if:type,percent',
            'start' => 'required | |date ',
            'expire' => 'required | |date| after:start',
        ];
    }
}
