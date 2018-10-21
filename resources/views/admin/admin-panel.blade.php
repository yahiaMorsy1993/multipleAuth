@extends('layouts.app')
@section('content')
   
<div class="panel panel-heading">

    <h1><label class="badge badge-dark col-sm-12 " style="height:30px; font-size:18px;"> All Submission Requests </h1>
    <h3 class="badge badge-danger col-sm-12 " style=" font-size: 16px;">Admin Panel</h3>


    <div class="panel panel-heading">

        <ul>
		   <h1> <strong>About Abstract Submitted</strong></h1>
            <li><h4>Number of Records per page :  </h4></li>
            <li><h4> Number of all Requests : </h4></li>

       </ul>
        <h1><label class="badge badge-dark col-sm-12 " style="height:30px; font-size:18px;">Page  Of  </h1>
    </div>

    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</div>

<div class="panel panel-body">
    <table class="table table-striped" width="100%">
        <thead>
        <th>Full Name</th>
        <th>Title</th>
        <th>Institution</th>
        <th>Country</th>
        <th>Email</th>
        <th>Alternative Email</th>
        <th>Conference Title</th>
        <th>Paper Title</th>
        <th>Abstract</th>
        <th>Keywords</th>
        <th>Type</th>
        <th>Admin Action </th>
        </thead>
        <tbody>

            <tr>
            
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td></td>
                <td>  </td>
                <td></td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>
                <td>  </td>

                <td>

                    <a class="btn btn-info  btn-lg "  href="#" target="_blank" >PRINT INFO</a>

                </td>


                <td class="btn btn-alert"><a href="#"><button type="button" class="btn btn-danger btn-lg">Delete</button></a></td>

                {{ method_field('DELETE') }}
                {{ csrf_field() }}


            </tr>
           
        </tbody>
    </table>
</div>



@endsection
