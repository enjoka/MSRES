<?php

namespace App\Http\Controllers;

use App\Models\Result;
use Illuminate\Http\Request;

class StudentResultsController extends Controller
{
    //

    public function index()
    {
        return view('students.index');
    }

    public function show($studentId)
    {
        
    }

    public function view(Request $request)
    {


        $this->validate($request, ['exam_no' => 'required']);
        $results = Result::where('candidate_exam_id', $request->get('exam_no'))
            ->orderBy('course_code', 'desc')
            ->get();

        if (!(count($results)) > 0) {


            return redirect()->route('students.index');
        }

        return view('students.view',compact('results'));


    }
}
