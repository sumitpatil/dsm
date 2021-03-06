<?php

namespace App\Http\Controllers;

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;

class TableController extends Controller
{
         /**
     * Create dynamic table along with dynamic fields
     *
     * @param       $table_name
     * @param array $fields
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function createTable($table_name, $fields = []){
        // check if table is not already exists
        if (!Schema::hasTable($table_name)) {
            error_log('tableController createtable function in if');
            
            Schema::create($table_name, function (Blueprint $table) use ($fields, $table_name) {
                $table->increments('in_id');
                if (count($fields) > 0) {
                    foreach ($fields as $field) {
                        $table->{$field['type']}($field['name'])->nullable();
                    }
                }
                $table->timestamps();
            });
            
            return response()->json(['message' => 'Given table has been successfully created!'], 200);
        }

        return response()->json(['message' => 'Given table is already existis.'], 400);
    }

     /**
     * Create dynamic Output table along with dynamic fields
     *
     * @param       $table_name
     * @param array $fields
     *
     * @return \Illuminate\Http\JsonResponse
     */
   /*
     public function createTableOutput($table_name, $fields = [])
    {
        // check if table is not already exists
        if (!Schema::hasTable($table_name)) {
            error_log('tableController createtableoutput function in if');
            
            Schema::create($table_name, function (Blueprint $table) use ($fields, $table_name) {
                $table->increments('id');
                if (count($fields) > 0) {
                    foreach ($fields as $field) {
                        $table->{$field['type']}($field['name']);
                    }
                }
                $table->timestamps();
                
                error_log('tableController createtableoutput function in if before foreign key');
               // $table->foreign('block')->references('id')->on('master_dsm_blocks');
              //  $table->foreign('user_id')->references('id')->on('users');
                error_log('tableController createtableoutput function in if afters foreign key');
            });
            
            return response()->json(['message' => 'Given table has been successfully created!'], 200);
        }

        return response()->json(['message' => 'Given table is already existis.'], 400);
    }
*/
    /**
     * To operate the tabel from the database 
     * 
     * @param $unit_value []
     *
     * @return json 
     */

    public function operate( $unit_value = [] )
    {
        // set dynamic table name according to your requirements

        $table_name = '';
        
        error_log('tableController operate');

        //for input table creations
        for($count = 0; $count < count($unit_value); $count++){
            error_log('tableController operate in for input loop');
            $table_name = 'input_unit_';

            $table_name = $table_name.$unit_value[$count];

            error_log('tableController operate in for  input loop befor model '.$table_name);
        
            //creating model for table all tables

            Artisan::call('make:model',['name' => $table_name] );

           // error_log('tableController operate in for loop after model');

            //add s to all table name (required)
            $table_name = $table_name.'s';
            
            error_log('tableController operate in for input loop before field '.$table_name);

            // set your dynamic fields (you can fetch this data from database this is just an example)
            $fields = [
                ['name' => 'load', 'type' => 'double'],
                ['name' => 'coal_flow', 'type' => 'double'],
                ['name' => 'exbus', 'type' => 'double'],
                ['name' => 'station_consumption', 'type' => 'double'],
                ['name'=> 'mvr', 'type' => 'double']
            ];
            
            $this->createTable($table_name, $fields);
        }

        //for output table creation
        for($count = 0; $count < count($unit_value); $count++)
        {
            error_log('tableController operate in for output loop');
            $table_name = 'output_unit_';

            $table_name = $table_name.$unit_value[$count];

            error_log('tableController operate in for loop before model '.$table_name);
        
            //creating model for table all tables
            Artisan::call('make:model',['name' => $table_name] );

            //add s to all table name (required)
            $table_name = $table_name.'s';
            
            error_log('tableController operate in for loop before field '.$table_name);

            // set your dynamic fields (you can fetch this data from database this is just an example)
            $fields = [
                ['name' => 'block', 'type' => 'integer'],
                ['name' => 'avg_ag', 'type' => 'double'],
                ['name' => 'deviation', 'type' => 'double'],
                ['name' => 'gain_or_loss', 'type' => 'double']
            ];

            error_log('tableController operate in for loop after field '.$table_name);
            
            $this->createTable($table_name, $fields);
        }
        


        //create dc (declare capacity )
        $table_name = 'input_declare_capacities';
        error_log($table_name);
        for($count = 0; $count < count($unit_value); $count++){
            $data = array(
                    'name' => $unit_value[$count], 'type'  => 'double'
                );
            $insert_data[] = $data; 
        }
        $insert_data[]= array(
            'name'=> 'date',
            'type' => 'date'
        );

        error_log('after insert data');
        /*
        Artisan::call('make:model', 
        ['name'=> 'input_declare_capacity',
        '--resource' => true
        ]);
        */
        
        error_log('after model create');
       
        $this->createTable($table_name, $insert_data);

        //create dc (input  schedule generation )
        $table_name = 'input_shcedule_generations';
        error_log($table_name);
      /*
        Artisan::call('make:model', 
        ['name'=> 'input_schedule_generation',
        '--resource' => true
        ]);
        */

        $this->createTable($table_name, $insert_data);


        error_log('tableController operate end for loop');

/*
        return response()->json([
            'success'  => 'Data Added successfully. Also create tables'
            ]);
*/      
        return view('installation.success');
    } //end of operate funtion




    /**
     * To delete the tabel from the database 
     * 
     * @param $table_name
     *
     * @return bool
     */
    public function removeTable($table_name)
    {
        Schema::dropIfExists($table_name); 
        
        return true;
    }//end of removeTable funtion
}
