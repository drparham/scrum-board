<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TaskStoreFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', 'App\Models\Task');
    }

    public function rules()
    {
        return [];
    }
}