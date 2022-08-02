<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class StoreProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('profile_create');
    }

    public function rules()
    {
        return [];
    }
}
