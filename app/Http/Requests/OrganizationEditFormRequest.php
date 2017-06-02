<?php

namespace App\Http\Requests;

class OrganizationEditFormRequest
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