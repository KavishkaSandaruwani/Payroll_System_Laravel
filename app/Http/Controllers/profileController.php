<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\profile;

class profileController
{
    public function profiledata(Request $request){
        $data=new profile();

        $data->fullname=$request->fullname;
        $data->EmployeeID=$request->EmployeeID;
        $data->birthday=$request->birthday;
        $data->fullname=$request->fullname;
        $data->department=$request->department;
        $data->starting_date=$request->starting_date;
        $data->gender=$request->gender;
        $data->phone=$request->phone;
        $data->address=$request->address;
        $data->email=$request->email;
        $data->passw=$request->passw;
        $data->bank=$request->bank;
        $data->acc_type=$request->acc_type;
        $data->save();
        return view('profile');
    }
}
