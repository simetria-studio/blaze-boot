<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Mails;
use App\Mail\UserMail;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index()
    {
        return view('adm');
    }

    public function storeUser(Request $request)
    {

        $random = Str::random(10);

        User::create([
            'email' => $request->email,
            'name' => $request->name,
            'password' => Hash::make($random)
        ]);

        $mails = new Mails();
        $mails['name'] = $request->name;
        $mails['email'] = $request->email;
        $mails['password'] = $random;

        Mail::to($request->email)->send(new UserMail($mails));
        return redirect()->back()->with('success', 'Usuário criado com sucesso');
    }

    public function users()
    {
        $users = User::all();
        return view('users', get_defined_vars());
    }

    public function userStatus(Request $request, $id)
    {
        $user = User::find($id);
        $user->permission = $request->status;
        $user->save();

        return redirect()->back();
    }

    public function userEdit($id)
    {
        $user = User::find($id);
        return view('user-edit', get_defined_vars());
    }
    public function userUpdate(Request $request, $id)
    {
        $user = User::find($id);
        $user->email = $request->input('email');
        $user->name = $request->input('name');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return redirect()->back()->with('success', 'Usuário editado com sucesso');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
