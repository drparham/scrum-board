<?php

namespace App\Library\Data;

use MabeEnum\Enum;

class UserStoryType extends Enum
{
    const BUG           = 0;
    const FEATURE       = 1;
    const IMPROVEMENT   = 2;
}