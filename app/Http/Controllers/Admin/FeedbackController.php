<?php

namespace App\Http\Controllers\Admin;

use App\Models\Feedback;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FeedbackController extends Controller
{
    protected $model = Feedback::class;

    public function index()
    {
        $feedbacks = $this->instance()->orderBy('created_at', 'desc')->paginate();

        return view('admin.feedback.index',compact('feedbacks'));

    }

    public function store(Request $request)
    {

    }

    public function update(Request $request, $id)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $feedback = $this->instance()->find($id);
        if ($feedback) {
            return response_json($feedback);
        }

        return response_json([], false, trans('messages.not_found'));
    }
}
