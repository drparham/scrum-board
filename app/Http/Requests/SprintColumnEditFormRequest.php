<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SprintColumnEditFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('edit', 'App\Models\SprintColumn');
    }

    public function rules()
    {
        return [];
    }
}