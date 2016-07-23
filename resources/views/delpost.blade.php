<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="{{asset('bootbox.min.js')}}"></script>	
<script>
$(document).ready(function(){
$("#press").click(function(){ 
	    window.location.back();
});

});
</script>

</head>
<body>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myModal" >
<span class="sr-only"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
</button>
<a href="#" class="navbar-brand" style="color:red"> DELETE PAGE </a>
</div>

<div class="collapse navbar-collapse" id="myModal">
<ul class="nav navbar-nav navbar-right">
</ul>
</div>
</nav>
<div style="margin:50px;" class="btn btn-success" id="press" title="Go Back to blog page">Go Back</div>


<div class="container">
<h1>The Blog is successfully Deleted</h1>

	


</div>
</body>