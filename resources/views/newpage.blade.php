
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
</style>



</head>
<body>
<br />

<div class="container" >
	<h2 /> Welcome ..
			<h3 />  You have been successfully registered..

</div>

{!! Form::open(array('url' => 'apphome','class'=> 'form-horizontal','method' => 'get' )) !!}

<div class="submit">
	<div class="col-sm-6">
	{!! Form::submit("Go To Home",["class" => "btn btn-primary form-control",'id'=>'Submit']) !!}</input></div>
	</div>


{!! Form::close()  !!}

</body>
</html>