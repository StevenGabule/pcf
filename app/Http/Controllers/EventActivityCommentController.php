<?php

namespace App\Http\Controllers;

use App\Models\EventActivityComment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class EventActivityCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param $event_id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request, $event_id)
    {
        $this->validate($request, [
            'message' => 'required'
        ]);
        EventActivityComment::create([
            'user_id' => Auth::id(),
            'event_activity_id' => $event_id,
            'message' => $request->input('message')
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param EventActivityComment $eventActivityComment
     * @return Response
     */
    public function show(EventActivityComment $eventActivityComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param EventActivityComment $eventActivityComment
     * @return Response
     */
    public function edit(EventActivityComment $eventActivityComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param EventActivityComment $eventActivityComment
     * @return Response
     */
    public function update(Request $request, EventActivityComment $eventActivityComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param EventActivityComment $eventActivityComment
     * @return Response
     */
    public function destroy(EventActivityComment $eventActivityComment)
    {
        //
    }
}
