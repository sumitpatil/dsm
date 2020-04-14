<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\MasterUnitStageCapacity;
use Validator;


class MasterUnitStageCapacityController extends Controller
{
    function index()
    {
     return view('installation.index');
    }
/*
    function insert()
    {

          
      $unit_name =request('unit_name');
      $stage_name =request('stage_name');
      $capacity_name = request('capacity_name');
     
      for($count = 0; $count < count($unit_name); $count++)
      {
        $data = array(
            'unit_name' => $unit_name[$count],
            'stage_name'  => $stage_name[$count],
            'capacity_name'  => $capacity_name[$count]
        );
        $insert_data[] = $data; 
      }

      MasterUnitStageCapacity::insert($insert_data);
      return "achieved";
     
    }
*/
    function insert(Request $request){      
        if($request->ajax())
        {
        $rules = array(
        'first_name.*'  => 'required',
        'last_name.*'  => 'required'
        );
        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
        return response()->json([
            'error'  => $error->errors()->all()
        ]);
        }

        $unit_name = $request->unit_name;
        $stage_name = $request->stage_name;
        $capacity_name = $request->capacity_name;

        for($count = 0; $count < count($capacity_name); $count++)
        {
        $data = array(
                'unit_name' => $unit_name[$count],
                'stage_name'  => $stage_name[$count],
                'capacity_name'  => $capacity_name[$count]
            );
        $insert_data[] = $data; 
        }

        MasterUnitStageCapacity::insert($insert_data);
        return response()->json([
        'success'  => 'Data Added successfully.'
        ]);
        }
    }//index with argument
    

}
