<?php

namespace App\Http\Controllers;

use App\Models\{BirthAddress, Contact, ContactPerson, EducationBackground, HomeAddress, LastSchool, Student};
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\{RedirectResponse, Request, Response};
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.student.index');
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $table = Student::all();
            return DataTables::of($table)->addColumn('action', static function ($data) {
                return <<<EOT
              <a class='btn btn-info btn-sm btn-edit' id='$data->id' href='/student/edit/$data->id'>
                <i class='fad fa-edit'></i>
              </a>
              <a class='btn btn-warning btn-sm btn-edit' id='$data->id' href='/student/password/edit/$data->id'>
                <i class='fad fa-lock'></i>
              </a>
              <a class='btn btn-secondary btn-sm btn-edit' id='$data->id' href='/student/password/edit/$data->id'>
                <i class='fad fa-mailbox'></i>
              </a>
              <a class='btn btn-danger btn-sm btn-delete' id='$data->id' href='javascript:void(0)' data-toggle="modal">
                <i class='fad fa-trash'></i>
              </a>
EOT;
            })->rawColumns(['action'])->make(true);
        }
        return null;
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $last_school = LastSchool::create([
            'high_school_id' => $request->input('last_school_id'),
            'award_received' => $request->input('last_school_award'),
            'year_last_attended' =>$request->input('last_school_year_attended'),
            'lrn' => $request->input('last_school_lrn')
        ]);

        $birth_address = BirthAddress::create($request->only(['birth_province_id','birth_city_id','birth_barangay_id','birth_street']));

        $home_address = HomeAddress::create($request->only(['home_province_id','home_city_id','home_barangay_id','home_street_name','home_postal_code']));

        $contact = Contact::create($request->only(['globe_tm','smart_tnt_sun','landline','social_facebook']));

        $contact_person = ContactPerson::create($request->only([
                'father_first_name',
                'father_middle_name',
                'father_last_name',
                'father_home_address',
                'father_contact_no',
                'father_occupation',

                'mother_first_name',
                'mother_middle_name',
                'mother_last_name',
                'mother_home_address',
                'mother_contact_no',
                'mother_occupation',

                'contact_first_name',
                'contact_middle_name',
                'contact_last_name',
                'contact_home_address',
                'contact_contact_no',
                'contact_relation',
                'contact_for_emergency']
        ));

        $education = EducationBackground::create($request->only(['primary_education',
            'primary_school_year','primary_school_honor','primary_school_address',
            'secondary_education','secondary_school_year','secondary_school_honor','secondary_school_address']));

        Student::create([
            'last_school_id' => $last_school['id'],
            'first_name' => $request->input('first_name'),
            'middle_name' => $request->input('middle_name'),
            'last_name' =>  $request->input('last_name'),
            'gender' => $request->input('gender'),
            'nick_name' => $request->input('nick_name'),
            'birthday' => $request->input('birthday'),
            'civil_status' => $request->input('civil_status'),
            'religion_id' => $request->input('religion_id'),
            'tribe_id' => $request->input('tribe_id'),
            'height' => $request->input('height'),
            'weight' => $request->input('weight'),
            'blood_type' => $request->input('blood_type'),
            'citizenship' => $request->input('citizenship'),
            'email' => $request->input('email'),
            'birth_address_id' => $birth_address['id'],
            'home_address_id' => $home_address['id'],
            'contact_id' => $contact['id'],
            'contact_person_id' => $contact_person['id'],
            'education_background_id' => $education['id']
        ]);
        return redirect()->route('login')->with([
            'message' => 'You pre-registered is complete. Thank you for your patient. We will be in touch soon in your application'
        ]);
    }

    public function show(Student $student)
    {
        //
    }


    public function edit(Student $student)
    {
        //
    }

    public function update(Request $request, Student $student)
    {
        //
    }


    public function destroy(Student $student)
    {
        //
    }
}
