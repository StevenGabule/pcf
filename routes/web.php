<?php

use Illuminate\Support\Facades\{Auth, Route};
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PageController@index')->name('homepage');
Route::get('/program/{slug}', 'PageController@program')->name('home.program');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bidding-notices', 'PageController@biddings')->name('biddings');
Route::get('/bidding-notices/{id}', 'PageController@bidding_info')->name('bidding_info');
Route::get('/award-notices', 'PageController@awards')->name('awards');
Route::get('/project-infrastructure', 'PageController@infrastructure')->name('infrastructures');
Route::get('/reports', 'PageController@reports')->name('reports');

Route::get('/pre-registration', 'PageController@pre_registration')->name('pre-registration');
Route::post('/pre-registration', 'StudentController@store')->name('student-registration');

/*
 * =========================================================
 * ROOT/SUPER ADMIN ROUTE PATH
 * ========================================================= */
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'AdminController@index')->name('admin.index');

    Route::get('/account', 'UserController@index')->name('user.index');
    Route::post('/account', 'UserController@fetch')->name('user.fetch');
    Route::resource('user', 'UserController');

    Route::post('/students', 'StudentController@fetch')->name('student.fetch');
    Route::resource('student', 'StudentController');

    Route::post('/courses', 'CourseController@fetch')->name('course.fetch');
    Route::resource('course', 'CourseController');

    Route::post('/school-items', 'SchoolItemController@fetch')->name('school-items.fetch');
    Route::resource('school-item', 'SchoolItemController');

    Route::post('/school-items-transaction', 'SchoolItemTransactionController@fetch')->name('school-items-transaction.fetch');
    Route::resource('school-item-transaction', 'SchoolItemTransactionController');

    Route::post('/event-activity', 'EventActivityController@fetch')->name('event-activities.fetch');
    Route::resource('event-activities', 'EventActivityController');

    Route::post('/announcement', 'AnnouncementController@fetch')->name('announcement.fetch');
    Route::resource('announcements', 'AnnouncementController');
});

Route::group(['prefix' => 'employeer'], function () {
    Route::get('/dashboard', 'EmployeerController@index')->name('employeer.index');
});

Route::group(['prefix' => 'student', 'middleware' => 'auth'], function () {
    Route::get('/dashboard', 'StudentPortalController@index')->name('student.portal.index');

    Route::get('/announcements', 'StudentPortalController@announcement')->name('student.portal.announcement');
    Route::get('/announcements/{id}', 'StudentPortalController@get_announcement')->name('student.portal.get_announcement');
    Route::post('/announcement/{announcement_id}', 'AnnouncementCommentController@store')->name('student.announcement.comment');

    Route::get('/event-activities', 'StudentPortalController@activities')->name('student.activities.index');
    Route::get('/event-activities/{id}', 'StudentPortalController@get_activities')->name('student.event.get_activities');
    Route::post('/event-activities/{event_id}', 'EventActivityCommentController@store')->name('student.event.comment');

});

Route::group(['prefix' => 'custodian'], function () {
    Route::get('/dashboard', 'StudentPortalController@index')->name('custodian.index');
});


