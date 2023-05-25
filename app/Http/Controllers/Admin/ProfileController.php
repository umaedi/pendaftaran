<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserServices;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = new UserServices($user);
    }
    public function index()
    {
        return view('admin.profile.index');
    }

    public function update(Request $request, $id)
    {
        if (\request()->ajax()) {
            if ($request->file('img')) {
                $this->user->update($id, $request->except('_token'), true, 'public/profile');
            } else {
                $this->user->update($id, $request->except('_token'));
            }

            return response()->json([
                'success'   => true,
                'message'   => 'Profile Berhasil Diperbaharui'
            ]);
        }
    }
}
