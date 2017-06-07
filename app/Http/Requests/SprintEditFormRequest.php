<?php

namespace App\Http\Requests;

use App\Models\Sprint;
use Illuminate\Foundation\Http\FormRequest;

class SprintEditFormRequest extends FormRequest
{
    public function authorize()
    {
        $sprint = Sprint::find($this->route('id'));

        return $sprint && $this->user()->can('edit', $sprint);
    }

    public function rules()
    {
        return [];
    }
}