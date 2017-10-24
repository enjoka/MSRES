


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
      'route' => 'centres.store'
  ]) !!}

        <div class="form-group">
            {!! Form::label('Select District') !!}<br />

            {{ Form::select('district no',$district)}}

        </div>
        <div class="form-group">
            {!! Form::label('name', 'Centre Number:', ['class' => 'control-label']) !!}
            {!! Form::text('centre no', null, ['class' => 'form-control']) !!}

        </div>

         <div class="form-group">
          {!! Form::label('name', 'Centre Name:', ['class' => 'control-label']) !!}
          {!! Form::text('centre name', null, ['class' => 'form-control']) !!}

         </div>



  {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}


@endsection
