<?php

namespace App\Models;

use App\Library\Data\UserStoryType;
use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\Fields\SelectField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class UserStory extends ModelSchemaBuilder
{
    protected $setSprintId = null;

    public function sprint()
    {
        return $this->belongsTo(Sprint::class);
    }

    public function row()
    {
        return $this->belongsTo(SprintRow::class);
    }

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function FB_sprint_id()
    {
        if (is_null($this->setSprintId)) {
            return new HiddenField();
        } else {
            return new HiddenField($this->setSprintId);
        }
    }

    public function FB_sprint_row_id()
    {
        return new HiddenField();
    }

    public function FB_type()
    {
        $bug            = new \stdClass();
        $feature        = new \stdClass();
        $improvement    = new \stdClass();

        $bug->name = title_case(UserStoryType::BUG()->getName());
        $bug->id   = UserStoryType::BUG;

        $feature->name  = title_case(USerStoryType::FEATURE()->getName());
        $feature->id    = USerStoryType::FEATURE;

        $improvement->name  = title_case(UserStoryType::IMPROVEMENT()->getName());
        $improvement->id    = UserStoryType::IMPROVEMENT;

        $types = [
            $bug,
            $feature,
            $improvement
        ];

        $collection = \collect($types);
        return new SelectField(null, 'name', function() use ($collection) {
            return $collection;
        });
    }

    /**
     * @param null $setSprintId
     */
    public function setSetSprintId($setSprintId)
    {
        $this->setSprintId = $setSprintId;
    }

}