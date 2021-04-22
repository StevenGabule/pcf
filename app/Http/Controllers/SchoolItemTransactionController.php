<?php

namespace App\Http\Controllers;

use App\Models\SchoolItemTransaction;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;

class SchoolItemTransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        return view('admin.school_transaction.index');
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $table = SchoolItemTransaction::with(['school_item'])->get();
            return DataTables::of($table)->addColumn('action', static function ($data) {
                return <<<EOT
              <a class='btn btn-info btn-sm btn-edit' id='$data->id' href='/account/edit/$data->id'>
                <i class='fad fa-edit'></i>
              </a>
              <a class='btn btn-danger btn-sm btn-delete' id='$data->id' href='javascript:void(0)' data-toggle="modal">
                <i class='fad fa-trash'></i>
              </a>
EOT;
            })->rawColumns(['action'])->make(true);
        }
        return null;
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
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  SchoolItemTransaction  $schoolItemTransaction
     * @return Response
     */
    public function show(SchoolItemTransaction $schoolItemTransaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  SchoolItemTransaction  $schoolItemTransaction
     * @return Response
     */
    public function edit(SchoolItemTransaction $schoolItemTransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  SchoolItemTransaction  $schoolItemTransaction
     * @return Response
     */
    public function update(Request $request, SchoolItemTransaction $schoolItemTransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  SchoolItemTransaction  $schoolItemTransaction
     * @return Response
     */
    public function destroy(SchoolItemTransaction $schoolItemTransaction)
    {
        //
    }
}
