<?php

namespace App\Http\Controllers;

use App\Models\AnnouncementComment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class AnnouncementCommentController extends Controller
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
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @param $announcement_id
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request, $announcement_id)
    {
        $this->validate($request, [
            'message' => 'required'
        ]);
        AnnouncementComment::create([
            'user_id' => Auth::id(),
            'announcement_id' => $announcement_id,
            'message' => $request->input('message')
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param AnnouncementComment $announcementComment
     * @return Response
     */
    public function show(AnnouncementComment $announcementComment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param AnnouncementComment $announcementComment
     * @return Response
     */
    public function edit(AnnouncementComment $announcementComment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param AnnouncementComment $announcementComment
     * @return Response
     */
    public function update(Request $request, AnnouncementComment $announcementComment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param AnnouncementComment $announcementComment
     * @return Response
     */
    public function destroy(AnnouncementComment $announcementComment)
    {
        //
    }
}
