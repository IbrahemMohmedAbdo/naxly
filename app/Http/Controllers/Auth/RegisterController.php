<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;
use App\Http\Requests\RegisterUserRequest;

class RegisterController extends Controller
{
    //

    public function register(RegisterUserRequest $request)
    {
         $data=$this->create($request);

        if($data)
        {
            return redirect()->route('home')->with('success','Register Successfully');

        }
        else{
            return redirect()->back();
        }

    }

    protected function create(RegisterUserRequest $request)
    {
        return User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
 



}
