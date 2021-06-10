<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name'               => 'required | string',
            'brand_id'           => 'nullable | integer',
            'menus_id'           => 'required | integer',
            'submenu_id'         => 'required | integer',
            'category_id'        => 'nullable | integer',
            'description'        => 'required | string',
            'features'           => 'required | string',
            'quantity'           => 'required | integer',
            'buying_price'       => 'required | string',
            'selling_price'      => 'required | string',
            'duration'           => 'nullable | string',
            'duration_type'      => 'required_if:duration,integer',
            'warranty'           => 'nullable | string',
            'sale'               => 'required | boolean',
            'sale_type'          => 'required_if: sale,true',
            'sale_value'         => 'required_if: sale,true',
            'free_shipping'      => 'required | boolean',
            'featured'           => 'required | boolean',  
            'model_no'           => 'nullable | boolean',
            'tags'               => 'required | string',
            'tax_included'       => 'required | boolean',
            'tax'                => 'required_if: tax_included, true',
        ];
    }
}
