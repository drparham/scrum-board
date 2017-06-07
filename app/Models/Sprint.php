<?php

namespace App\Models;

use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class Sprint extends ModelSchemaBuilder
{
    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function sprintRows()
    {
        return $this->hasMany(SprintRow::class);
    }

    public function sprintColumns()
    {
        return $this->hasMany(SprintColumn::class);
    }

    public function FB_project_id()
    {
        return new HiddenField();
    }
}