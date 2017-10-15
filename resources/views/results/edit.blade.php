


@extends('layouts.admin')

@section('content')



    <!-- if there are creation errors, they will show here -->




    <h>{{substr(Route::currentRouteName(),8)}} district</h>

    @if(count($errors)>0)

        @foreach ($errors->all() as $error)
            <div class= 'alert alert-danger'>{{ $error }}</div>
        @endforeach
    @endif

    <div class="row">
        <div class="col-xs-offset 1 col-xs-11 col-sm-offset-2 col-sm-8 col-md-offset-3 col-md-6">
            <div class="btn-toolbar" role="toolbar">
                <div class="btn-group btn-group-justified" role="group">
                    <div class="btn-group" role="group">
                        <button id="list" class="btn btn-primary" data-original-title="Refreshr"><i class="fa fa-refresh fa-lg" aria-hidden="true"></i></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="new" class="btn btn-primary" data-original-title="New"><i class="fa fa-plus fa-lg" aria-hidden="true"></i></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="passreset" class="btn btn-primary" data-original-title="Password Reset"><i class="fa fa-key fa-lg" aria-hidden="true"></i></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="desact" class="btn btn-primary" data-original-title="Deactivate"><i class="fa fa-low-vision fa-lg" aria-hidden="true"></i></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="react" class="btn btn-primary disabled" data-original-title="Activate"><i class="fa fa-eye fa-lg" aria-hidden="true"></i></button>
                    </div>
                    <div class="btn-group" role="group">
                        <button id="delete" class="btn btn-warning" data-original-title="Delete"><i class="fa fa-trash-o fa-lg" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>


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
