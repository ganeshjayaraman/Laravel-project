<!DOCTYPE html>
<html>
<head>
<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
<link rel="	stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css" />
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"> </script>
<script src="{{asset('newblog.js')}}"></script>	
<script src="{{asset('bootbox.min.js')}}"></script>	

<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.js"></script>

<script>

function postblog() {
		$("#newblog").data("bootstrapValidator").validate();
		if($("#newblog").data("bootstrapValidator").isValid()){
		var title = $("#title").val();
		var content = $("#content").summernote('code');
		
		$.post("postblog",{title: "title",content: "content"}, function(response)
		{
			if (response == "Success"){
				bootbox.alert("success",function(){
					window.location = "localhost/Tutition_fee_management/home";
				});
			}
			
		});		
}
}

$(document).ready(function(){
$("#editedform").click(function(){
	 var str = $("#edit").val();

			window.location = "posteditblog/"+str;
}); 

$("#press").click(function(){ 
	    window.history.back();
});
});	

</script>
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
<a href="#" class="navbar-brand" style="color:red"> BLOG PAGE </a>
</div>

<div class="collapse navbar-collapse" id="myModal">
<ul class="nav navbar-nav navbar-right">
</ul>
</div>
</nav>

<div style="margin-left:50px;">
<div class="btn btn-success" id="press">Go Back</div></div>
</div>
<br /><br /><br />
<div class="container">
{!! Form::Open(array('url'=>'posteditblog','id' => 'newblog','class' => 'form-horizontal'))  !!}

<div class="form-group col-sm-7 col-sm-offset-12">
	Blog Title : 
	  <input type="text" name="title" id="title" class="form-control" value="{{ $edit->title }}" >
	  </input>
	  </div> 
	  <br />
	  
	  <div class="form-group col-sm-12 col-sm-offset-12">
	  <input type="hidden" value="{{$edit->id}}" name="edit" id="edit"> </input>
	  </div> 
	  
	  <div class="form-group col-sm-6 col-sm-offset-12">
	  Blog content : 
	  <textarea  name="content" id="content" placeholder="blog content" class="form-control summernote" >
	  </textarea>
	  </div>
	 <br /><br /><br />
      
	  <div class="form-group col-sm-12 col-sm-offset-12">
       <input type="submit" value="Submit" class="btn btn-success"> </input>
      </div>
	  

{!! Form::close()  !!}

</body>

</html>