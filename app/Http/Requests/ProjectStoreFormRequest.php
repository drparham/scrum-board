<?php

namespace App\Http\Requests;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', 'App\Models\Project');
    }

    public function rules()
    {
        return [];
    }
}