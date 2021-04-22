<?php

namespace App\Http\Controllers;

use App\Models\Announcement;
use App\Models\EventActivity;
use Illuminate\Http\Request;

class StudentPortalController extends Controller
{
    public function index()
    {
        return view('student.index');
    }

    public function announcement()
    {
        $announcements = Announcement::paginate(10);
        return view('student.announcement.index', compact('announcements'));
    }
    public function get_announcement($id)
    {
        $announcement = Announcement::with(['comments.user'])->find($id);
        return view('student.announcement.show', compact('announcement'));
    }

    public function activities()
    {
        $events = EventActivity::paginate(10);
        return view('student.events.index', compact('events'));
    }


    public function get_activities($id)
    {
        $event = EventActivity::with(['comments.user'])->find($id);
        return view('student.events.show', compact('event'));
    }

}
