<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\salary;

class adminController
{
    public function salarydetail(Request $request){
        $data=new salary();

        $data->fullname=$request->fullname;
        $data->EmployeeID=$request->EmployeeID;
        $data->address=$request->address;
        $data->department=$request->department;
        $data->month=$request->month;
        $data->basicSalary=$request->basicSalary;
        $data->hourlyPay=$request->hourlyPay;
        $data->workDays=$request->workDays;
        $data->attendancePay=$request->attendancePay;
        $data->overtimePay=$request->overtimePay;
        $data->bonus=$request->bonus;
        $data->loans=$request->loans;
        $data->noPay=$request->noPay;
        $data->epf=$request->epf;
        $data->totalPay=$request->totalPay;

        $data->save();

        return redirect('admin')->with('success','Payment details submitted successfully!');


    }
}
