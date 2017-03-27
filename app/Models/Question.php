<?php

namespace App\Models;

class Question extends Model
{
    use CloudLinkTrait;

    const TYPE_SINGLE_CHOICE = 1;
    const TYPE_MULTI_CHOICE = 2;
    const TYPE_DRAG_DROP = 3;
    const TYPE_YES_NO = 4;

    protected $casts = ['correct_answer_id' => 'array'];

    protected $guarded = ['id'];
    protected $appends = ['correct_answers', 'media_link'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function rewards()
    {
        return $this->belongsToMany(Item::class, 'question_rewards', 'question_id')-> withPivot('drop_rate');
    }

    public function getCorrectAnswersAttribute()
    {
        $value = $this->correct_answer_id;
        if (!$value) {
            return $value;
        }
        $correct = null;
        switch ($this->type) {
            case Question::TYPE_SINGLE_CHOICE:
                $correct = intval($value[0]);
                break;
            case Question::TYPE_MULTI_CHOICE:
                $correct = implode(',', $value);
                break;
            case Question::TYPE_DRAG_DROP:
                $correct = null;
                break;
            case Question::TYPE_YES_NO:
                $correct = isset($value[0]) && $value[0] == 0 ? false : true;
                break;
        }

        return $correct;
    }
}
