<div class="row clearfix">
    <div class="col-md-6">
        {!! Form::label('first_name', 'First Name:') !!}
        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
            <div class="form-line">
                {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your first name']) !!}
            </div>
            @if ($errors->has('first_name'))
                <span class="help-block">
            <strong>{{ $errors->first('first_name') }}</strong>
        </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        {!! Form::label('last_name', 'Last Name:') !!}
        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
            <div class="form-line">
                {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your last name']) !!}
            </div>
            @if ($errors->has('last_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('last_name') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        {!! Form::label('email', 'Email:') !!}
        <div class="form-group">
            <div class="form-line">
                {!! Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'Enter your email']) !!}
            </div>
            @if ($errors->has('email'))
                <span class="help-block">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        {!! Form::label('country_id', 'Country Name:') !!}
        <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <div class="form-line">
                {!! Form::select('country_id',$countries , null, ['class' => 'form-control show-tick', 'data-live-search' => 'true']) !!}
            </div>
            @if ($errors->has('country_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('country_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        {!! Form::label('city_id', 'City:') !!}
        <div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
            <div class="form-line">
                {!! Form::select('city_id',$cities , null, ['class' => 'form-control show-tick', 'data-live-search' => 'true']) !!}
            </div>
            @if ($errors->has('city_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('city_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        {!! Form::label('commune_id', 'Commune:') !!}
        <div class="form-group{{ $errors->has('commune_id') ? ' has-error' : '' }}">
            <div class="form-line">
                {!! Form::select('commune_id',$communes , null, ['class' => 'form-control show-tick', 'data-live-search' => 'true']) !!}
            </div>
            @if ($errors->has('commune_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('commune_id') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-md-6">
        {{ Form::hidden('status', '0') }}
        {!! Form::checkbox('status', '1', null, ['class' => 'filled-in', 'id'=> 'status']) !!}
        <label for="status">Active</label>
    </div>
    <div class="col-md-6">
        <div class="pull-right">
            <button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
            <a href="{!! route('admin.sells.customers.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>
        </div>
    </div>
</div>