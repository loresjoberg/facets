<?php

namespace LoreSjoberg\Facets\Tests\Dummy;

use LoreSjoberg\Facets\Caster;

class RoundingCaster implements Caster
{
    public function cast(mixed $value): float | int
    {
        return is_int($value) ? $value : round($value, 2);
    }
}
