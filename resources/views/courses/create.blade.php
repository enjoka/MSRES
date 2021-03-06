


@extends('layouts.admin')

@section('content')



<!-- if there are creation errors, they will show here -->




<h>{{substr(Route::currentRouteName(),8)}} Course</h>

@if(count($errors)>0)

   @foreach ($errors->all() as $error)
      <div class= 'alert alert-danger'>{{ $error }}</div>
  @endforeach
@endif





  {!! Form::open([
      'route' => 'courses.store'
  ]) !!}

         <div class="form-group">
          {!! Form::label('name', 'Course Code:', ['class' => 'control-label']) !!}
          {!! Form::text('cocode', null, ['class' => 'form-control']) !!}

         </div>

        <div class="form-group">
            {!! Form::label('name', 'Course Name:', ['class' => 'control-label']) !!}
            {!! Form::text('coname', null, ['class' => 'form-control']) !!}

        </div>



  {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}


@endsection
