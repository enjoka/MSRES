


@extends('layouts.students')

@section('title', '| Students Results')

@section('content')

    <h4><i ></i>  Welcome is your personal portal containing all the results for the examination. To access your results,
        please enter your exams ID which you received from us. If you experience any problems viewing the results, Please send a query on your query menu  </h4>

     <div class='col-lg-4 col-lg-offset-4'>




         {!! Form::open([
        'route' => 'view-results',
        'method' => 'POST'
    ]) !!}

         <div class="form-group">
             {!! Form::label('name', 'Exams Number:', ['class' => 'control-label']) !!}
             {!! Form::text('exam_no', null, ['class' => 'form-control']) !!}

             {!! Form::submit('View Results', ['class' => 'btn btn-primary']) !!}

             {!! Form::close() !!}
         </div>

     </div>
    <div>



    </div>



@endsection
