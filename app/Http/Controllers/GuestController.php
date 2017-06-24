<?php

namespace App\Http\Controllers;

use App\Events\NewMailRegisteredEvent;
use App\Http\Requests\GuestStoreRequest;
use App\Models\Guest;
use App\Modules\Recaptcha;

class GuestController extends RenderController
{
    /**
     * Store a newly created resource in storage.
     *
     * @param GuestStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GuestStoreRequest $request)
    {
        $data = $request->only(['email', 'age', 'job', 'content']);

        $stored = Guest::create($data);

        if ($stored) event(new NewMailRegisteredEvent($stored));

        return $stored ? response_json(null, true, trans('messages.guest.mail_register_success'))
            : response_json(null, false, trans('messages.guest.mail_register_failed'));
    }

    public function register_trial()
    {
        $captcha = app('captcha');

        return view()->make('guest.register_trial')->with(compact('captcha'));
    }

}
