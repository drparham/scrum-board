<?php

namespace App\Http\Requests;

use App\Models\Organization;
use Illuminate\Foundation\Http\FormRequest;

class OrganizationIndexFormRequest extends FormRequest
{
    public function authorize()
    {
        $org = Organization::find($this->route('id'));
        dd($org);
        return $org && $this->user()->can('update', $org);
    }

    public function rules()
    {
        return [];
    }
}