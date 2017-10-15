@extends('layouts.admin')

@section('title','Candidates')

@section('content')






    <div class="row">
        <div class="col-xs-offset 1 col-xs-11 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group btn-group-justified" role="group">

                    <div class="btn-group" role="group">
                        <button id="new" class="btn btn-primary" onclick="window.location='{{ action('CandidatesController@create')}}'" data-original-title="New" data-toggle="modal"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
                    </div>

                    <div class="btn-group" role="group">
                        <button id="upload" class="btn btn-primary" onclick="window.location='{{ action('CandidatesController@importExport')}}'" data-original-title="upload" ><i class="fa fa-upload fa-lg" aria-hidden="true"></i></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="Edit" class="btn btn-primary" data-original-title="Exit Data"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button>
                    </div>

                    <div class="btn-group" role="group">
                        <button id="delete" class="btn btn-warning" data-original-title="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    CANDIDATES DETAILS <br>

    <!-- will be used to show any messages -->

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif




    <table class="table table-striped table-hover ">
        <thead>
        <tr>
            <th>action</th>
            <th>id</th>
            <th>Examination Number</th>
            <th>Candidate Name</th>
            <th>sex</th>
            <th>Candidate Type</th>
            <th>Centre Number</th>
            <th>Exams Year</th>
        </tr>
        </thead>
        <tbody>
        @if($candidates->count())

            @foreach($candidates as $key => $candidate)
                <tr id="tr_{{$candidate->id}}">
                    <td>
                            <input type="checkbox" id="checkbox1">

                    </td>
                    <td>{{ ++$key }}</td>
                    <td>{{ $candidate->candidate_exam_id }}</td>
                    <td>{{ $candidate->candidate_name }}</td>
                    <td>{{ $candidate->candidate_sex }}</td>
                    <td>{{ $candidate->candidate_type_id }}</td>
                    <td>{{ $candidate->centre_no }}</td>
                    <td>{{ $candidate->exam_year }}</td>

                    </tr>
            @endforeach

        @endif

        </tbody>


    </table>




@stop