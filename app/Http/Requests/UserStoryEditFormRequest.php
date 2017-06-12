<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoryEditFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('edit', 'App\Models\UserStory');
    }

    public function rules()
    {
        return [];
    }
}