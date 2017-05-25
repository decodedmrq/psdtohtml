<?php

namespace App\Models;

class Course extends Model
{
    use CloudLinkTrait;
    protected $appends = ['media_link'];

    public function chapters()
    {
        return $this->hasMany(Chapter::class);
    }
}
