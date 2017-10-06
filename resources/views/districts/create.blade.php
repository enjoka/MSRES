


@extends('layouts.admin')

@section('content')



<!-- if there are creation errors, they will show here -->




<h>{{substr(Route::currentRouteName(),8)}} district</h>

@if(count($errors)>0)

   @foreach ($errors->all() as $error)
      <div class= 'alert alert-danger'>{{ $error }}</div>
  @endforeach
@endif





  {!! Form::open([
      'route' => 'districts.store'
  ]) !!}

     <div class="form-group">
      {!! Form::label('name', 'DistrictName:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}

     </div>

       <div class="form-group">
            {!! Form::label('Add region') !!}<br />

           {{ Form::select('region',$regions)}}


        </div>

  {!! Form::submit('Create New District', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}


@endsection
