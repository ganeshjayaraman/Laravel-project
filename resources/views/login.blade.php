<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<link rel="	stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" />

<script src="{{asset('login.js')}}"></script>		

  
<style>
.submit {
	margin-left : 25%;
}
.red {
	color : red;
	font-size : 20px;
}

#title {
text-align : center;
font-size : 1.6em;

}

.form {
	margin-left : 40%;
	align : center ;
}
  
  
 </style> 
</head>
<body>
<br />


@if ($errors->any())
	<ul class="alert alert-danger">
		@foreach ($errors->all() as $error)
			<li >{{ $error }} </li>
		@endforeach
	</ul>
@endif


<div class="container">
<div class="panel panel-default" id="title">
      <div class="panel-heading"><strong>Login form </strong></div>
    </div></div>
<br /><br /><br />


{!! Form::open(array('url'=>'loginform','id' => 'loginform','name'=>'loginform','class' => 'form-horizontal')) !!}

	<div class="container">
	<div class="jumbotron" >
	<div class="form">
  			
	<br /><br />
	
	 
	
	<div class="form-group">
	<div class="col-sm-6">
	{!! Form::label("email","Email  ") !!} <span class="red" > * </span>
	{!! Form::email('email', null, ['class' => 'form-control','placeholder' => 'noreply@gmail.com','id'=>'email']) !!}</input>
	<br><br></div></div>
	
	
	
	<div class="form-group">
	<div class="col-sm-6">
	{!! Form::label("password","Password  ") !!} <span class="red" > * </span>
	{!! Form::password('password', ['class' => 'form-control','placeholder' => '******','id'=>'password']) !!}</input>
	<br><br><br /></div></div>
	

	
	<div class="submit">
	<div class="col-sm-6">
	{!! Form::submit("Submit",["class" => "btn btn-primary form-control",'id'=>'Submit']) !!}</input></div>
	</div>

	</div>
	</div></div>
	<br/ ><br/ >	
{!! Form::close() !!}


</body>
</html>