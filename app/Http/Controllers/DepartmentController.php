<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;

class DepartmentController extends Controller
{
// =============department-start=============
public function department_index(){
    return view('administrator.department.index');
}

public function department_create(){
    return view('administrator.department.create');
}

public function department_store(Request $request){
    $request->validate([
        'name' => 'required',
        'description' => 'required',
    ]);

    $department = new Department;
    $department->name = trim($request->name);
    $department->description = trim($request->description);
    $department->status = $request->status == true ? '1' : '0';
    $department->save();
    return response()->json(['Department Created Successfully!']);
}

//==============department-end===============
}