<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Institution;
use App\Models\User;

class InstitutionController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('institution');
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
		$name		 			= $request->name;
		$institution_type_id	= $request->institution_type_id;
		$location	 			= $request->location;
		$coordinate	 			= $request->coordinate;
		$description 			= $request->description;
		$message     			= '';

		try {

			$check_data = Institution::where('name', $name)->exists();
			
			if ($check_data > 0) {
				
				$data['result'] = 'failed';
				$data['message'] = 'Name already exists!';

			} else {

				$create_data = Institution::create([
					'name'        			=> $name,
					'institution_type_id'   => $institution_type_id,
					'location'    			=> $location,
					'coordinate'  			=> $coordinate,
					'description' 			=> $description
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
			
			$select_data = Institution::select(
                            'institution.*', 
                            'institution_type.id as institution_type_id',
                            'institution_type.name as institution_type_name')
                        ->join('institution_type', 'institution_type.id', '=', 'institution_type_id')->get();
		}
		else{

			$select_data = Institution::find($id)->get();$select_data = Institution::select(
                            'institution.*', 
                            'institution_type.name as type_name')
                        ->join('institution_type', 'institution_type.id', '=', 'institution_type_id')
                        ->where('institution.id', '=', $id)->get();
		}

		return response($select_data);
	}

	public function option($id)
	{
		if ($id == 'all') {
			
			$select_data = Institution::select('id','name')->get();
		}
		else {

			$select_data = Institution::select('id','name')->where('id', '=', $id)->get();
		}

		return response($select_data);
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
		$name		 			= $request->name;
		$institution_type_id	= $request->institution_type_id;
		$location	 			= $request->location;
		$coordinate	 			= $request->coordinate;
		$description 			= $request->description;
		$message     			= '';

		try {

			$data_db = Institution::find($id);
			
			if($name != $data_db->name){

				$check_data = Institution::where('name', $name)->exists();

				if ($check_data > 0) {
					
					$data['result'] = 'failed';
					$data['message'] = 'Name already exists!';

					return response($data);
				}
			}

			$update_data = Institution::where('id', $id)->update([
				'name'        			=> $name,
				'institution_type_id'   => $institution_type_id,
				'location'    			=> $location,
				'coordinate'  			=> $coordinate,
				'description' 			=> $description
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
		$delete_data = Institution::find($id)->delete();

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
