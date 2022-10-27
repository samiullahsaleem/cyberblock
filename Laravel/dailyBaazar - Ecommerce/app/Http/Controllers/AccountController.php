<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Validator;
use Auth;
use Session;

class AccountController extends Controller
{
    public function Update(Request $request)
    {
        Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255','min:3'],
            'password' => ['required','confirmed','string','min:8','regex:/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/'],
        ],
        
        [
            'password.regex' => 'Your password must be more than 8 characters long, should contain at-least 1 Uppercase, 1 Lowercase, 1 Numeric and 1 Special character!',

        ])->validate();

        $hashedPassword = Auth::user()->password;

        if (\Hash::check($request->opassword , $hashedPassword )) {
 
            if (!\Hash::check($request->password , $hashedPassword)) {
    
                 $users = User::find(Auth::user()->id);
                 $users->password = bcrypt($request->password);
                 User::where('id', Auth::user()->id)->update(['password' =>  $users->password, 'name' => $request->name]);
    
                 Session::flash('success', "Profile Updated Successfully!");
                 return redirect()->back();
               }
    
               else{
                    Session::flash('new-old', "New Password can not be the Old Password!");
                     return redirect()->back();
                   }
              }
    
             else{
                    Session::flash('fail', "Old Password does not match!");
                    return redirect()->back();
                }
    
    }
}
