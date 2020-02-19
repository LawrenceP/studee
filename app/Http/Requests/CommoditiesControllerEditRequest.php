<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CommoditiesControllerEditRequest extends FormRequest
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
            'segment' => 'integer',
            'segment_name' => 'string',
            'family' => 'integer',
            'family_name' => 'string',
            'class' => 'integer',
            'class_name' => 'string',
            'commodity' => 'integer',
            'commodity_name' => 'string',
        ];
    }
}
