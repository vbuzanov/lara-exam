<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class PrivateOfficeController extends Controller
{
    public function user()
    {
        $user = auth()->user();
        return view('privatoffice.private', compact('user'));
    }

    public function user_update(Request $request)
    {
        // dd($request->name);
        $user = User::findOrFail(auth()->user()->id);
        
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        
        $fname = $request->file('avatar');
        if($fname != null){
            $user->avatar = $fname->store('public/uploads');
            // dd($path);
        }
        // $user->avatar = $request->email;
        
        $validation = $request->validate([
            'name' => 'required|max:25',
            'email' => 'required',
            'avatar' => 'image',
        ]);

        $user->save();
        // $user = User::findOrFail(auth()->user()->id);
        // $user->update( $request->all() );
        return redirect('/private')->with('success', 'Thank! User updated!');
    }
}

