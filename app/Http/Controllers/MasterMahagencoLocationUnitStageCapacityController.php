<?php

namespace App\Http\Controllers;

use App\MasterMahagencoLocationUnitStageCapacity;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Support\Facades\Artisan;

class MasterMahagencoLocationUnitStageCapacityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        error_log('MasterMahagencoLocationUnitStageCapacityController : index function');
        return view('installation.installation1');
        //return view('installation.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        error_log('MasterMahagencoLocationUnitStageCapacityController : create function');


        $power_plant_location_code = request('name');

        error_log($power_plant_location_code);


        switch ($power_plant_location_code) {
            case 'btps':
                $power_plant_location_name = 'Bhusawal TPS';
                $power_plant_database_name = 'mgbtps_dsm';
                break;
            case 'cstps':
                $power_plant_location_name = 'Chandrapur Super TPS';
                $power_plant_database_name = 'mgcstps_dsm';
                break;
            case 'kpkdtps':
                $power_plant_location_name = 'Khaperkheda TPS';
                $power_plant_database_name = 'mgkpkd_dsm';
                break;
            case 'ktps':
                $power_plant_location_name = 'Koradi TPS';
                $power_plant_database_name = 'mgktps_dsm';
                break;
            case 'ntps':
                $power_plant_location_name = 'Nashik TPS';
                $power_plant_database_name = 'mgntps_dsm';
                break;
            case 'ptps':
                $power_plant_location_name = 'Paras TPS';
                $power_plant_database_name = 'mgprs_dsm';
                break;
            case 'prltps':
                $power_plant_location_name = 'Parly TPS';
                $power_plant_database_name = 'mgprl_dsm';
                break;
            case 'gtps':
                $power_plant_location_name = 'Uran GTPS';
                $power_plant_database_name = 'mggtps_dsm';
                break;

            default:
                # code...
                break;
        } //end of switch

        return view(
            'installation.installation2',
            [
                'power_plant_location_name' => $power_plant_location_name,
                'power_plant_database_name' => $power_plant_database_name
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        error_log('MasterMahagencoLocationUnitStageCapacityController : store function');


        $power_plant_location_name = request('power_plant_location_name');
        $power_plant_database_name = request('power_plant_database_name');

        Artisan::call('migrate:reset');
        Artisan::call('migrate');

        //GTPS
        $insert_data[]= array('id' => 1, 'location' => 'Uran GTPS', 'unit' => '5', 'stage'=>'2', 'capacity' => '108.00');
        $insert_data[]= array('id' => 2, 'location' => 'Uran GTPS', 'unit' => '6', 'stage'=>'2', 'capacity' => '108.00');
        $insert_data[]= array('id' => 3, 'location' => 'Uran GTPS', 'unit' => '7', 'stage'=>'2', 'capacity' => '108.00');
        $insert_data[]= array('id' => 4, 'location' => 'Uran GTPS', 'unit' => '8', 'stage'=>'2', 'capacity' => '108.00');
        $insert_data[]= array('id' => 5, 'location' => 'Uran GTPS', 'unit' => '9', 'stage'=>'3', 'capacity' => '120.00');
        $insert_data[]= array('id' => 6, 'location' => 'Uran GTPS', 'unit' => '10', 'stage'=>'3', 'capacity' => '120.00');

        //BTPS
        $insert_data[]= array('id' => 7, 'location' => 'Bhusawal TPS', 'unit' => '3', 'stage'=>'2', 'capacity' => '210.00');
        $insert_data[]= array('id' => 8, 'location' => 'Bhusawal TPS', 'unit' => '4', 'stage'=>'3', 'capacity' => '500.00');
        $insert_data[]= array('id' => 9, 'location' => 'Bhusawal TPS', 'unit' => '5', 'stage'=>'3', 'capacity' => '500.00');
        
        //cstps
        $insert_data[]= array('id' => 10, 'location' => 'Chandrap Super TPS', 'unit' => '3', 'stage'=>'2', 'capacity' => '210.00');
        $insert_data[]= array('id' => 11, 'location' => 'Chandrap Super TPS', 'unit' => '4', 'stage'=>'2', 'capacity' => '210.00');
        $insert_data[]= array('id' => 12, 'location' => 'Chandrap Super TPS', 'unit' => '5', 'stage'=>'3', 'capacity' => '500.00');
        $insert_data[]= array('id' => 13, 'location' => 'Chandrap Super TPS', 'unit' => '6', 'stage'=>'3', 'capacity' => '500.00');
        $insert_data[]= array('id' => 14, 'location' => 'Chandrap Super TPS', 'unit' => '7', 'stage'=>'3', 'capacity' => '500.00');
        $insert_data[]= array('id' => 15, 'location' => 'Chandrap Super TPS', 'unit' => '8', 'stage'=>'4', 'capacity' => '500.00');
        $insert_data[]= array('id' => 16, 'location' => 'Chandrap Super TPS', 'unit' => '9', 'stage'=>'4', 'capacity' => '500.00');


        //kpkd tps
        $insert_data[]= array('id' => 17, 'location' => 'Khaperkheda TPS', 'unit' => '1', 'stage'=>'1', 'capacity' => '210.00');
        $insert_data[]= array('id' => 18, 'location' => 'Khaperkheda TPS', 'unit' => '2', 'stage'=>'1', 'capacity' => '210.00');
        $insert_data[]= array('id' => 19, 'location' => 'Khaperkheda TPS', 'unit' => '3', 'stage'=>'1', 'capacity' => '210.00');
        $insert_data[]= array('id' => 20, 'location' => 'Khaperkheda TPS', 'unit' => '4', 'stage'=>'1', 'capacity' => '210.00');
        $insert_data[]= array('id' => 21, 'location' => 'Khaperkheda TPS', 'unit' => '5', 'stage'=>'3', 'capacity' => '500.00');

        //ktps
        $insert_data[]= array('id' => 22, 'location' => 'Koradi TPS', 'unit' => '6', 'stage'=>'2', 'capacity' => '210.00');
        $insert_data[]= array('id' => 23, 'location' => 'Koradi TPS', 'unit' => '7', 'stage'=>'2', 'capacity' => '210.00');
        $insert_data[]= array('id' => 24, 'location' => 'Koradi TPS', 'unit' => '8', 'stage'=>'3', 'capacity' => '660.00');
        $insert_data[]= array('id' => 25, 'location' => 'Koradi TPS', 'unit' => '9', 'stage'=>'3', 'capacity' => '660.00');
        $insert_data[]= array('id' => 26, 'location' => 'Koradi TPS', 'unit' => '10', 'stage'=>'3', 'capacity' => '660.00');
        

        //Ntps
        $insert_data[]= array('id' => 27, 'location' => 'Nashik TPS', 'unit' => '3', 'stage'=>'2', 'capacity' => '210.00');
        $insert_data[]= array('id' => 28, 'location' => 'Nashik TPS', 'unit' => '4', 'stage'=>'2', 'capacity' => '210.00');
        $insert_data[]= array('id' => 29, 'location' => 'Nashik TPS', 'unit' => '5', 'stage'=>'2', 'capacity' => '210.00');

        //ptps
        $insert_data[]= array('id' => 30, 'location' => 'Paras TPS', 'unit' => '3', 'stage'=>'2', 'capacity' => '250.00');
        $insert_data[]= array('id' => 31, 'location' => 'Paras TPS', 'unit' => '4', 'stage'=>'2', 'capacity' => '250.00');

       
       //prl tps
        $insert_data[]= array('id' => 32, 'location' => 'Parly TPS', 'unit' => '6', 'stage'=>'3', 'capacity' => '250.00');
        $insert_data[]= array('id' => 33, 'location' => 'Parly TPS', 'unit' => '7', 'stage'=>'3', 'capacity' => '250.00');
        $insert_data[]= array('id' => 34, 'location' => 'Parly TPS', 'unit' => '8', 'stage'=>'4', 'capacity' => '250.00');

        error_log('MasterMahagencoLocationUnitStageCapacityController : store function before insert');
        $mahagencoModel = new MasterMahagencoLocationUnitStageCapacity();
        $mahagencoModel->insert($insert_data);

        error_log('MasterMahagencoLocationUnitStageCapacityController : store function after insert');

        
        $unitWiseStageWiseDetails = $mahagencoModel->where('location', 'like', $power_plant_location_name)->get();


        return view(
            'installation.index',
            [
                'power_plant_location_name' => $power_plant_location_name,
                'power_plant_database_name' => $power_plant_database_name,
                'unit_wise_stage_wise_details' => $unitWiseStageWiseDetails
            ]
        );

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MasterMahagencoLocationUnitStageCapacity  $masterMahagencoLocationUnitStageCapacity
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        error_log('MasterMahagencoLocationUnitStageCapacityController : show function');


        $power_plant_location_name = request('power_plant_location_name');
        $power_plant_database_name = request('power_plant_database_name');

        return view(
            'installation.installation3',
            [
                'power_plant_location_name' => $power_plant_location_name,
                'power_plant_database_name' => $power_plant_database_name
            ]
        );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasterMahagencoLocationUnitStageCapacity  $masterMahagencoLocationUnitStageCapacity
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterMahagencoLocationUnitStageCapacity $masterMahagencoLocationUnitStageCapacity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasterMahagencoLocationUnitStageCapacity  $masterMahagencoLocationUnitStageCapacity
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterMahagencoLocationUnitStageCapacity $masterMahagencoLocationUnitStageCapacity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasterMahagencoLocationUnitStageCapacity  $masterMahagencoLocationUnitStageCapacity
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterMahagencoLocationUnitStageCapacity $masterMahagencoLocationUnitStageCapacity)
    {
        //
    }
}
