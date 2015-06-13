<?php namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Requests\CreateUtilityRequest;
use App\Utility;
use Illuminate\Http\Request;

class AdminUtilityController extends AdminController
{

    /**
    * Display a listing of the resource.
    *
    * @return Response
    */
    public function index()
    {
        $services = Utility::orderBy('name')->get();

        return view('admin.utility.index', compact('services'));
    }

    /**
    * Show the form for creating a new resource.
    *
    * @return Response
    */
    public function create()
    {
        return view('admin.utility.create');
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return Response
    */
    public function store(CreateUtilityRequest $request)
    {
        $service = new Utility();

        $service->name        = $request->name;
        $service->description = $request->description;
        $service->contact     = $request->contact;
        $service->telno       = $request->telno;
        $service->cost        = $request->cost;
        $service->paid        = $request->paid;
        $service->date_due    = date("Y-m-d H:i:s",strtotime($request->date_due));

        $service->save();

        return redirect('admin/services');
    }

    /**
    * Display the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function show(Utility $service)
    {
        return view('admin.utility.show', compact('service'));
    }

    /**
    * Show the form for editing the specified resource.
    *
    * @param  int  $id
    * @return Response
    */
    public function edit(Utility $service)
    {
        return view('admin.utility.edit', compact('service'));
    }

    /**
    * Update the specified resource in storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function update(Utility $service, CreateUtilityRequest $request)
    {
        $service->name        = $request->name;
        $service->description = $request->description;
        $service->contact     = $request->contact;
        $service->telno       = $request->telno;
        $service->cost        = $request->cost;
        $service->paid        = $request->paid;
        $service->date_due    = date("Y-m-d H:i:s",strtotime($request->date_due));

        $service->save();

    return redirect('admin/service/' . $service->id . '/edit');
    }

    /**
    * Remove the specified resource from storage.
    *
    * @param  int  $id
    * @return Response
    */
    public function destroy($id)
    {
    //
    }

}