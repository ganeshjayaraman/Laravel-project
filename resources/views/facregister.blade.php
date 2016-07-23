@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Course Register Form</div>
                <div class="panel-body">
                    {!! Form::open(array('url'=>array('facregister', Auth::user()->id),'id' => 'formregister','name'=>'formregister','class' => 'form-horizontal')) !!}

                        <div class="form-group{{ $errors->has('coursename') ? ' has-error' : '' }}">
                            <label for="coursename" class="col-md-4 control-label">Course Name</label>

                            <div class="col-md-6">
                                <select id="coursename" name="coursename" class="form-control">
									<option value=""> ---- </option>
									<option value="c"> C </option>
									<option value="c++"> C++ </option>
									<option value="java"> Java </option>
									<option value="html"> Html </option>
									<option value="javascript"> JavaScript </option>
									<option value="php"> PHP </option>
									<option value="bootstrap"> Bootstrap </option>
									<option value="beautifulsoup"> BeautifulSoup </option>
									<option value="python"> Python </option>
								
								</select>

                                @if ($errors->has('coursename'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('coursename') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>				
					
					<div class="form-group{{ $errors->has('') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $input->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
					<div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="mobile" class="col-md-4 control-label">mobile No. </label>

                            <div class="col-md-6">
                                <input id="mobile" type="number" class="form-control" name="mobile" value="{{ $input->mobile }}">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>	

					

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Register
                                </button>
                            </div>
                        </div>
						{!!  Form::close() !!} 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection



</body>
</html>