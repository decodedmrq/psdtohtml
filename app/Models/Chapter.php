<?php

namespace App\Models;

class Chapter extends Model
{
    public function lessons()
    {
        return $this->hasMany(Lesson::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
