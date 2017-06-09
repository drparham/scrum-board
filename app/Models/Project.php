<?php

namespace App\Models;

use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class Project extends ModelSchemaBuilder
{
    protected $guarded = [];
    protected $projectableId   = null;
    protected $projectableType = null;

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
        if (is_null($this->projectableId)) {
            return new HiddenField();
        } else {
            return new HiddenField($this->projectableId);
        }
    }

    public function FB_projectable_type()
    {
        if (is_null($this->projectableType)) {
            return new HiddenField();
        } else {
            return new HiddenField($this->projectableType);
        }
    }

    /**
     * @param mixed $projectableId
     */
    public function setProjectableId($projectableId)
    {
        $this->projectableId = $projectableId;
    }

    /**
     * @param mixed $projectableType
     */
    public function setProjectableType($projectableType)
    {
        $this->projectableType = $projectableType;
    }


}