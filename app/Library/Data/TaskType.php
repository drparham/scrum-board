<?php

namespace App\Library\Data;

use MabeEnum\Enum;

class TaskType extends Enum
{
    const BUG       = 0;
    const FEATURE   = 1;
    const CHORE     = 2;
}