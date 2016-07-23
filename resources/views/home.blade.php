@extends('layouts.app')


@section('content')


	
 <div class="container">
  <h2>CARL'S TUTITION CENTER .</h2>
  <a href="#demo" class="btn btn-info" data-toggle="collapse">Wiki</a>
  <div id="demo" class="collapse">
    Some Deatils to be filled .. 
	<ul class="nav navbar-right">
                    <li><a href="{{ url('/apphome') }}">Know More .</a></li>
                </ul>
  </div>
</div>

<br /><br /><br />


<div class="container">
    <div class="row">
        <div class="col-sm-12-col-sm-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome  &nbsp;&nbsp; <strong>  </strong></div>
                </div>
            </div>
        </div>
    </div>


@if (Session::has('errors'))
	<ul class="alert alert-danger">
			<li />{{ $errors }}
	</ul>
@endif


@if (Session::has('error'))
	<ul class="alert alert-success">
			<li />{{ Session::get('error') }}
	</ul>
@endif

	<div class="container">
	<div class="row">
	<div class="col-sm-12-col-sm-offset-1">
    <div class="panel panel-default">
	<div class="panel-heading">
			Get Your Details :
	</div>
	<div class="panel-body">
	
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav">
      <li><a href="apphome">Website Home</a></li>
      <li><a href="courseregister">Register</a></li>
      <li><a href="fees">Fees</a></li>
      <li><a href="test">Test</a></li>
	  <li><a href="attendance">Attendance</a></li>
	  <li><a href="tt">Time Table</a></li>
	  <li><a href="lessonplan">Lesson Plan</a></li>
	  <li><a href="performance">Performance</a></li>
    </ul>
  
</nav>	


</div>
</div>
</div>
</div>
</div>

<footer class="container text-center">
  <span><a href="bloghome">Blog</a></span> | <span><a href="contact">Contact</a></span> | <span><a href="mail">Mail</a></span> | <span><a href="query">Query</a></span>
  
</footer>	


@endsection


