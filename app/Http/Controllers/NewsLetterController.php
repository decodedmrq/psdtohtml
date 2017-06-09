<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newsletter = NewsLetter::where('email', $request->get('email'))->first();
        if ($newsletter) {
            return response_json(null, false, trans('messages.guest.email_exist'));
        }
        $stored = NewsLetter::create($request->all());

        return $stored ? response_json(null, true, trans('messages.guest.mail_register_success'))
            : response_json(null, false, trans('messages.guest.mail_register_failed'));
    }
}
