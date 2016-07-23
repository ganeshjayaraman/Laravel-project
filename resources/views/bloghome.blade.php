<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script>

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
<a href="#" class="navbar-brand"> BLOG PAGE </a>
</div>

<div class="collapse navbar-collapse" id="myModal">
<ul class="nav navbar-nav navbar-right">
<li><a href="profile">profile</a> </li>
<li><a href="auth/logout">Log Out</a> </li>
</ul>
</div>
</nav>


<div class="container" >
<h1>Welcome </h1>
<h3> {{ Auth::user()->name }} </h3>

	<article>
	   Post Your Blogs here .
	</article>


	@foreach(Auth::user()->hasWritten as $data)
	<h4> {{ $data->title }} </h4>
	<p>  {!! str_limit($data->body,10) !!} </p>
	
	<span><a href="readblog/{{$data->id}}">Read</a> </span>
	<span> <a href="editblog/{{$data->id}}">Edit</a> </span>
	<span><a href="deleteblog/{{$data->id}}">Delete</a> </span>
	@endforeach
	
<div style="margin:50px;"><a href="newblog" class="btn btn-success">New Blog</a></div>
<div style="margin:50px;"><a href="allblog" class="btn btn-success">All Blogs</a></div>

</div>