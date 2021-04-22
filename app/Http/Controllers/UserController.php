<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Traits\ImageHandle;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    use ImageHandle;
    public function index()
    {
        return view('admin.account.index');
    }

    public function fetch(Request $request)
    {
        if ($request->ajax()) {
            $table = User::all();
            return DataTables::of($table)->addColumn('action', static function ($data) {
                return <<<EOT
              <a class='btn btn-info btn-sm btn-edit' id='$data->id' href='/account/edit/$data->id'>
                <i class='fad fa-edit'></i>
              </a>
              <a class='btn btn-warning btn-sm btn-edit' id='$data->id' href='/account/password/edit/$data->id'>
                <i class='fad fa-lock'></i>
              </a>
              <a class='btn btn-secondary btn-sm btn-edit' id='$data->id' href='/account/password/edit/$data->id'>
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
        return view('admin.account.create');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:6',
            'avatar' => 'sometimes|required|image:jpeg,jpg,png',
            'user_type' => 'required',
        ]);

        $name = null;
        if ($originalImage = $request->file('avatar')) {
            $name = mt_rand() . '.' . $originalImage->getClientOriginalExtension();
            $this->uploadImages(null, $originalImage, $name);
        }
        $user = User::create(array_merge($request->except(['password_confirmation', '_token']), ['avatar' => $name]));
        return redirect()->route('user.index')->with(['name' => $user->name]);
    }

    public function edit(User $user)
    {
        return view('admin.account.edit', compact('user'));
    }

    /**
     * @param Request $request
     * @param User $user
     * @return RedirectResponse
     * @throws ValidationException
     */
    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'user_type' => 'required',
        ]);
        $user->update($request->only(['name', 'user_type']));
        return back()->with(['message' => 'successfully updated!']);
    }

    public function destroy(Request $request)
    {

    }
}
