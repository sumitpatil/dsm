<?php

namespace App\Http\Controllers;

use App\MasterDsmBlock;
use Illuminate\Http\Request;

class MasterDsmBlockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
           $insert_data [] = array(
            array('id'=> 1, 'start_time'=>'00:00:00', 'end_time'=>'00:15:00'),
            array('id' =>2, 'start_time' => '00:15:01', 'end_time'=>'00:30:00'),
            array('id' =>3, 'start_time' => '00:30:01', 'end_time'=>'00:45:00'),
            array('id' =>4, 'start_time' => '00:45:01', 'end_time'=>'01:00:00'),
            array('id' =>5, 'start_time' => '01:00:01', 'end_time'=>'01:15:00'),
            array('id' =>6, 'start_time' => '01:15:01', 'end_time'=>'01:30:00'),
            array('id' =>7, 'start_time' => '01:30:01', 'end_time'=>'01:45:00'),
            array('id' =>8, 'start_time' => '01:45:01', 'end_time'=>'02:00:00'),
            array('id' =>9, 'start_time' => '02:00:01', 'end_time'=>'02:15:00'),
            array('id' =>10, 'start_time' => '02:15:01', 'end_time'=>'02:30:00'),
            array('id' =>11, 'start_time' => '02:30:01', 'end_time'=>'02:45:00'),
            array('id' =>12, 'start_time' => '02:45:01', 'end_time'=>'03:00:00'),
            array('id' =>13, 'start_time' => '03:00:01', 'end_time'=>'03:15:00'),
            array('id' =>14, 'start_time' => '03:15:01', 'end_time'=>'03:30:00'),
            array('id' =>15, 'start_time' => '03:30:01', 'end_time'=>'03:45:00'),
            array('id' =>16, 'start_time' => '03:45:01', 'end_time'=>'04:00:00'),
            array('id' =>17, 'start_time' => '04:00:01', 'end_time'=>'04:15:00'),
            array('id' =>18, 'start_time' => '04:15:01', 'end_time'=>'04:30:00'),
            array('id' =>19, 'start_time' => '04:30:01', 'end_time'=>'04:45:00'),
            array('id' =>20, 'start_time' => '04:45:01', 'end_time'=>'05:00:00'),
            array('id' =>21, 'start_time' => '05:00:01', 'end_time'=>'05:15:00'),
            array('id' =>22, 'start_time' => '05:15:01', 'end_time'=>'05:30:00'),
            array('id' =>23, 'start_time' => '05:30:01', 'end_time'=>'05:45:00'),
            array('id' =>24, 'start_time' => '05:45:01', 'end_time'=>'06:00:00'),
            array('id' =>25, 'start_time' => '06:00:01', 'end_time'=>'06:15:00'),
            array('id' =>26, 'start_time' => '06:15:01', 'end_time'=>'06:30:00'),
            array('id' =>27, 'start_time' => '06:30:01', 'end_time'=>'06:45:00'),
            array('id' =>28, 'start_time' => '06:45:01', 'end_time'=>'07:00:00'),
            array('id' =>29, 'start_time' => '07:00:01', 'end_time'=>'07:15:00'),
            array('id' =>30, 'start_time' => '07:15:01', 'end_time'=>'07:30:00'),
            array('id' =>31, 'start_time' => '07:30:01', 'end_time'=>'07:45:00'),
            array('id' =>32, 'start_time' => '07:45:01', 'end_time'=>'08:00:00'),
            array('id' =>33, 'start_time' => '08:00:01', 'end_time'=>'08:15:00'),
            array('id' =>34, 'start_time' => '08:15:01', 'end_time'=>'08:30:00'),
            array('id' =>35, 'start_time' => '08:30:01', 'end_time'=>'08:45:00'),
            array('id' =>36, 'start_time' => '08:45:01', 'end_time'=>'09:00:00'),
            array('id' =>37, 'start_time' => '09:00:01', 'end_time'=>'09:15:00'),
            array('id' =>38, 'start_time' => '09:15:01', 'end_time'=>'09:30:00'),
            array('id' =>39, 'start_time' => '09:30:01', 'end_time'=>'09:45:00'),
            array('id' =>40, 'start_time' => '09:45:01', 'end_time'=>'10:00:00'),
            array('id' =>41, 'start_time' => '10:00:01', 'end_time'=>'10:15:00'),
            array('id' =>42, 'start_time' => '10:15:01', 'end_time'=>'10:30:00'),
            array('id' =>43, 'start_time' => '10:30:01', 'end_time'=>'10:45:00'),
            array('id' =>44, 'start_time' => '10:45:01', 'end_time'=>'11:00:00'),
            array('id' =>45, 'start_time' => '11:00:01', 'end_time'=>'11:15:00'),
            array('id' =>46, 'start_time' => '11:15:01', 'end_time'=>'11:30:00'),
            array('id' =>47, 'start_time' => '11:30:01', 'end_time'=>'11:45:00'),
            array('id' =>48, 'start_time' =>'11:45:01', 'end_time'=>'12:00:00'),
            array('id' =>49, 'start_time' =>'12:00:01', 'end_time'=>'12:15:00'),
            array('id' =>50, 'start_time' =>'12:15:01', 'end_time'=>'12:30:00'),
            array('id' =>51, 'start_time' =>'12:30:01', 'end_time'=>'12:45:00'),
            array('id' =>52, 'start_time' =>'12:45:01', 'end_time'=>'13:00:00'),
            array('id' =>53, 'start_time' =>'13:00:01', 'end_time'=>'13:15:00'),
            array('id' =>54, 'start_time' =>'13:15:01', 'end_time'=>'13:30:00'),
            array('id' =>55, 'start_time' =>'13:30:01', 'end_time'=>'13:45:00'),
            array('id' =>56, 'start_time' =>'13:45:01', 'end_time'=>'14:00:00'),
            array('id' =>57, 'start_time' =>'14:00:01', 'end_time'=>'14:15:00'),
            array('id' =>58, 'start_time' =>'14:15:01', 'end_time'=>'14:30:00'),
            array('id' =>59, 'start_time' =>'14:30:01', 'end_time'=>'14:45:00'),
            array('id' =>60, 'start_time' =>'14:45:01', 'end_time'=>'15:00:00'),
            array('id' =>61, 'start_time' =>'15:00:01', 'end_time'=>'15:15:00'),
            array('id' =>62, 'start_time' =>'15:15:01', 'end_time'=>'15:30:00'),
            array('id' =>63, 'start_time' =>'15:30:01', 'end_time'=>'15:45:00'),
            array('id' =>64, 'start_time' =>'15:45:01', 'end_time'=>'16:00:00'),
            array('id' =>65, 'start_time' =>'16:00:01', 'end_time'=>'16:15:00'),
            array('id' =>66, 'start_time' =>'16:15:01', 'end_time'=>'16:30:00'),
            array('id' =>67, 'start_time' =>'16:30:01', 'end_time'=>'16:45:00'),
            array('id' =>68, 'start_time' =>'16:45:01', 'end_time'=>'17:00:00'),
            array('id' =>69, 'start_time' =>'17:00:01', 'end_time'=>'17:15:00'),
            array('id' =>70, 'start_time' =>'17:15:01', 'end_time'=>'17:30:00'),
            array('id' =>71, 'start_time' =>'17:30:01', 'end_time'=>'17:45:00'),
            array('id' =>72, 'start_time' =>'17:45:01', 'end_time'=>'18:00:00'),
            array('id' =>73, 'start_time' =>'18:00:01', 'end_time'=>'18:15:00'),
            array('id' =>74, 'start_time' =>'18:15:01', 'end_time'=>'18:30:00'),
            array('id' =>75, 'start_time' =>'18:30:01', 'end_time'=>'18:45:00'),
            array('id' =>76, 'start_time' =>'18:45:01', 'end_time'=>'19:00:00'),
            array('id' =>77, 'start_time' =>'19:00:01', 'end_time'=>'19:15:00'),
            array('id' =>78, 'start_time' =>'19:15:01', 'end_time'=>'19:30:00'),
            array('id' =>79, 'start_time' =>'19:30:01', 'end_time'=>'19:45:00'),
            array('id' =>80, 'start_time' =>'19:45:01', 'end_time'=>'20:00:00'),
            array('id' =>81, 'start_time' =>'20:00:01', 'end_time'=>'20:15:00'),
            array('id' =>82, 'start_time' =>'20:15:01', 'end_time'=>'20:30:00'),
            array('id' =>83, 'start_time' =>'20:30:01', 'end_time'=>'20:45:00'),
            array('id' =>84, 'start_time' =>'20:45:01', 'end_time'=>'21:00:00'),
            array('id' =>85, 'start_time' =>'21:00:01', 'end_time'=>'21:15:00'),
            array('id' =>86, 'start_time' =>'21:15:01', 'end_time'=>'21:30:00'),
            array('id' =>87, 'start_time' =>'21:30:01', 'end_time'=>'21:45:00'),
            array('id' =>88, 'start_time' =>'21:45:01', 'end_time'=>'22:00:00'),
            array('id' =>89, 'start_time' =>'22:00:01', 'end_time'=>'22:15:00'),
            array('id' =>90, 'start_time' =>'22:15:01', 'end_time'=>'22:30:00'),
            array('id' =>91, 'start_time' =>'22:30:01', 'end_time'=>'22:45:00'),
            array('id' =>92, 'start_time' =>'22:45:01', 'end_time'=>'23:00:00'),
            array('id' =>93, 'start_time' =>'23:00:01', 'end_time'=>'23:15:00'),
            array('id' =>94, 'start_time' =>'23:15:01', 'end_time'=>'23:30:00'),
            array('id' =>95, 'start_time' =>'23:30:01', 'end_time'=>'23:45:00'),
            array('id' =>96, 'start_time' =>'23:45:01', 'end_time'=>'23:59:59')
           );
           MasterDsmBlock::insert($insert_data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MasterDsmBlock  $masterDsmBlock
     * @return \Illuminate\Http\Response
     */
    public function show(MasterDsmBlock $masterDsmBlock)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MasterDsmBlock  $masterDsmBlock
     * @return \Illuminate\Http\Response
     */
    public function edit(MasterDsmBlock $masterDsmBlock)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MasterDsmBlock  $masterDsmBlock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MasterDsmBlock $masterDsmBlock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MasterDsmBlock  $masterDsmBlock
     * @return \Illuminate\Http\Response
     */
    public function destroy(MasterDsmBlock $masterDsmBlock)
    {
        //
    }
}
