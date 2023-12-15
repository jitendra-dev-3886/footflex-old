<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;



class LoginAPIController extends Controller
{
   /**
     * Display a listing of the resource.
     */
    public function googleLogin()
    {  
        try {
            return Socialite::driver('google')->redirect();
        } catch (\Exception $e) {
            dd($e->getMessage());
        }
        // return Socialite::driver('google')->redirect();
    }
    public function callBackFromGoolge()
    {
        try {
            $user =  Socialite::driver('google')->user();
            if ($userInDatabase = User::where('email', $user->email)->first()) {
                $userInDatabase->google_id = $user->id;
                $userInDatabase->save();
            } else {
                User::create([
                    'email' => $user->email,
                    'name' => $user->name,
                    'google_id' => $user->id,
                    'password' => Hash::make(Str::random(10)),
                ]);
            }
            return redirect()->route('dashboard');
        } catch (\Exception $e) {
            return view('index');
        }
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
