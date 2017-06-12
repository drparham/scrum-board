<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoryStoreFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('create', 'App\Models\UserStory');
    }

    public function rules()
    {
        return [];
    }
}