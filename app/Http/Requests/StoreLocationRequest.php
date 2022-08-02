<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreLocationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('location_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:locations',
            ],
        ];
    }
}
