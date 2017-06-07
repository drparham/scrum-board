<?php

namespace App\Models;

use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class Project extends ModelSchemaBuilder
{
    protected $guarded = [];

    public function projectable()
    {
        return $this->morphTo();
    }

    public function sprints()
    {
        return $this->hasMany(Sprint::class);
    }

    public function FB_projectable_id()
    {
        return new HiddenField();
    }

    public function FB_projectable_type()
    {
        return new HiddenField();
    }
}