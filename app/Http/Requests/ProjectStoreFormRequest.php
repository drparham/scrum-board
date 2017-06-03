<?php

namespace App\Http\Requests;

use App\Models\Project;
use Illuminate\Foundation\Http\FormRequest;

class ProjectStoreFormRequest extends FormRequest
{
    public function authorize()
    {
        $project = Project::find($this->route('id'));

        return $project && $this->user()->can('store', $project);
    }

    public function rules()
    {
        return [];
    }
}