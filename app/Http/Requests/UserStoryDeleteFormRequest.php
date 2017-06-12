<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserStoryDeleteFormRequest extends FormRequest
{
    public function authorize()
    {
        return $this->user()->can('delete', 'App\Models\UserStory');
    }

    public function rules()
    {
        return [];
    }
}