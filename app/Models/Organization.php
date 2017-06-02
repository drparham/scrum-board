<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Organization extends Model
{
    protected $guarded = [];

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
}