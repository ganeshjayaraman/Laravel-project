@extends('layouts.app')


@section('content')



<div class="container" >
<h1>Welcome </h1>
<h3> {{ Auth::user()->name }} </h3>

	<article>
	   Find all the blogs here.
	</article>


	@foreach($blog as $data)
		@if($data->writerid === Auth::user()->id)
		<h3> {{ Auth::user()->name }} has posted : </h3> 
	 <h4> <strong>Title :  </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->title }} </h4>
	<p> <strong>Content :  </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! str_limit($data->body,10) !!} </p>
	<span><a href="readblog/{{$data->id}}">Read</a> </span>
	<span> <a href="editblog/{{$data->id}}">Edit</a> </span>
	<span><a href="deleteblog/{{$data->id}}">Delete</a> </span> 
	<br />
	@else
		<h3> {{ $data->getback->name }} has posted : </h3> 
		<h4> <strong>Title :  </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ $data->title }} </h4>
		<p> <strong>Content :  </strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {!! str_limit($data->body,10) !!} </p>
	
		<span><a href="readblog/{{$data->id}}">Read</a> </span>
	 <br />	
	@endif
	@endforeach
	
<div style="margin:50px;"><a href="newblog" class="btn btn-success">New Blog</a></div>

</div>


@endsection