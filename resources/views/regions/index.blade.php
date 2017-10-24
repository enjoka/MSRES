@extends('layouts.admin')

@section('title','regions')

@section('content')




    <div class="col-lg-10 col-lg-offset-1">
    <h1><i class="fa fa-users"></i> Region Administration <a href="{{ route('districts.index') }}" class="btn btn-default pull-right">Districts</a>
        <a href="{{ route('centres.index') }}" class="btn btn-default pull-right">Centres</a></h1>
    <hr>
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
        <thead>
        <tr>

            <th>Region #</th>
            <th>Region Name</th>
            <th>Operations</th>
        </tr>
        </thead>
        <tbody>
        @if($regions->count())

            @foreach($regions as $key => $region)
                <tr id="tr_{{$region->id}}">
                    <td>{{ ++$key }}</td>
                    <td>{{ $region->region_name }}</td>
                    <td>
                        <a href="{{ route('regions.edit', $region->id) }}" class="btn btn-info pull-left"
                           style="margin-right: 3px;">Edit</a>

                        {!! Form::open(['method' => 'DELETE', 'route' => ['regions.destroy', $region->id] ]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        @endif

        </tbody>


    </table>

        <a href="{{ route('regions.create') }}" class="btn btn-success">Add region</a>


@stop