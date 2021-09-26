<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    protected $data;
    protected $op;
    protected $status = false;

    public function Register(Request $request)
    {
        $this->data = $this->validate($request, [
            "name" => "required",
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        $this->data['password'] = bcrypt($request->password);

        $this->op = User::create($this->data);

        if ($this->op) {
            return redirect(url('/checkout'));
        } else {
            return back();
        }
    }


    public function Login(Request $request)
    {
        $this->data = $this->validate($request, [
            "email" => "required|email",
            "password" => "required|min:6"
        ]);

        if ($request->rememeber == "on") {
            $this->status = true;
        }

        if (Auth::guard('web')->attempt(["email" => $request->email, "password" => $request->password], $this->status)) {

            $request->session()->regenerate();
            return redirect(url('/checkout'));
        }



        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    public function Logout(Request $request)
    {
        Auth::guard('web')->Logout();
        $request->session()->regenerateToken();
        $request->session()->invalidate();
        return redirect(url('/login'));
    }
}
