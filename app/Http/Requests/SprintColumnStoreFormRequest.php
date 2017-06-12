<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SprintColumnStoreFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', 'App\Models\SprintColumn');
    }

    public function rules()
    {
        return [];
    }
}