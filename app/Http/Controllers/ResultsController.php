<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Result;
use Excel;
use Illuminate\Support\Facades\Input;

class ResultsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct() {
        $this->middleware(['auth', 'clearance']);
    }

    public function index()
    {
        //
        $results = Result::all();
        return view('results.index',compact('results'));
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
    public function store(Request $request)
    {
        //
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

    public function remove(Request $request)
    {

        dd($request);
        //$myCheckboxes = $request->input('checkbox');
        $myCheckboxes = $request->all();
        dd($myCheckboxes);

        $checked = Request::input('checked',[]);

        dd($checked);
    }

    public function importExport()
    {



        return view('results.importExport');
    }

    public function downloadExcel(Request $request, $type)
    {
        //dd($type);
        $data = Result::get()->toArray();




        return Excel::create('Result_sheet', function($excel) use ($data) {
            $excel->sheet('resultspercourse', function($sheet) use ($data)
            {
                $sheet->fromArray($data);
            });
        })->download($type);
    }


    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function importExcel(Request $request)
    {
        //dd($request);

        if($request->file('imported_file'))
        {
            $path = $request->file('imported_file')->getRealPath();

            $data = Excel::load($path, function($reader)

            {
            })->get();



            if(!empty($data) && $data->count())
            {
                foreach ($data->toArray() as $row)
                {
                    if(!empty($row))
                    {
                        $dataArray[] =
                            [
                                'candidate_exam_id' => $row['candidate_id'],
                                'course_code' => $row['course_code'],
                                'grade'=>$row['grade'],
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s')

                            ];
                    }
                }

                if(!empty($dataArray))
                {
                    Result::insert($dataArray);

                    return back()->with('success','Insert Record successfully.');
                }
            }
        }
        return back()->with('error','Please Check your file, Something is wrong there.');
    }




}
