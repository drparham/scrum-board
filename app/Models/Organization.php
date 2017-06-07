<?php

namespace App\Models;

use Illuminate\Support\Facades\Auth;
use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class Organization extends ModelSchemaBuilder
{
    protected $guarded = ['id'];

    public function owner()
    {
        return $this->belongsTo(User::class);
    }

    public function members()
    {
        return $this->belongsToMany(UserStory::class, 'organization_users', 'organization_id', 'id');
    }

    public function projects()
    {
        return $this->morphMany(Project::class, 'projectable');
    }

    public function FB_user_id()
    {
        return new HiddenField(Auth::id());
    }
}