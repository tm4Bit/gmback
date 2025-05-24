<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        $attributes = $request->validate([
            'name' => ['required'],
            'password' => ['required'],
            'g-recaptcha-response' => ['required', 'captcha'],
        ]);

        $credentials = [
            'name' => $attributes['name'],
            'password' => $attributes['password'],
        ];

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('dash');
        }

        return back()->withErrors([
            'auth' => 'Credenciais invalidas!',
        ])->onlyInput('name');
    }
}
