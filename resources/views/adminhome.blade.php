@extends('layouts.adminapp')


@section('content')


<div class="container">
    <div class="row">
        <div class="col-sm-12-col-sm-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading">Welcome  &nbsp;&nbsp; <strong> {{ Auth::user()->name }}  </strong></div>
                </div>
            </div>
        </div>
    </div>



<div class="container">
<div class="row">

<div class="submit">
	<div class="col-sm-2">
	{!! Form::open(array('url' => 'apphome','class'=> 'form-horizontal','method' => 'get' )) !!}
	{!! Form::submit("Home",["class" => "btn btn-success form-control",'id'=>'Submit','title' => 'Go To Home Page']) !!}</input>
	{!! Form::close()  !!}
	</div>
	</div> 


<div class="submit">
	<div class="col-sm-2">
	{!! Form::open(array('url' => array('getstudents', Auth::user()->id),'class'=> 'form-horizontal','method' => 'get' )) !!}
		{!! Form::submit("Get",["class" => "btn btn-success form-control",'id'=>'Submit','title' => 'Get My students']) !!}</input>
		{!! Form::close()  !!}
	</div>
	</div>


</div>
</div>
	


@endsection
