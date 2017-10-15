<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Candidate;

use Excel;

class CandidatesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $candidates = Candidate::all();

        return view('candidates.index',compact('candidates'));
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



    public function importExport()
    {

       return view('candidates.importExport');
    }

    public function downloadExcel(Request $request, $type)
    {
        //dd($type);
        $data = Candidate::get()->toArray();


        return Excel::create('registration_sheet', function($excel) use ($data) {
            $excel->sheet('candidateSheet', function($sheet) use ($data)
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
                                'candidate_exam_id' => $row['exam_id'],
                                'candidate_name' => $row['candidate_name'],
                                'candidate_sex'=>$row['candidate_sex'],
                                'candidate_type_id' => $row['type'],
                                'centre_no' => $row['centre_no'],
                                'exam_year' => $row['year'],
                                'created_at' => date('Y-m-d H:i:s'),
                                'updated_at' => date('Y-m-d H:i:s')

                            ];
                    }
                }

                if(!empty($dataArray))
                {
                    Candidate::insert($dataArray);

                    return back()->with('success','Insert Record successfully.');
                }
            }
        }
        return back()->with('error','Please Check your file, Something is wrong there.');
    }



}
