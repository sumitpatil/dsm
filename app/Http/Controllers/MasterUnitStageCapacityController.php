<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

//use App\MasterUnitStageCapacity;
use App;
use Validator;
use App\Http\Controllers\TableController;

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
        if($request->ajax()){
            $rules = array(
            'unit_name.*'  => 'required',
            'stage_name.*'  => 'required',
            'capacity_name.*' => 'required'
            );
            $error = Validator::make($request->all(), $rules);
            if($error->fails()){
                return response()->json([
                    'error'  => $error->errors()->all()
                ]);
            }

            $unit_name = $request->unit_name;
            $stage_name = $request->stage_name;
            $capacity_name = $request->capacity_name;

            for($count = 0; $count < count($capacity_name); $count++){
                $data = array(
                        'unit_name' => $unit_name[$count],
                        'stage_name'  => $stage_name[$count],
                        'capacity_name'  => $capacity_name[$count]
                    );
                $insert_data[] = $data; 
            }
          /*  
            $name='APP\MasterUnitStageCapacit';
            $name=$name +'y';
            error_log($name);

            $name::insert($insert_data);
            error_log('MasterUnitStageCapacity : after insert query'.$name);
            */
            App\MasterUnitStageCapacity::insert($insert_data);

            

        /*   
            return response()->json([
            'success'  => 'Data Added successfully.'
            ]);
        */   
                //for creating table after getting entry

                $tableCon =new TableController();
                error_log('MasterUnitStageCapacityController');
                return $tableCon->operate($unit_name);
            }
    }//index with argument
    

}
