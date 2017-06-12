<?php

namespace App\Transformers;

use App\Models\Sprint;
use App\Models\SprintColumn;
use App\Models\SprintRow;
use App\Models\UserStory;
use Illuminate\Support\Collection;

class SprintBoardTransformer
{
    public static function transform(Sprint $sprint): array
    {
        return [
            'columns' => array_merge(['epics'], self::formatColumns($sprint->columns)),
            'rows'    => self::formatRows($sprint->rows),
            'stories' => self::formatStories($sprint->userStories)
        ];
    }

    private function formatColumns(Collection $columns): array
    {
        $formattedColumns = [];
        foreach($columns as $column) {
            $formattedColumns[] = $this->formatColumn($column);
        }

        return $formattedColumns;
    }

    private function formatColumn(SprintColumn $column): array
    {
        return [

        ];
    }

    private function formatRows(Collection $rows): array
    {
        $formattedRows = [];
        foreach($rows as $row) {
            $formattedRows[] = $this->formatRow($row);
        }

        return $formattedRows;
    }

    private function formatRow(SprintRow $row): array
    {
        return [

        ];
    }

    private function formatStories(Collection $stories): array
    {
        $formattedStories = [];
        foreach($stories as $story) {
            $formattedStories[] = $this->formatStory($story);
        }

        return $formattedStories;
    }

    private function formatStory(UserStory $story):array
    {
        return [

        ];
    }
}