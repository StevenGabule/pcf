<?php

namespace App\Http\Controllers;

use App\Models\{Award, Barangay, Bidding, City, Course, HighSchool, Province, Religion, ReportProcurement, Tribe};
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        $courseTexts = Course::limit(8)->get();
        return view('index', compact('courseTexts', 'courses'));
    }

    /*
     * Get program or course
     * @param $slug
     * */
    public function program($slug)
    {
       $program = Course::whereSlug($slug)->firstOrFail();
       return view('program', compact('program'));
    }

    public function pre_registration(Request $request)
    {
        $high_schools = HighSchool::select('id', 'name')->get();
        $religions = Religion::select('id', 'name')->get();
        $tribes = Tribe::select('id', 'name')->get();
        $provinces = Province::select('id', 'name')->get();
        $cities = City::select('id', 'name')->get();
        $barangays = Barangay::select('id', 'name')->get();
        return view('pages.pre-registration',
            compact(
                'high_schools',
                'religions',
                'tribes',
                'provinces',
                'barangays',
                'cities'
            ));
    }

    public function biddings()
    {
        $biddings = Bidding::paginate(10);
        return view('bidding', compact('biddings'));
    }
    public function bidding_info($id)
    {
        $bidding_one = Bidding::find($id);
        return view('bidding_one', compact('bidding_one'));
    }

    public function awards()
    {
        $awards = Award::latest()->get();
        return view('award', compact('awards'));
    }
    public function infrastructure()
    {
        $biddings = Bidding::latest()->get();
        return view('bidding', compact('biddings'));
    }
    public function reports()
    {
        $reports = ReportProcurement::latest()->get();
        return view('bidding', compact('reports'));
    }
}
