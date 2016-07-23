
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<link rel="	stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" />

<style>
.submit {
	margin-top : 10%;
	margin-left : 25%;
}

.image {
	margin-top : 5%;
}

#button {
	text-color : red;
}

</style>



</head>
<body>
<br />

<div class="collapse navbar-collapse" id="myModal">
<ul class="nav navbar-nav navbar-right">
<li><a href="logout">Log Out</a> </li>
</ul>
</div>	

<div class="container" >

<div class="image" >
<img src="{{ Auth::user()->profpic }}" alt="" width="130px;" height="130px;"> </img>
</div>
	<h2 /> Welcome ..	{{ Auth::user()->name }}
			<h3 />  You have been successfully signed in

</div>

{!! Form::open(array('url' => 'apphome','class'=> 'form-horizontal','method' => 'get' )) !!}

<div class="submit">
	<div class="col-sm-4">
	
	{!! Form::label("home","This button routes you to Home Page . ") !!}
	{!! Form::submit("Go To Home",["class" => "btn btn-success form-control",'id'=>'Submit']) !!}</input>
	</div>
	</div> 
	{!! Form::close()  !!}

<br /><br /><br />

{!! Form::open(array('url'=>array('register', Auth::user()->id),'id' => 'formregister','name'=>'formregister','class' => 'form-horizontal','method'=>'get')) !!}
<div class="submit">
	<div class="col-sm-4">
	
	{!! Form::label("register","This button is for registering for course. ") !!}
	{!! Form::submit("Register ",["class" => "btn btn-success form-control",'id'=>'Submit']) !!}</input>
	</div>
	</div>	
	 

{!! Form::close()  !!}

<br /><br /><br /><br /><br /><br />

</body>
</html>