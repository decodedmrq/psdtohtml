<?php

namespace App\Models;

class PaymentLog extends Model
{
    const FAILED = 0;
    const SUCCESS = 1;
    const PENDING = 2;


    const MOBILE_CARD = 1;

    const LOCAL_ATM = 2;

    const CREDIT_CARD = 3;

    protected $table = 'payment_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = ['id'];

    protected $casts = [
        'payload' => 'array',
        'callback_payload' => 'array',
    ];

    public function scopeMobile($query)
    {
        return $query->wherePaymentMethod(PaymentLog::MOBILE_CARD);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
