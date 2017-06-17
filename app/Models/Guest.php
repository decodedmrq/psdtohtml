<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;

class Guest extends Model
{
    use Notifiable;

    const GENDER_MALE = 1;
    const GENDER_FEMALE = 2;

    public static function getGendersString()
    {
        return Guest::GENDER_MALE . ',' .
            Guest::GENDER_FEMALE;
    }
}
