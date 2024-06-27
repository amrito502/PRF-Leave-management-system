<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Designation;
class DesignationController extends Controller
{
      // =============designation-start=============
      public function designation_index(){
        return view('administrator.designation.index');
    }

    public function designation_create(){
        return view('administrator.designation.create');
    }

    public function designation_store(Request $request){
        $request->validate([
            'designation' => 'required',
            'description' => 'required',
        ]);

        $designation = new Designation;
        $designation->designation = trim($request->designation);
        $designation->description = trim($request->description);
        $designation->status = $request->status == true ? '1' : '0';
        $designation->save();
        return response()->json(['Designation Created Successfully!']);
    }


    //==============designation-end===============
}