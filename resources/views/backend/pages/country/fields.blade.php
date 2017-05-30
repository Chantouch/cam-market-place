{!! Form::label('country_name', 'Country Name:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your country name']) !!}
    </div>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('code', 'Country Code:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter your country code']) !!}
    </div>
    @if ($errors->has('code'))
        <span class="help-block">
            <strong>{{ $errors->first('code') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('description', 'Country Description:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter your country description']) !!}
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
<a href="{!! route('admin.countries.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>