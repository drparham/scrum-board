<?php

namespace App\Models;

use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class Sprint extends ModelSchemaBuilder
{
    protected $projectId;

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function rows()
    {
        return $this->hasMany(SprintRow::class);
    }

    public function columns()
    {
        return $this->hasMany(SprintColumn::class);
    }

    public function userStories()
    {
        return $this->hasMany(UserStory::class);
    }

    public function FB_project_id()
    {
        if (is_null($this->projectId)) {
            return new HiddenField();
        } else {
            return new HiddenField($this->projectId);
        }
    }

    public function setProjectId($value)
    {
        $this->projectId = $value;
    }
}