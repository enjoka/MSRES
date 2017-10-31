


@extends('layouts.admin')

@section('title', '| results report')

@section('content')



    <!--key pass per sex(PPS)
    //pass per region (PPR)
    //
    -->
    <div class="list-group">
        <a href="#" class="list-group-item active">
            <h5> Reports</h5>
        </a>

    </div>

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
            <a href={{ url('reportType/pps') }} >
                <i class="fa fa-clipboard fa-4x"></i>
                <h4>Pass per Sex</h4>
            </a>
        </div>

    </div>

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
        <div class="div-square">
            <a href={{ url('reportType/ppr') }} >
                <i class="fa fa-clipboard fa-4x"></i>
                <h4>Pass per Region</h4>
            </a>
        </div>

    </div>

    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">

        <div class="div-square">
            <a href={{ url('reportType/ppst') }} >
                <i class="fa fa-clipboard fa-4x"></i>
                <h4>Pass per student Type</h4>
            </a>
        </div>

    </div>



@endsection
