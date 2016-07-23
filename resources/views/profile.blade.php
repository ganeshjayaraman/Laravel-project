@extends('layouts.app')

@section('content')


<div class="container">

<div class="row">
        <div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
                <div class="panel-heading">Welcome  {{ Auth::user()->name }} </div>
				</div>
				</div>
</div>
</div>


<div class="row">
	<div class="image">
	<img src="upload/dhoni.jpg" alt="" width="130px;" height="130px;"> </img>

</div></div>


<div class="row">
        <div class="col-md-12 col-md-offset-1">
			<div class="panel panel-body">
						<table>
							<thead > <b > Your Details : </b>  </thead>
							<tr> 
								<td> Date of Birth : </td>
								<td> {{ $data->dob }} </td> </tr>
								
								<tr>
								<td> Address : </td>
								<td> {{ $data->address }} </td></tr>
								
								<tr>
								<td> Age : </td>
								<td> {{ $data->age }} </td></tr>
								
								<tr>
								<td> Email Id : </td>
								<td> {{ Auth::user()->email }} </td></tr>
								
								<tr>
								<td> College : </td>
								<td> {{ $data->college }} </td></tr>
								
								<tr>
								<td> You are a  : </td>
								<td> {{ $data->studentstate }} </td></tr>
								
								<tr>
								<td> State : </td>
								<td> {{ $data->state }} </td></tr>
								
						
								<tr>
								<td> Country : </td>
								<td> {{ $data->country }} </td></tr>
								
								<tr>
								<td> Mobile No : </td>
								<td> {{ Auth::user()->mobile }} </td></tr>
								
								</table>
								</div>
								</div>
								</div>

@endsection
