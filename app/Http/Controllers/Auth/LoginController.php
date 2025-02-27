<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;

use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login()
    {
        $user = User::query()
                    ->where('email', '=', request()->email)
                    ->first();
        
        if($user){
            auth()->login($user);

            if(Hash::check(request()->password, $user->password)){
                return to_route('dashboard');
            }
            
        } 
        
        return back()->with(['message'=>'Usuário não encontrado']);
    }

    
}
