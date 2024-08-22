<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;

class contactController
{
    public function comment(Request $request){

        /*$request->validate([
            'department'=>'required',
            'EmployeeID'=>'required|email',
            'comment'=>'required',
            
            
            ]);*/
        
    
        $data=new contact();

        $data->department=$request->department;
        $data->EmployeeID=$request->EmployeeID;
        $data->comment=$request->comment;
        $data->save();
        return view('contact');
    }
}
