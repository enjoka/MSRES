@extends('layouts.admin')

@section('content')

    <h>{{substr(Route::currentRouteName(),8)}} Region</h>

    @if(count($errors)>0)
        @foreach ($errors->all() as $error)
            <div class='alert alert-danger'>{{ $error }}</div>
        @endforeach
    @endif


    {!! Form::open([ 'route' => ['regions.update','region' => $region->id], 'method' => 'put' ]) !!}


    <div class="form-group">
        {!! Form::label('name', 'RegionName:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control'] ) !!}
        {!! Form::hidden('id', $region->id) !!}
    </div>


    {!! Form::submit('update region', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


@endsection