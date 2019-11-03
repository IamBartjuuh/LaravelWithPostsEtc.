<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UsersModel;

class UserController extends Controller
{
    public function getaanpassen()
    {
        return view('auth.aanpassen');
    }

    public function postaanpassen(Request $request, $user_id)
    {
        $request->validate([
            'naam' => 'required|max:100',
            'email' => 'required|email|max:100',
        ]);

        $users = UsersModel::find($user_id);
        $users->name = $request->input('naam');
        $users->email = $request->input('email');
        $users->save();

        return redirect('/home')->with('success', 'Gebruikersinformatie aangepast');
    }
}
