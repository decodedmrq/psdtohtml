<?php

namespace App\Http\Controllers;

use App\Models\NewsLetter;
use App\Modules\MailChimp;
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
        $validator = validator($request->all(), ['email' => 'required|email']);

        if ($validator->fails()) {
            $errorMessage = $validator->messages()->first();
            return response_json(null, false, $errorMessage);
        }
        $newsletter = NewsLetter::where('email', $request->get('email'))->first();
        if ($newsletter) {
            return response_json(null, false, trans('messages.guest.email_exist'));
        }
        $stored = NewsLetter::create($request->all());

        return $stored ? response_json(null, true, trans('messages.guest.mail_register_success'))
            : response_json(null, false, trans('messages.guest.mail_register_failed'));
    }
}
