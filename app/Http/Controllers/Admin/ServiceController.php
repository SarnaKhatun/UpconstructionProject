<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.service.manage', [
            'services' => Service::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.add', [
            'serviceCategories' => ServiceCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Service::saveServiceData($request);
        return back()->with('message', 'Service data created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.service.edit', [
            'serviceCategories' => ServiceCategory::all(),
            'service' => Service::where('id', $id)->first(),
        ]);
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
        Service::saveServiceData($request, $id);
        return redirect(route('services.index'))->with('message', 'Service data updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    protected static $service;
    public function destroy($id)
    {
        self::$service = Service::where('id', $id)->first();
        if (file_exists(self::$service->image))
        {
            unlink(self::$service->image);
        }
        Service::where('id', $id)->first()->delete();
        return back()->with('message', 'Service data deleted successfully');
    }
}
