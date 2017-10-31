<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    //
    public $fillable = ['candidate_exam_id','course_code','grade'];

    public function post()
    {
        return $this->belongsTo('App\Model\Result', 'candidate_exams_id', 'candidate_exams_id');
    }

    public function scopePassed($query)
    {
        return $query->where('grade', '<', 9);
    }
}
