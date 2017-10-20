@extends('layouts.admin')

@section('title','Candidates')

@section('content')





    <div class="row">
        <div class="col-xs-offset 1 col-xs-11 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group btn-group-justified" role="group">

                    <div class="btn-group" role="group">
                        <button id="new" class="btn btn-primary" onclick="window.location='{{ action('ResultsController@create')}}'" data-original-title="New" data-toggle="modal"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
                    </div>

                    <div class="btn-group" role="group">
                        <button id="upload" class="btn btn-primary" onclick="window.location='{{ action('ResultsController@importExport')}}'" data-original-title="upload" ><i class="fa fa-upload fa-lg" aria-hidden="true"></i></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="Edit" class="btn btn-primary" data-original-title="Exit Data"><i class="fa fa-pencil fa-fw" aria-hidden="true"></i></button>
                    </div>

                    <div class="btn-group" role="group">
                        <button id="delete" class="btn btn-warning delete_all" ,type="submit" onclick="window.location='{{ action('ResultsController@remove')}}'"data-original-title="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h4><b>Results Per course</b>  </h4> <br>

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
            <th>Candidate ID</th>
            <th>Course Code</th>
            <th>Grade</th>
        </tr>
        </thead>
        <tbody>
        @if($results->count())

            @foreach($results as $key => $result)
                <tr id="tr_{{$result->id}}">
                    <td>
                        <input type="checkbox" name="checkbox[]" id="checkbox1" value="{{$result->id}}">

                    </td>
                    <td>{{ ++$key }}</td>
                    <td>{{ $result->candidate_exam_id }}</td>
                    <td>{{ $result->course_code }}</td>
                    <td>{{ $result->grade }}</td>

                </tr>
            @endforeach

        @endif

        </tbody>


    </table>




@stop

