<?php

namespace App\Enums\General;

use App\Enums\Enum;

enum GenderEnum: string
{
    use Enum;

    case MAN = 'Man';
    case FEMALE = 'Female';
}
