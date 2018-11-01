<?php

namespace App\Enums\User;

use BenSampo\Enum\Enum;

final class UserStatus extends Enum
{
    const ACTIVE = 0;
    const NON_ACTIVE = 1;
    const UNVERIFIED = 2;
    const BANNED = 3;
}
