<?php

namespace App\Http\Requests;

use Gate;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('profile_edit');
    }

    public function rules()
    {
        return [];
    }
}
