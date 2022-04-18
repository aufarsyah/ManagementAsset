<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TranInstitutionSensors;
use App\Models\User;

class InstitutionSensorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('institution_sensors');
    }

    public function index_map()
    {
        return view('institution_sensors_map');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $institution_id = $request->institution_id;
        $sensors_id     = $request->sensors_id;
        $serial_number  = $request->serial_number;
        $expired_date   = $request->expired_date;
        $message        = '';

        try {

            $check_data = TranInstitutionSensors::where('institution_id', $institution_id)
                            ->where('sensors_id', $sensors_id)
                            ->where('serial_number', $serial_number)
                            ->where('expired_date', $expired_date)
                            ->exists();
            
            if ($check_data > 0) {
                
                $data['result'] = 'failed';
                $data['message'] = 'Data already exists!';

            } else {

                $create_data = TranInstitutionSensors::create([
                    'institution_id'    => $institution_id,
                    'sensors_id'        => $sensors_id,
                    'serial_number'     => $serial_number,
                    'expired_date'      => $expired_date
                ]);

                if ($create_data) {

                    $data['result'] = 'success';
                    $data['message'] = 'Congrats! Data has been created in the database!';
                }
                else{

                    $data['result'] = 'failed';
                    $data['message'] = 'Something when wrong, please contact administrator';

                }
            }
            
        } catch (Exception $e) {
            
            $data['result'] = 'failed';
            $data['message'] = 'Something when wrong, please contact administrator';
        }


        return response($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id == 'all') {
            
            $select_data = TranInstitutionSensors::select(
                            'tran_institution_sensors.*', 
                            'institution.name as institution_name', 
                            'institution.location as institution_location', 
                            'institution.coordinate as coordinate', 
                            'sensors.name as sensors_name')
                        ->join('institution', 'institution.id', '=', 'institution_id')
                        ->join('sensors', 'sensors.id', '=', 'sensors_id')->get();
        }
        else{

            $select_data = TranInstitutionSensors::find($id)->get();
        }

        return response($select_data);
    }

    public function option($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $institution_id = $request->institution_id;
        $sensors_id     = $request->sensors_id;
        $serial_number  = $request->serial_number;
        $expired_date   = $request->expired_date;
        $message        = '';

        try {

            $data_db = TranInstitutionSensors::find($id);
            
            $check_data = TranInstitutionSensors::where('institution_id', $institution_id)
                            ->where('sensors_id', $sensors_id)
                            ->where('serial_number', $serial_number)
                            ->where('expired_date', $expired_date)
                            ->exists();

            if ($check_data > 0) {
                
                $data['result'] = 'failed';
                $data['message'] = 'Data already exists!';

                return response($data);
            }

            $update_data = TranInstitutionSensors::where('id', $id)->update([
                'institution_id'    => $institution_id,
                'sensors_id'        => $sensors_id,
                'serial_number'     => $serial_number,
                'expired_date'      => $expired_date
            ]);

            if ($update_data) {

                $data['result'] = 'success';
                $data['message'] = 'Congrats! Data has been updated in the database!';
            }
            else{
                
                $data['result'] = 'success';
                $data['message'] = 'Success, but there is no changes!';
            }

            return response($data);

        } catch (Exception $e) {
            
            $data['result'] = 'failed';
            $data['message'] = 'Something when wrong, please contact administrator';
            $data['error'] = $e;

            return response($data);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete_data = TranInstitutionSensors::find($id)->delete();

        if ($delete_data) {

            $data['result'] = 'success';
            $data['message'] = 'Congrats! Data has been deleted from the database!';
        }
        else{

            $data['result'] = 'failed';
            $data['message'] = 'Something when wrong, please contact administrator';

        }

        return response($data);
    }
}
