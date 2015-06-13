<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Utility;
use Illuminate\Http\Request;

class UtilitiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$services = Utility::orderBy('name')->get();

        $total_cost = 0;
        $paid       = 0;
        foreach($services as $service){

            if(isset($service->cost) && !empty($service->cost)){
                $total_cost += $service->cost;
            }
            if(isset($service->paid) && !empty($service->paid)){
                $paid += $service->paid;
            }

        }

        return view('pages.services', compact('services', 'total_cost', 'paid'));
	}

    public function show(Utility $service){


    }

}
