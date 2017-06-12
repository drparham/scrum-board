<?php

namespace App\Models;

use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class SprintColumn extends ModelSchemaBuilder
{
    protected $setSprintId = null;

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

    public function FB_sprint_id()
    {
        if (is_null($this->setSprintId)) {
            return new HiddenField();
        } else {
            return new HiddenField($this->setSprintId);
        }
    }

    /**
     * @param null $setSprintId
     */
    public function setSetSprintId($setSprintId)
    {
        $this->setSprintId = $setSprintId;
    }
}