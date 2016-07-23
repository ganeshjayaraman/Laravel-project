						<div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <label for="dob" class="col-md-4 control-label">Date Of Birth</label>

                            <div class="col-md-6">
                                <input id="dob" type="date" class="form-control" name="dob" value="{{ old('name') }}">

                                @if ($errors->has('dob'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">address</label>

                            <div class="col-md-6">
                                <textarea id="address"  class="form-control" name="address" value="{{ old('name') }}"> </textarea>

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						<div class="form-group{{ $errors->has('profpic') ? ' has-error' : '' }}">
                            <label for="profpic" class="col-md-4 control-label">Profile Path</label>

                            <div class="col-md-6">
                                <input id="profpic" type="text" class="form-control" name="profpic" value="{{ old('name') }}">

                                @if ($errors->has('profpic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('profpic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
						<div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>

                            <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" value="{{ old('name') }}">

                                @if ($errors->has('state'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
						
					<div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
                            <label for="country" class="col-md-4 control-label">Country</label>

                            <div class="col-md-6">
                                <input id="country" type="text" class="form-control" name="country" value="{{ old('name') }}">

                                @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
					<div class="form-group{{ $errors->has('prevclg') ? ' has-error' : '' }}">
                            <label for="prevclg" class="col-md-4 control-label">Previous college </label>

                            <div class="col-md-6">
                                <input id="prevclg" type="text" class="form-control" name="prevclg" value="{{ old('name') }}">

                                @if ($errors->has('prevclg'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('prevclg') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
						
					<div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                            <label for="details" class="col-md-4 control-label">Provide your Qualification & work Experience </label>

                            <div class="col-md-6">
                                <textarea id="details"  class="form-control" name="details" value="{{ old('name') }}"> </textarea>

                                @if ($errors->has('details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>	
		