


@extends('layouts.admin')

@section('content')



<!-- if there are creation errors, they will show here -->




<h>{{substr(Route::currentRouteName(),8)}} Region</h>

@if(count($errors)>0)

   @foreach ($errors->all() as $error)
      <div class= 'alert alert-danger'>{{ $error }}</div>
  @endforeach
@endif





  {!! Form::open([
      'route' => 'regions.store'
  ]) !!}

  <div class="form-group">
      {!! Form::label('name', 'RegionName:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>

  

  {!! Form::submit('Create New region', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}


@endsection
