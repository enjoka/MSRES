@extends('layouts.students')

@section('title','results')

@section('content')



    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif
    <div class="col-lg-10 col-lg-offset-1">

        <hr>

        <div class="table-responsive">
            <h4>RESULTS</h4>
            <table class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>#</th>
                    <th>Code Code</th>
                    <th>Grade</th>
                </tr>
                </thead>
                <tbody>

                @if($results->count())

                    @foreach($results as $key => $result)
                        <tr id="tr_{{$result->id}}">
                            <td>{{ ++$key }}</td>
                            <td>{{ $result->course_code }}</td>
                            <td>{{$result->grade}}</td>

                        </tr>

                    @endforeach

                @endif

                </tbody>


            </table>

            <div class="panel panel-info">
                <div class="panel-heading">
                    <h3 class="panel-title">Grade Key</h3>
                </div>
                <div class="panel-body">
                    Key:  1 and 2(Distinction),3 and 4(strong credit),5 and 6(Credit),7 and 8(pass),9(fail)
                </div>
            </div>


@stop