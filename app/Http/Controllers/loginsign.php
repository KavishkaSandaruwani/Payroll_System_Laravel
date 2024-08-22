<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\signup;
use Hash;
use Session;

class loginsign
{
  public function indexlog(Request $request)
  {
     $request->validate([
    'email'=>'required|email',
    'passw'=>'required|min:4'
    
    ]);

    if($_POST['email']=='admin@gmail.com' && $_POST['passw']=='admin123'){
  
      return redirect('admin');
  }

  else{

    $user = signup::where('email','=',$request->email)->first();
    if($user){
      if(Hash::check($request->passw, $user->password)){
    
      return redirect('profile')->with('success','Login successful');
    }
      
    else{
      return back()->with('fail', 'Password not matches.');
    }
  }
    else{
      return back()->with('fail', 'This email is not registered.');
    }
  
  }


}

}