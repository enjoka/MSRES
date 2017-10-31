<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Centre;
use App\Models\District;
use Session;

class CentresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware(['auth']);
    }

    public function index()
    {

        $centres = Centre::all();
        $districts = District::all();

        return view('centres.index', compact('districts', 'centres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $district = District::pluck('district_name', 'id');


        return view('Centres.create', compact('district'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        $this->validate($request, ['centre_no' => 'required','centre_name' => 'required', 'district_no' => 'required']);


        Centre::create(['centre_no' => $request->get('centre_no'),
                        'centre_name' => $request->get('centre_name'),
                        'district_no' => $request->get('district_no')]);

        Session::flash('message', 'Successfully created Centre!');
        return redirect('centres');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
