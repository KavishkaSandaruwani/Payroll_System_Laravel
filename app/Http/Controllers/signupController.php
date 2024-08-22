<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
use Hash;
use Session;

class signupController 
{
    public function signin(Request $request){
      /*  $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:signs',
            'password'=>'required|min:4'
            
            ]);*/
      

        $data=new signup();

        $data->username=$request->username;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->save();
        return view('contact');
       
       /* $done= $data->save();
        if($done){
          return redirect('pay')->with('success','Registered successfully');
        }
        else{
          return back()->with('fail', 'Registration failed');
        }*/
    }

   
}