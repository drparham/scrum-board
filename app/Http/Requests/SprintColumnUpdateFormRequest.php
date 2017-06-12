<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SprintColumnUpdateFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('update', 'App\Models\SprintColumn');
    }

    public function rules()
    {
        return [];
    }
}