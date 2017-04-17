<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFeedbackRequest;
use App\Models\Feedback;

class FeedbackController extends Controller
{
    protected $model = Feedback::class;
    /**
     * Store a newly created resource in storage.
     *
     * @param StoreFeedbackRequest|\Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFeedbackRequest $request)
    {
        $feedback = Feedback::create($request->all());
        if (!$feedback) return response_json(null, false, ['notify' => trans('messages.failed')]);

        return response_json(null, true, trans('messages.sent'));
    }
}
