<?php

namespace App\Models;


class Answer extends Model
{
    use CloudLinkTrait;

    protected $guarded = ['id'];

    protected $appends = ['media_link'];

    public function question()
    {
        $this->belongsTo(Question::class);
    }
}
