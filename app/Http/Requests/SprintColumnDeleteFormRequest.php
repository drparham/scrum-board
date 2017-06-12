<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SprintColumnDeleteFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', 'App\Models\SprintColumn');
    }

    public function rules()
    {
        return [];
    }
}