<?php

namespace App\Http\Requests;

use App\Models\Sprint;
use Illuminate\Foundation\Http\FormRequest;

class SprintUpdateFormRequest extends FormRequest
{
    public function authorize()
    {
        $sprint = Sprint::find($this->route('id'));

        return $sprint && $this->user()->can('update', $sprint);
    }

    public function rules()
    {
        return [];
    }
}