<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Candidate extends Model
{
    //
    public $fillable = ['candidate_exam_id', 'candidate_name', 'category', 'centre_no', 'exam_year'];

    public function results()
    {
        return $this->hasMany(Result::class, 'candidate_exam_id', 'candidate_exam_id');
    }

    public function passResults()
    {
        return $this->results()->passed();
    }
}
