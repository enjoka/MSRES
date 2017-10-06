@extends('layouts.admin')

@section('title','centres')

@section('content')




    <a href="{{ URL::to('centres/create') }}" class="btn btn-primary">Create</a> <br/>

    Centre list <br>

    <!-- will be used to show any messages -->

    @if(Session::has('flash_message'))
        <div class="alert alert-success">
            {{ Session::get('flash_message') }}
        </div>
    @endif




    <table class="table table-striped table-hover ">
        <thead>
        <tr>

            <th>Centre Id</th>
            <th>Centre Number</th>
            <th>Centre Name</th>
            <th>Edit</th>
            <th>delete</th>
        </tr>
        </thead>
        <tbody>
        @if($centres->count())

            @foreach($centres as $key => $centre)
                <tr id="tr_{{$centre->id}}">
                    <td>{{ ++$key }}</td>
                    <td>00000</td>
                    <td>{{ $centre->centreName }}</td>
                    <td><a href="{{route('centres.edit', ['centre' => $centre->id])}}"> edit</a></td>

                    <td class="btn btn-default">
                        {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['centres.destroy', $centre->id]
                                      ]) !!}
                        {!! Form::submit('Delete?', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach

        @endif

        </tbody>


    </table>




@stop