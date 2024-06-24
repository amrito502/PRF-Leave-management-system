<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function dashboard(){
        return view('administrator.dashboard');
    }

    // =============employee-start=============
    public function employee_index(){
        return view('administrator.employee.index');
    }

    public function employee_create(){
        return view('administrator.employee.create');
    }

    public function employee_store(){

    }
    // =============employee-start=============


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

    // =============application-start=============
    public function department_index(){
        return view('administrator.department.index');
    }

    public function department_create(){
        return view('administrator.department.create');
    }

    public function department_store(){

    }

    //==============application-end===============

    // =============designation-start=============
    public function designation_index(){
        return view('administrator.designation.index');
    }

    public function designation_create(){
        return view('administrator.designation.create');
    }

    public function designation_store(){

    }


    //==============designation-end===============

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

    // =============user-start=============
    public function user_index(){
        return view('administrator.user_list.index');
    }

    public function user_create(){
        return view('administrator.user_list.create');
    }

    public function user_store(){

    }


    //==============user-end===============

    public function reports(){
        return view('administrator.reports.index');
    }
}