<?php

namespace App\Enums\User;

use BenSampo\Enum\Enum;

final class UserRole extends Enum
{
    const SUPERADMIN = 0;
    const ADMIN = 1;
    const OPERATOR = 2;
    const MEMBER = 3;
    const GUEST = 4;
}
