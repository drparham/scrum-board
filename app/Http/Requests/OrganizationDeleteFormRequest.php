<?php

namespace App\Http\Requests;

class OrganizationDeleteFormRequest
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