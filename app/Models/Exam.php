<?php

namespace App\Models;

class Exam extends Model
{
    const TYPE_FREE = 0;
    const TYPE_PAID = 1;

    protected $table = 'lesson_exams';
    protected $appends = ['is_unlocked', 'is_learned'];

    public function learnedUsers()
    {
        return $this->belongsToMany(User::class, 'user_learned_exams', 'exam_id', 'user_id');
    }

    public function questions()
    {
        return $this->hasMany(Question::class, 'exam_id');
    }

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }

    public function scopeFree($query)
    {
        return $query->whereType(Exam::TYPE_FREE);
    }

    public function scopePaid($query)
    {
        return $query->whereType(Exam::TYPE_PAID);
    }

    public function getIsUnlockedAttribute()
    {
        if ($this->type == Exam::TYPE_FREE) return true;
        $user = auth()->user();
        $hasPaid = $this->lesson->paidUsers()->find($user->id);

        return boolval($hasPaid);
    }

    public function getIsLearnedAttribute()
    {
        $user = auth()->user();
        $hasLearned = $this->learnedUsers()->find($user->id);

        return boolval($hasLearned);
    }

}
