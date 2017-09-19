






<!-- if there are creation errors, they will show here -->





  {!! Form::open([
      'route' => 'regions.store'
  ]) !!}

  <div class="form-group">
      {!! Form::label('name', 'RegionName:', ['class' => 'control-label']) !!}
      {!! Form::text('name', null, ['class' => 'form-control']) !!}
  </div>

  

  {!! Form::submit('Create New region', ['class' => 'btn btn-primary']) !!}

  {!! Form::close() !!}


