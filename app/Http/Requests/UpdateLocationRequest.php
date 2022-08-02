<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateLocationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('location_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
                'unique:locations,name,'.request()->route('location')->id,
            ],
        ];
    }
}
