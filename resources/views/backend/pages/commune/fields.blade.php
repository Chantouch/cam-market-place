{!! Form::label('name', 'Commune Name:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your commune name']) !!}
    </div>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

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

{!! Form::label('city_id', 'City Name:') !!}
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

{!! Form::label('code', 'City Code:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter your city code']) !!}
    </div>
    @if ($errors->has('code'))
        <span class="help-block">
            <strong>{{ $errors->first('code') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('description', 'City Description:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter your city description']) !!}
    </div>
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>

{{ Form::hidden('status', '0', array('id' => 'status')) }}
{!! Form::checkbox('status', '1', null, ['class' => 'filled-in', 'id'=> 'status']) !!}
<label for="status">Active</label>
<br>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.cities.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>