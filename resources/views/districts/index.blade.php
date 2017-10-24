@extends('layouts.admin')

@section('title','regions')

@section('content')




    <div class="col-lg-10 col-lg-offset-1">
        <h1><i class="fa fa-users"></i> District Administration <a href="{{ route('regions.index') }}" class="btn btn-default pull-right">regions</a>
            <a href="{{ route('centres.index') }}" class="btn btn-default pull-right">Centres</a></h1>
        <hr>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                <tr>

                    <th>District #</th>
                    <th>District Name</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                @if($districts->count())

                    @foreach($districts as $key => $district)
                        <tr id="tr_{{$district->id}}">
                            <td>{{ ++$key }}</td>
                            <td>{{ $district->district_name }}</td>
                            <td>
                                <a href="{{ route('districts.edit', $district->id) }}" class="btn btn-info pull-left"
                                   style="margin-right: 3px;">Edit</a>

                                {!! Form::open(['method' => 'DELETE', 'route' => ['districts.destroy', $district->id] ]) !!}
                                {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach

                @endif

                </tbody>


            </table>

            <a href="{{ route('districts.create') }}" class="btn btn-success">Add District</a>


@stop