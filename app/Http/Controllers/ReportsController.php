<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Result;
use App\Models\Candidate;
use Illuminate\Support\Facades\DB;



class ReportsController extends Controller
{
    public function index()
{
    return view('reports.index');
}

    public function show($studentId)
    {

    }

    public function view(Request $request)
    {



        return view('reports.view',compact('report'));


    }

    public function reportView(Request $request,$type){



    	if ($type='pps'){


    	    return view('reports.reportPps');
        }

        elseif($type=='ppr'){


            return view('reports.reportPpr');
        }

        elseif($type='ppst'){

            return view('reports.reportPpst');
        }


        return view('reports.reportView');

    }
}
