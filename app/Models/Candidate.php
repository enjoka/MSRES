<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    //
    public $fillable = ['candidate_exam_id','candidate_name','candidate_type_id','centre_no','exam_year'];
}
