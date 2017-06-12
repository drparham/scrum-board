<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskDeleteFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', 'App\Models\Task');
    }

    public function rules()
    {
        return [];
    }
}