<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class SoortProbleem extends Enum
{
    const Selecteer = 0;
    const Opstarten = 1;
    const Software_problemen = 2;
    const Hardware_problemen = 3;
    const Overige = 4;
}
