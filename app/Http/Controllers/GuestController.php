<?php

namespace App\Http\Controllers;

use App\Http\Requests\GuestStoreRequest;
use App\Models\Guest;

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
        $stored = Guest::create($request->all());

        return $stored ? response_json(null, true, trans('messages.guest.mail_register_success'))
            : response_json(null, false, trans('messages.guest.mail_register_failed'));
    }
}
