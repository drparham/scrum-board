<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskEditFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('edit', 'App\Models\Task');
    }

    public function rules()
    {
        return [];
    }
}