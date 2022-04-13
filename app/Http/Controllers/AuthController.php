<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request)
    {
        // dd($request->all());
        $validationData = User::where('nik', $request->nik)->first();
        if($validationData) {
            $secondValidationData = User::where('name', $request->name)->first();
            
            if($secondValidationData){
                Auth::login($secondValidationData);
                return redirect('/home');
            }
        }
    }

    public function register(Request $request){
        // dd($request->all());
        // $request->validate([
        //     'nik' => 'required|integer|max:16|unique',
        //     'name' => 'required|string'
        // ]);
        
        $storeData = User::create($request->all());
        // dd($storeData);

        return redirect()->route('login');
    }

    public function logout(){
        Auth::logout();

        return redirect('/login');
    }
}
