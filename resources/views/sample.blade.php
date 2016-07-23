<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<style>
.overlay {
	font-size : 125%;
	color : silver-black;
	align : left-center;
}

#button {
	align : left-center;
}

</style>
</head>
<body>
<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myModal" >
<span class="sr-only"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
</button>
<a href="#" class="navbar-brand" style="color:red"> HOME PAGE </a>
</div>

<div class="collapse navbar-collapse" id="myModal">
<ul class="nav navbar-nav navbar-right">

</ul>
</div>
</nav>


<div class="container" >
<h1>Welcome </h1>
<h3> {{ $input->name }} </h3>

<h4><strong>	Register Here for the Course  </strong></h4>

	
<div class="container"> 
	<br />

<div class="btn btn-success" id="button"> 
		<a href="register/{{ $input->id }}">Register </a>
</div>
</div>	
</div>
</body>
</html>