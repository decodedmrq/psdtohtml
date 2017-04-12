<?php

namespace App\Models;

class Lesson extends Model
{
    use CloudLinkTrait;
    protected $guarded = ['id'];

    protected $appends = ['is_unlocked', 'media_link'];

    public function chapter()
    {
        return $this->belongsTo(Chapter::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }


    public function paidUsers()
    {
        return $this->belongsToMany(User::class, 'user_paid_lessons', 'lesson_id', 'user_id');
    }

    public function getIsUnlockedAttribute()
    {
        if ($this->isPaid()) return true;

        $userExp = auth()->user()->exp;
        $totalExp = 0;
        $previousLesson = Lesson::whereOrder($this->order - 1)->first();
        if ($previousLesson) {
            $previousLesson->exams()->free()->get()->pluck('questions')->each(function ($item) use (&$totalExp) {
                $totalExp += $item->sum('exp');
            })->all();
            $requiredExp = 0.7 * $totalExp;

            return $userExp >= $requiredExp;
        }

        return false;
    }

    public function isPaid()
    {
        $user = auth()->user();
        $hasPaid = $this->paidUsers()->find($user->id);

        return boolval($hasPaid);
    }


}
