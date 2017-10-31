


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


    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
            <tr>
               <h3><span class="label label-primary">MSCE Pass rate per sex</span></h3>

            </tr>
            <tr>

                <th>Sex</th>
                <th>Total</th>
                <th>%</th>
            </tr>
            </thead>
            <tbody>

                    <tr>
                        <td>Female</td>
                        <b><td>34,837</td></b>
                        <td>55.79 </td>
                    </tr>

                    <tr >
                        <td>Male</td>
                        <td>73,806</td>
                        <td> 66.62%</td>
                    </tr>

            </tbody>


        </table>
    </div>



@endsection
