<?php

namespace App\Http\Requests;

class OrganizationUpdateFormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}