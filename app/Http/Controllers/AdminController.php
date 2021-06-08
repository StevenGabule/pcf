<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        // get the courses
        // get the students who take the courses
        $enrolled2011 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2011
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');

        $enrolled2012 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2012
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');

        $enrolled2013 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2013
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');


        $enrolled2014 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2014
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');


        $enrolled2015 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2015
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');


        $enrolled2016 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2016
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');


        $enrolled2017 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2017
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');


        $enrolled2018 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2018
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');

        $enrolled2019 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2019
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');

        $enrolled2020 = DB::select('select distinct(s.year_enrolled),  count(c.nick_name) as total, c.short_name from courses c
                inner join students s on c.id = s.course_id
                where s.year_enrolled = 2020
                group by s.year_enrolled,  c.short_name
                order by s.year_enrolled');

        // Yearly Report
        $yearly = DB::select('select year_enrolled, count(year_enrolled) from students group by year_enrolled order by year_enrolled;');

        return view('admin.index',
            compact(
                'enrolled2011','enrolled2012','enrolled2013',
                'enrolled2014','enrolled2015','enrolled2016',
                'enrolled2017','enrolled2018','enrolled2019','enrolled2020', 'yearly'
            ));
    }
}
