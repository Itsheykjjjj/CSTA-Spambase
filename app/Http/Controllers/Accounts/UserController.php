<?php

namespace App\Http\Controllers\Accounts;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class UserController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index(): View {
        $users = User::all();
        $roles = Role::query()->select('id', 'name')->get();
        $depts = Department::query()->select('id', 'name')->get();
        return view('pages.accounts.user.overview', compact('users', 'roles', 'depts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View {
        $roles = Role::query()->select('id', 'name')->get();
        $depts = Department::query()->select('id', 'name')->get();
        return view('pages.accounts.user.add-user', compact('roles', 'depts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request) {
        $userValidations = $request->validate([
            'fname' => ['required', 'min:2'],
            'lname' => ['required', 'min:2'],
        ]);

        User::class->create([
            'image' => request('avatar')->getClientOriginalName(),
            'fname' => request('fname'),
            'mname' => request('mname'),
            'lname' => request('lname'),
            'role_id' => request('role'),
            'dept_id' => request('dept'),
            'email' => request('email'),
            'phone_num' => request('phone'),
            'user_name' => request('user'),
            'pass_hash' => bcrypt(request('pass')),
        ]);

        return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user) {
        return view('components.modals.edit-user');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user) {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user) {
        //
    }
}
