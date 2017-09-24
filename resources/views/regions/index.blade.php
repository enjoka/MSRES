@extends('layouts.admin')

@section('title','regions')

@section('content')




    <a href="{{ URL::to('regions/create') }}" class="btn btn-primary">Create Region</a> <br/>

    Regions list <br>

    <!-- will be used to show any messages -->

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif




    <table class="table table-striped table-hover ">
        <thead>
        <tr>

            <th>Region Number</th>
            <th>Region Name</th>
            <th>Edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @if($regions->count())

            @foreach($regions as $key => $region)
                <tr id="tr_{{$region->id}}">
                    <td>{{ ++$key }}</td>
                    <td>{{ $region->regionname }}</td>


                    <td><a href="{{route('regions.edit', ['region' => $region->id])}}"> edit</a></td>
                    <td class="btn btn-default">
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['regions.destroy', $region->id]
                                      ]) !!}
                        {!! Form::submit('Delete this region?', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        @endif

        </tbody>


    </table>




@stop