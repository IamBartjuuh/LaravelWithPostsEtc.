<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class GebruikersRol extends Enum
{
    const User = 0;
    const Admin = 1;
    const SuperAdministrator = 2;
}
