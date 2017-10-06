


@extends('layouts.admin')

@section('content')



    <!-- if there are creation errors, they will show here -->




    <h>{{substr(Route::currentRouteName(),8)}} district</h>

    @if(count($errors)>0)

        @foreach ($errors->all() as $error)
            <div class= 'alert alert-danger'>{{ $error }}</div>
        @endforeach
    @endif



    {!! Form::open([ 'route' => ['districts.update','district' => $district->id], 'method' => 'put' ]) !!}

    <div class="form-group">
        {!! Form::label('name', 'DistrictName:', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::hidden('id', $district->id) !!}
    </div>

    <div class="form-group">
        {!! Form::label('Add region') !!}<br />
        {{ Form::select('region',$region)}}
    </div>

    {!! Form::submit('Create New District', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}


@endsection
