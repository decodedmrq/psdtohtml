<?php

namespace App\Models;

class Guest extends Model
{
    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    public static function getGendersString()
    {
        return Guest::GENDER_MALE . ',' .
            Guest::GENDER_FEMALE;
    }
}
