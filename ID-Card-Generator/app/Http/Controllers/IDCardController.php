<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use Validator;
use PDF;

class IDCardController extends Controller
{
    //
    function index()
    {
    	return view('view-file/index');
    }

    function Save(Request $request)
    {
    	$employee = new Employee;

    	$validator = Validator::make($request->all(),[
    		'name'=>'required',
    		'email'=>'required |email|unique:employees',
    		'mobile'=>'required|min:10|max:10',
    		'address'=>'required',
    		'department'=>'required',
    		'joining'=>'required',
    		'myfile'=>'required'
    	]);
    	if(!$validator->passes())
    	{
    		return response()->json(['status'=>0,'error'=>$validator->errors()->toArray()]);
    	}
    	else
    	{
    		$employee->name = $request->name;
	    	$employee->email = $request->email;
	    	$employee->mobile = $request->mobile;
	    	$employee->address = $request->address;
	    	$employee->department = $request->department;
            $employee->joining_data = $request->joining;
	    	$employee->position = $request->position; 
	    	$employee->profile =$request->file('myfile')->store('');

	    	if($employee->save())
	    	{
	    		return  json_encode(array('status'=>'success'));
	    	}
	    	else
	    	{
	    		return  json_encode(array('status'=>'error'));
	    	}
    	}
   }

   function employees()
   {
    $data = Employee::all();

    return view('view-file/employee',['employees'=>$data]);
   }
   function viewEmployee($emp_id)
   {
    return Employee::find($emp_id);
   }

   function download(Request $request)
   {
        $emp_id = $request->emp_id;
        $data = Employee::find($emp_id);
        return view('view-file/download',['downloads'=>$data]);
        /*$pdf = PDF::loadView('view-file/download',['downloads'=>$data]);
        return $pdf->download('Employee.pdf');*/ 
   }

}
