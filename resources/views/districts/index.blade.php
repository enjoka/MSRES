@extends('layouts.admin')

@section('title','regions')

@section('content')




    <a href="{{ URL::to('districts/create') }}" class="btn btn-primary">Create District</a> <br/>

    District list <br>

    <!-- will be used to show any messages -->

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif




    <table class="table table-striped table-hover ">
        <thead>
        <tr>

            <th>District Number</th>
            <th>District Name</th>
            <th>Edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @if($districts->count())

            @foreach($districts as $key => $district)
                <tr id="tr_{{$district->id}}">
                    <td>{{ ++$key }}</td>
                    <td>{{ $district->districtName }}</td>


                    <td><a href="{{route('districts.edit', ['district' => $district->id])}}"> edit</a></td>

                    <td class="btn btn-default">
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['districts.destroy', $district->id]
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