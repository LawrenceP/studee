<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommoditiesControllerStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'segment' => 'integer|required',
            'segment_name' => 'string|required',
            'family' => 'integer|required',
            'family_name' => 'string|required',
            'class' => 'integer|required',
            'class_name' => 'string|required',
            'commodity' => 'integer|required',
            'commodity_name' => 'string|required',
        ];
    }
}
