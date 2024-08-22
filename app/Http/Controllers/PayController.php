<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\salary;
Use App\Models\oldpay;

class PayController
{
    public function paysheet(Request $request)
    {
        $search=$request->input('fullname');
        $search1=$request->input('EmployeeID');
      $users =salary::where('EmployeeID',$search1)->get();
if($users->isEmpty()){
  return back()->with('error','User not found!');
  
}
else{
  return view('pay',compact('users'));
  }

    }

    public function paysheets(Request $request)
    {
        $search=$request->input('fullname');
        $search1=$request->input('EmployeeID');
      $employe =oldpay::where('EmployeeID',$search1)->get();
if($employe->isEmpty()){
  return back()->with('error','User not found!');
  
}
else{
  return view('pay',compact('employe'));
  }

    }
}
