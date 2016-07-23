<!DOCTYPE html>
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

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6&appId=1545839525717210";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myModal" >
<span class="sr-only"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
<span class="icon-bar"> </span>
</button>
<a href="#" class="navbar-brand" style="color:red"> READ PAGE </a>
</div>

<div class="collapse navbar-collapse" id="myModal">
<ul class="nav navbar-nav navbar-right">
</ul>
</div>
</nav>
<div style="margin:50px;" class="btn btn-success" id="press">Go Back</div>
<div style="margin:50px;" class="btn btn-success" id="press"><li><a href="{{ url('auth/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li></div>

<div class="container">

	<h2> {{ $reads->name }} has written :  </h2>
	<br />
	<h3> {{ $reads->title }} </h3>
	<br />
	<h5>  {!! $reads->body !!} </h5>
	
	<div class="fb-comments" data-href="http://gm.com/" data-width="500" data-numposts="5"></div>

</div>
</body>
</html>