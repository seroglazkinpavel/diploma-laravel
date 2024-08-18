<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\Category;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request): RedirectResponse
    {
//        $request->authenticate();
//
//        $request->session()->regenerate();
//
//        if ($request->user()->admin === 1) {
//            return redirect('admin');
//        }
//
//        return redirect()->intended(route('dashboard', absolute: false));

        if (! Auth::attempt($request->only('email', 'password'), $request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => 'Эти учетные данные не соответствуют нашим записям.'
            ]);

        }

        $request->session()->regenerate();

        if ($request->user()->admin === 1) {
            return redirect('admin');
        }

        return redirect()->intended('dashboard');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

//    public function dashboard()
//    {
//        if(Auth::check()){
//            return view('dashboard');
//        }
//
//        return redirect("login")->withSuccess('Opps! You do not have access');
//    }
}
