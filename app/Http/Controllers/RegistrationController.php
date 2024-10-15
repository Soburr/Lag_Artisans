<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Artisan;

class RegistrationController extends Controller
{

    public function showRegistrationForm()
    {
        return view('auth.register-artisan');  
    }


    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Artisan::class],
            'artisan' => ['required', 'string', 'max:255'],
            'number' => ['required', 'string', 'digits:11'],
            'department' => ['required', 'string', 'max:255'],
            'hostel' => 'required|in:Amina,Biobaku,El-Kanemi,Eni-njoku,Fagunwa,Gbajabiamila,Honours,Jaja,Kofo,Mariere,Makama,Moremi,Sodeinde',
            'password' => ['required', 'string', 'confirmed', Rules\Password::defaults()],
        ]);

     
        $artisan = Artisan::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'artisan' => $validatedData['artisan'],
            'number' => $validatedData['number'],
            'department' => $validatedData['department'],
            'hostel' => $validatedData['hostel'],
            'password' => Hash::make($validatedData['password']),  
        ]);

       
        Auth::guard('artisan')->login($artisan);

        return redirect('/login')->with('success', 'Registration successful.');
    }



    public function showLoginForm()
    {
        return view('auth.login-artisan'); 
    }

    public function login(Request $request)
    {
      
        $request->validate([
            'email' => 'required|email', 
            'password' => 'required',
        ]);

        $artisan = Artisan::where('email', $request->email)->first();

        if ($artisan && Hash::check($request->password, $artisan->password)) {

            Auth::guard('artisan')->login($artisan);
            return redirect('/dashboard')->with('success', 'You are successfully logged in.');
        } else {
            return redirect()->back()->withErrors(['email' => 'Invalid credentials provided.']);
        }
    }

    public function logout()
    {
        Auth::guard('artisan')->logout();
        return redirect('/login')->with('success', 'You have been logged out.');
    }
}


