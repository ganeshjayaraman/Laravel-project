<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

<script>
$(document).ready(function(){
$("#press").click(function(){ 
	    window.history.back();
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
<a href="#" class="navbar-brand"> YOUR BLOGS </a>
</div>

<div class="collapse navbar-collapse" id="myModal">
<ul class="nav navbar-nav navbar-right">
</ul>
</div>
</nav>

<div style="margin:50px;" class="btn btn-success" id="press">Go Back</div> 

<div class="container">
<h1>Welcome </h1>
<h3> {{ Auth::user()->name }} </h3>

	<article>
	   It is the home page...
	</article>


	<h4> {{ $blog->title }} </h4>
	<p>  {!! $blog->body !!} </p>

	
<div style="margin:50px;"><a href="newblog" class="btn btn-success">New Blog</a></div>
<div style="margin:50px;"><a href="allblog" class="btn btn-success">All Blogs</a></div>


</div>
</body>
</html>