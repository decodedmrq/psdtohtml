<?php

namespace App\Models;

class Item extends Model
{
    use CloudLinkTrait;

    const TYPE_COMMON = 0;
    const TYPE_TREASURE = 1;
    const TYPE_EXAM_PACKAGE = 2;

    const LEVEL_NORMAL = 0;
    const LEVEL_MEDIUM = 1;
    const LEVEL_ADVANCED = 2;
    const LEVEL_LEGEND = 3;

    protected $table = 'items';
    protected $guarded = ['id'];
    protected $appends = ['media_link'];

    public function scopeUsed($query)
    {
        return $query->whereIsUsed(true);
    }
    public function scopeUnused($query)
    {
        return $query->whereIsUsed(false);
    }

    public function exams()
    {
        return Exam::whereIn('id', $this->exam_id)->get();
    }
}
