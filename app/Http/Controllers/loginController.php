<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Foundation\Auth;
use App\Models\user;
class loginController extends Controller
{
    //

    public function login(Request $request )
    {      
        $attributes=request()->validate([
            'email'=>'required',
            'password' =>'required',
        ]);
        $email=$attributes['email'];
        $password=$attributes['password'];
      //  if(auth()->attempt($attributes))
     // dd(\Auth::attempt(['email' => $email, 'password' => $password]));
   if(\Auth::attempt(['email' => $email, 'password' => $password]))
     //   if(auth()->attempt(['email' => $email, 'password' => $password]))
       // if(auth()->attempt(['login' => $attributes->login, 'password' => $attributes->password]))
        {//dd($attributes);
            $user=User::where('email',$email)->first();
          //  dd($user->profile);
            if($user->profile=="BDO")
            {
              $hi=array('hi' => 'bienvenue '.$user->nom.$user->prenom , 'id'=>$user->id,'profile'=>$user->profile); 
               // return view('cs_interface',['hi'=>'bienvenue '.$user->nom.$user->prenom]);
               return redirect('/BDO_interface')->with('hi',$hi);
            }
            if($user->profile=="CGM")
            {
              
               return redirect('/CGM')->with('hi',[0=>'bienvenue '.$user->nom.$user->prenom,1=>$user,'profile'=>$user->profile]);
            }
            if($user->profile=="CS")
            {
                $hi=array('hi' => 'bienvenue '.$user->nom.$user->prenom , 'id'=>$user->id,'profile'=>$user->profile);
               return redirect('/CS_interface')->with('hi',$hi);
            }

            if($user->profile=="CD")
            {
                $hi=array('hi' => 'bienvenue '.$user->nom.$user->prenom , 'id'=>$user->id,'profile'=>$user->profile);
                
                return redirect('/CD_interface')->with('hi',$hi);
            }

            
        }
        return 'opps';

    }
}
