<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit(Request $request)
    {
        return view('profile', [
            'user' => $request->user(),
        ]);
    }

    public function update(Request $request)
    {
        $request->user()->update($request->only('name', 'email'));

        return redirect()->route('profile.edit')->with('status', 'profile-updated');
    }

    public function destroy(Request $request)
    {
        $request->user()->delete();

        return redirect('/')->with('status', 'account-deleted');
    }
}
