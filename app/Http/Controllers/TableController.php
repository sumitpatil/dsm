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
    public function createTable($table_name, $fields = [])
    {
        // check if table is not already exists
        if (!Schema::hasTable($table_name)) {
            error_log('tableController createtable function in if');
            
            Schema::create($table_name, function (Blueprint $table) use ($fields, $table_name) {
                $table->increments('id');
                if (count($fields) > 0) {
                    foreach ($fields as $field) {
                        $table->{$field['type']}($field['name']);
                    }
                }
                $table->timestamps();

            });
            
            return response()->json(['message' => 'Given table has been successfully created!'], 200);
        }

        return response()->json(['message' => 'Given table is already existis.'], 400);
    }

    public function operate( $unit_value = [] )
    {
        // set dynamic table name according to your requirements

        $table_name = '';
        
        error_log('tableController operate');
        for($count = 0; $count < count($unit_value); $count++)
        {
            error_log('tableController operate in for loop');
            $table_name = 'input_unit_';

            $table_name = $table_name.$unit_value[$count];

            error_log('tableController operate in for loop befor model'.$table_name);
        
            //creating model for table all tables

            Artisan::call('make:model',['name' => $table_name] );

           // error_log('tableController operate in for loop after model');

            //add s to all table name (required)
            $table_name = $table_name.'s';
            
            error_log('tableController operate in for loop before field'.$table_name);

            // set your dynamic fields (you can fetch this data from database this is just an example)
            $fields = [
                ['name' => 'load', 'type' => 'integer'],
                ['name' => 'coal_flow', 'type' => 'integer'],
                ['name' => 'exbus', 'type' => 'integer'],
                ['name' => 'station_consumption', 'type' => 'integer']
            ];
            
            $this->createTable($table_name, $fields);
        }
        
        error_log('tableController operate end for loop');

        $table_name = 'master_dsm_block2';


        $fields =[
            ['name' => 'load', 'type' => 'integer'],
            ['name' => 'coal_flow', 'type' => 'integer'],
            ['name' => 'exbus', 'type' => 'integer']
                
        ];

        return response()->json([
            'success'  => 'Data Added successfully. Also create tables'
            ]);

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
