<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SprintStoreFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', 'App\Models\Sprint');
    }

    public function rules()
    {
        return [];
    }
}