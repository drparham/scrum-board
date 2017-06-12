<?php

namespace App\Models;

use App\Library\Data\TaskType;
use Pta\Formbuilder\Lib\Fields\HiddenField;
use Pta\Formbuilder\Lib\Fields\SelectField;
use Pta\Formbuilder\Lib\ModelSchemaBuilder;

class Task extends ModelSchemaBuilder
{
    protected $sprint  = null;
    public $skipFields = [
        'sprint_row_id',
    ];
    public $formLabels = [
        'user_story_id'     => 'User Story',
        'sprint_column_id'  => 'Status',
        'points'            => 'Points',
        'title'             => 'Title',
        'details'           => 'Details',
        'type'              => 'Type'
    ];

    public function userStory()
    {
        return $this->belongsTo(UserStory::class);
    }

    public function row()
    {
        return $this->belongsTo(SprintRow::class);
    }

    public function column()
    {
        return $this->belongsTo(SprintColumn::class);
    }

    public function getStatusAttribute()
    {
        return $this->column->name;
    }

    public function setSprintAttribute(int $sprintId)
    {
        if (is_null($this->sprint)) {
            $this->sprint = Sprint::find($sprintId);
        }

        $this->attributes['sprint'] = $this->sprint;
    }

    public function getSprintAttribute()
    {
        return $this->sprint;
    }

    public function FB_user_Story_id()
    {
        $collection = $this->sprint->userStories;

        return new SelectField(null, 'name', function() use ($collection) {
            return $collection;
        });
    }

    public function FB_sprint_column_id()
    {
        $collection = $this->sprint->columns;

        return new SelectField(null, 'name', function() use ($collection) {
            return $collection;
        });
    }

    public function FB_sprint_row_id()
    {
        if (is_null($this->setSprintRow)) {
            return new HiddenField;
        } else {
            return new HiddenField($this->setSprintRow);
        }
    }

    public function FB_type()
    {
        $bug            = new \stdClass();
        $feature        = new \stdClass();
        $chore          = new \stdClass();

        $bug->name = title_case(TaskType::BUG()->getName());
        $bug->id   = TaskType::BUG;

        $feature->name  = title_case(TaskType::FEATURE()->getName());
        $feature->id    = TaskType::FEATURE;

        $chore->name  = title_case(TaskType::CHORE()->getName());
        $chore->id    = TaskType::CHORE;

        $types = [
            $bug,
            $feature,
            $chore
        ];

        $collection = \collect($types);
        return new SelectField(null, 'name', function() use ($collection) {
            return $collection;
        });
    }
}