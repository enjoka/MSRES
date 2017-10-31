<?php

namespace App\Http\Controllers\Reports;

use App\Models\Candidate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PassRatesByGenderController extends Controller
{
    //

    public function index()
    {
        $results = Candidate::with('passResults')->get();
        dd($results );

        $data = [
            'candidates' => $results->count(),
            ''
        ];

        return view('reports.reportPps', compact('results'));
    }
}
