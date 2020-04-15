<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


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

            // artisan call migrate:reset
            Artisan::call('migrate:reset');

            
            Artisan::call('migrate');

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
            
            error_log('MasterUnitStageCapacityController : before model_name');    
            $model_name = '\\App\\'.'MasterUnitStageCapacity';

            error_log('MasterUnitStageCapacityController : before model_name'.$model_name);    

            $model = new $model_name;
            error_log('MasterUnitStageCapacityController : after instance create');    

            $model->insert($insert_data);

            error_log('MasterUnitStageCapacityController : after insert operation');    

            // App\MasterUnitStageCapacity::insert($insert_data);

            

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
