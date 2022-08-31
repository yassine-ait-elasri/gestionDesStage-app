<?php

namespace App\Http\Controllers;
use App\Models\user;

use Illuminate\Http\Request;

class registerController extends Controller
{
    //
    public function store()
    {


        $attributes=request()->validate([
            'nom' => 'required|max:255' ,
            'prenom' => 'required|max:255' ,
            'password' => 'required|max:255' ,
            'email' => 'required|max:255' ,
            'tel' => 'required' ,
            'profile' => 'required|max:255' ,
            ]);
           /// $attributes['password']=bcrypt($attributes['password']);
            
            $us=User::create($attributes);
            $us->save();
            auth()->login($us);
             return redirect('/');
        }
    
    
}
