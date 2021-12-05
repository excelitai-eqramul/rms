<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeController extends Controller
{
    function create(Request $request){
          //Validate inputs
          $request->validate([
             'name'=>'required',
             'email'=>'required|email|unique:employees,email',
             'hospital'=>'required',
             'password'=>'required|min:5|max:30',
             'cpassword'=>'required|min:5|max:30|same:password'
          ]);

                $employee = new Employee();
                $employee->name = $request->name;
                $employee->email = $request->email;
                $employee->hospital = $request->hospital;
                $employee->password = \Hash::make($request->password);
                $save = $employee->save();

                if( $save ){
                    return redirect()->back()->with('success','You are now registered successfully as Employee');
                }else{
                    return redirect()->back()->with('fail','Something went Wrong, failed to register');
                }
    }

                function check(Request $request){
                    //Validate Inputs
                    $request->validate([
                    'email'=>'required|email|exists:employees,email',
                    'password'=>'required|min:5|max:30'
                    ],[
                        'email.exists'=>'This email is not exists in employees table'
                    ]);

                    $creds = $request->only('email','password');

                    if( Auth::guard('employee')->attempt($creds) ){
                        return redirect()->route('employee.home');
                    }else{
                        return redirect()->route('employee.login')->with('fail','Incorrect Credentials');
                    }
                }

            function logout(){
                Auth::guard('employee')->logout();
                return redirect('/');
            }//end login logout method


        //////////////////////employee deshboard/////////////////////////////////////


            public function EmployeeDesh(){
                return view('backend.hrm.employee.employee_desh');
            }


}
