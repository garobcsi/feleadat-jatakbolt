<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthenticateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view("auth.login", [
            "title" => "Bejelentkezés"
        ]);
    }

    public function authenticate(AuthenticateRequest $request)
    {
        if (Auth::attempt($request->validated())) {
            
            
            if($request->wantsJson()) {
                $token = Auth::user()->createToken('auth_token')->plainTextToken;
                return response()->json(["data" => [ "token" => $token ]],200);
            }
            else {
                $request->session()->regenerate();
                return redirect()
                    ->intended('/') // itt nem route neve lesz megadva, hanem URI
                    ->with("success", "Sikeres belépés");
            }
        } else {
            if($request->wantsJson()) {
                $data = ["data" => ["message" => "Sikeretelen belépés"]];
                return response()->json($data, 401);
            }
            else {
                return redirect()
                    ->route("auth.login")
                    ->with("danger", "Sikertelen belépés!");
            }
        }
    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();

        session()->regenerateToken();

        return redirect()->route("home")->with("success", "Sikeres kijelentkezés");
    }
}
