<?php

namespace App\Models;

class Feedback extends Model
{
    const TYPE_OTHER = 0;
    const TYPE_BUG = 1;
    const TYPE_FEEDBACK = 2;

    protected $table = 'feedback';
    protected $guarded = ['id'];
    protected $perPage = 10;
    protected $appends = ['full_name'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getFullNameAttribute()
    {
        if (!$this->user_id) return '';
        $user = $this->user;

        return $user ? $user->first_name . ' ' . $user->last_name : '';
    }

}
