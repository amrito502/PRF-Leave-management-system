<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EmployeeFileUpload;
use App\Models\User;
use App\Models\Employee;
use App\Models\Department;
use App\Models\Designation;

class AdministratorController extends Controller
{
    public function dashboard(){

        return view('administrator.dashboard');
    }

    // =============employee-start=============
    public function employee_index(){
        $employees = Employee::with('department')->get();
        return view('administrator.employee.index',compact('employees'));
    }

    public function employee_create(){
        $departments = Department::latest()->get();
        $designations = Designation::latest()->get();
        $users = User::latest()->get();
        return view('administrator.employee.create', compact('departments','designations','users'));
    }

    public function employee_store(Request $request){
        $request->validate([
            'employee_code' => 'required',
            'name' => 'required',
            'username' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'alternate_phone' => 'required',
            'address' => 'required',
            'job_location' => 'required',
            'department_id' => 'required',
            'designation_id' => 'required',

            'joining_date' => 'required',
            'resign_date' => 'required',
            'dob' => 'required',
        ]);

        $employee = new Employee;
        $employee->employee_code = trim($request->employee_code);
        $employee->name = trim($request->name);
        // $employee->employee_id = strtolower(str_replace(' ', '-', $request->name));
        $employee->username = trim($request->username);
        $employee->email = trim($request->email);
        $employee->phone = trim($request->phone);
        $employee->alternate_phone = trim($request->alternate_phone);
        $employee->address = trim($request->address);
        $employee->job_location = trim($request->job_location);
        $employee->department_id = trim($request->department_id);
        $employee->designation_id = trim($request->designation_id);
        $employee->role_id = trim($request->role_id);
        $employee->joining_date = trim($request->joining_date);
        $employee->resign_date = trim($request->resign_date);
        $employee->dob = trim($request->dob);
        $employee->status = $request->status == true ? '1' : '0';

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/employee/profile/', $fileName);
            $employee->image = $fileName;
        }
        $employee->save();
        return response()->json(['employee Created Successfully!']);
    }


    // **********file-uploads******************

    // ************file upload 1***************
    public function employee_file_upload_1(Request $request){

        $request->validate([
            'file_1' => 'required',
        ]);

        $fileUpload_1 = new EmployeeFileUpload;

        if ($request->hasFile('file_1')) {
            $file = $request->file('file_1');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/file_1/', $fileName);
            $fileUpload_1->file_1 = $fileName;
        }
        $fileUpload_1->save();
        return response()->json(['file_1 Uploaded Successfully!']);
    }



    // ***************file upload 2=================
    public function employee_file_upload_2(Request $request){

        $request->validate([
            'file_2' => 'required',
        ]);

        $fileUpload_2 = new EmployeeFileUpload;

        if ($request->hasFile('file_2')) {
            $file = $request->file('file_2');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/file_2/', $fileName);
            $fileUpload_2->file_2 = $fileName;
        }
        $fileUpload_2->save();
        return response()->json(['file_2 Uploaded Successfully!']);
    }


    // ***************file upload 3=================
    public function employee_file_upload_3(Request $request){

        $request->validate([
            'file_3' => 'required',
        ]);

        $fileUpload_3 = new EmployeeFileUpload;

        if ($request->hasFile('file_3')) {
            $file = $request->file('file_3');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/file_3/', $fileName);
            $fileUpload_3->file_3 = $fileName;
        }
        $fileUpload_3->save();
        return response()->json(['file_3 Uploaded Successfully!']);
    }


    // ***************file upload 4=================
    public function employee_file_upload_4(Request $request){

        $request->validate([
            'file_4' => 'required',
        ]);

        $fileUpload_4 = new EmployeeFileUpload;

        if ($request->hasFile('file_4')) {
            $file = $request->file('file_4');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/file_4/', $fileName);
            $fileUpload_4->file_4 = $fileName;
        }
        $fileUpload_4->save();
        return response()->json(['file_4 Uploaded Successfully!']);
    }


    // ***************file upload 5=================
    public function employee_file_upload_5(Request $request){

        $request->validate([
            'file_5' => 'required',
        ]);

        $fileUpload_5 = new EmployeeFileUpload;

        if ($request->hasFile('file_5')) {
            $file = $request->file('file_5');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/file_5/', $fileName);
            $fileUpload_5->file_5 = $fileName;
        }
        $fileUpload_5->save();
        return response()->json(['file_5 Uploaded Successfully!']);
    }


    // ***************file upload 6=================
    public function employee_file_upload_6(Request $request){

        $request->validate([
            'file_6' => 'required',
        ]);

        $fileUpload_6 = new EmployeeFileUpload;

        if ($request->hasFile('file_6')) {
            $file = $request->file('file_6');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $file->move('file_uploads/file_6/', $fileName);
            $fileUpload_6->file_6 = $fileName;
        }
        $fileUpload_6->save();
        return response()->json(['file_6 Uploaded Successfully!']);
    }

    // ***************employee-start*****************






    // =============application-start=============
    public function application_index(){
        return view('administrator.application.index');
    }

    public function application_create(){
        return view('administrator.application.create');
    }

    public function application_store(){

    }

    //==============application-end===============





    // =============leave_type-start=============
    public function leave_type_index(){
        return view('administrator.leave_type.index');
    }

    public function leave_type_create(){
        return view('administrator.leave_type.create');
    }

    public function leave_type_store(){

    }


    //==============leave_type-end===============



    public function reports(){
        return view('administrator.reports.index');
    }
}