<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Region;

use Illuminate\Http\Request;
use Session;


class DistrictsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware(['auth']); //middleware
    }


    public function index()
    {
        //

        $districts = District::all();
        $regions = Region::all();

        return view('districts.index', compact('districts', 'regions'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $regions = Region::pluck('region_name', 'id');


        return view('districts.create', compact('regions'));
    }

    /**
     * Store a newly created resource in storage.
     *s
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //


        $this->validate($request, ['name' => 'required', 'region' => 'required']);


        District::create(['district_name' => $request->get('name'), 'region_no' => $request->get('region')]);

        Session::flash('message', 'Successfully created District!');
        return redirect('districts');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $district = District::findOrFail($id);

        $region = Region::pluck('region_name', 'id');

        return view('districts.edit', compact('district', 'region'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $this->validate($request, ['name' => 'required', 'id' => 'required']);

        $district = District::findOrFail($request->get('id'));

        //dd($district);

        $district->update(['district_name' => $request->get('name'), 'region_no' => $request->get('region')]);

        Session::flash('flash_message', 'District successfully updated!');

        return redirect()->route('districts.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {


        $district = District::findOrFail($id);

        //dd($district);

        $district->delete();

        Session::flash('flash_message', 'District successfully deleted!');

        return redirect()->route('districts.index');
    }
}
