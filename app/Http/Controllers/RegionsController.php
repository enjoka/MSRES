<?php

namespace App\Http\Controllers;

use App\Region;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Session;


class RegionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $regions = Region::all();

        return view('regions.index', compact('regions'));
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

        return view('regions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, ['name' => 'required']);


          Region::create(['regionname' => $request->get('name')]);
        // save reion

              // redirect after succesful saving
        Session::flash('message', 'Successfully created region!');
        return redirect('regions');


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

        $region = Region::findOrFail($id);

        return view('regions.edit', compact('region'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        //return $request->all();

       //dd($request->all());



        $this->validate($request, [

            'name' => 'required',
            'id' =>'required'

        ]);

        $region = Region::findOrFail($request->get('id'));

        $region->update(['regionname'=>$request->get('name')]);

        Session::flash('flash_message', 'region successfully added!');

        return redirect()->route('regions.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

        $region = Region::findOrFail($id);

        $region->delete();

        Session::flash('flash_message', 'Region successfully deleted!');

        return redirect()->route('regions.index');
    }
}
