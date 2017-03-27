<?php

namespace App\Models;

class SocialAccount extends Model
{
    protected $guarded = ['id'];
    protected $table = 'user_social_accounts';

    const PROVIDER_FACEBOOK = 'facebook';
    const PROVIDER_GOOGLE = 'google';

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
