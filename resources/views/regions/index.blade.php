

@extends('layouts.admin')

@section('title','regions')

@section('content')
    
    
    

    <a href="{{ URL::to('regions/create') }}" class="btn btn-primary">Create Region</a> <br />

        Regions list <br>

        <!-- will be used to show any messages -->
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif


    <table class="table table-striped table-hover ">
          <thead>
            <tr>
              
              <th>Region Number</th>
              <th>Region Name</th>
              <th>Edit</th>
              <th>delete</th>
            </tr>
          </thead>
          <tbody>
            @if($regions->count())
            
            @foreach($regions as $key => $region)
            <tr id="tr_{{$region->regionid}}">
              <td>{{ ++$key }}</td>
              <td>{{ $region->regionname }}</td>


             <td>Column content</td>
              <td>Column content</td>
            </tr>
            @endforeach

           @endif

         </tbody>
          

    </table> 
      

      
    
@stop