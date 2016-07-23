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
	<img src="{{Auth::user()->getstudentprofile->profpic }}" alt="" width="130px;" height="130px;"> </img>

</div></div>

		<span class="get"> Total Fees : </span>
		<div class="get"><a href="#" class="btn btn-success"> {{ $get }}</a></div>


<div class="row">
        <div class="col-md-12 col-md-offset-1">
			<strong> Course Details : </strong>
			<div class="panel panel-body">
							@foreach($data as $d)
								<br /><br />
								<table>
								<thead> </thead>
								<tr>
								<td> Course Id : </td>
								<td> {{ $d->courseid }} </td></tr>
								
								<tr>
								<td> Course Name : </td>
								<td> {{ $d->coursename }} </td></tr>
								
								<tr>
								<td> Student Id : </td>
								<td> {{ $d->courseid }}{{ $d->userid }} </td></tr>
								
								<tr>
								<td> fees : </td>
								<td> {{ $d->fees }} </td></tr>
								</table>
								@endforeach
								
							
</div>
</div>
</div>

@endsection