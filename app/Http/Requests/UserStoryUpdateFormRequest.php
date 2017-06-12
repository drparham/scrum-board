<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoryUpdateFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('update', 'App\Models\UserStory');
    }

    public function rules()
    {
        return [];
    }
}