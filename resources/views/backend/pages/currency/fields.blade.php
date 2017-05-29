{!! Form::label('name', 'Currency Name:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your currency name']) !!}
    </div>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('symbol', 'Symbol:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('symbol', null, ['class' => 'form-control', 'placeholder' => 'Enter your currency symbol']) !!}
    </div>
    @if ($errors->has('symbol'))
        <span class="help-block">
            <strong>{{ $errors->first('symbol') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('symbol_native', 'Symbol native:') !!}
<div class="form-group{{ $errors->has('symbol_native') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('symbol_native', null, ['class' => 'form-control', 'placeholder' => 'Enter your currency symbol native']) !!}
    </div>
    @if ($errors->has('symbol_native'))
        <span class="help-block">
            <strong>{{ $errors->first('symbol_native') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('decimal_digits', 'Decimal digits:') !!}
<div class="form-group{{ $errors->has('decimal_digits') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('decimal_digits', null, ['class' => 'form-control', 'placeholder' => 'Enter your currency decimal digits']) !!}
    </div>
    @if ($errors->has('decimal_digits'))
        <span class="help-block">
            <strong>{{ $errors->first('decimal_digits') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('rounding', 'Rounding:') !!}
<div class="form-group{{ $errors->has('rounding') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('rounding', null, ['class' => 'form-control', 'placeholder' => 'Enter your currency rounding']) !!}
    </div>
    @if ($errors->has('rounding'))
        <span class="help-block">
            <strong>{{ $errors->first('rounding') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('code', 'Currency Code:') !!}
<div class="form-group{{ $errors->has('code') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter your currency code']) !!}
    </div>
    @if ($errors->has('code'))
        <span class="help-block">
            <strong>{{ $errors->first('code') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('name_plural', 'Currency name plural:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::textarea('name_plural', null, ['class' => 'form-control', 'placeholder' => 'Enter your currency name plural']) !!}
    </div>
    @if ($errors->has('name_plural'))
        <span class="help-block">
            <strong>{{ $errors->first('name_plural') }}</strong>
        </span>
    @endif
</div>

{!! Form::hidden('status', false) !!}
{!! Form::checkbox('status', '1', null, ['class' => 'filled-in', 'id'=> 'status']) !!}
<label for="status">Active</label>
<br>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.currencies.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>