<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskUpdateFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('update', 'App\Models\Task');
    }

    public function rules()
    {
        return [];
    }
}