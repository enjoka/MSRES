@extends('layouts.admin')

@section('title','courses')

@section('content')




    <a href="{{ URL::to('courses/create') }}" class="btn btn-primary">Create</a> <br/>

    Courses list <br>

    <!-- will be used to show any messages -->

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif




    <table class="table table-striped table-hover ">
        <thead>
        <tr>

            <th>Course Number</th>
            <th>Course code</th>
            <th>Course Name</th>
            <th>Edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @if($courses->count())

            @foreach($courses as $key => $course)
                <tr id="tr_{{$course->id}}">
                    <td>{{ ++$key }}</td>
                    <td>{{ $course->course_code }}</td>
                    <td>{{ $course->course_name }}</td>


                    <td><a href="{{route('courses.edit', ['course' => $course->id])}}"> edit</a></td>

                    <td class="btn btn-default">
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['courses.destroy', $course->id]
                                      ]) !!}
                        {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        @endif

        </tbody>


    </table>




@stop