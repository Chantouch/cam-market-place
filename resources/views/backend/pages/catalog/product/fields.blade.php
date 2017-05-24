{!! Form::label('name', 'Product Name:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your product name']) !!}
    </div>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('code', 'Code:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('code', null, ['class' => 'form-control', 'placeholder' => 'Enter your product code']) !!}
    </div>
    @if ($errors->has('code'))
        <span class="help-block">
            <strong>{{ $errors->first('code') }}</strong>
        </span>
    @endif
</div>
{!! Form::label('cost', 'Cost:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('cost', null, ['class' => 'form-control', 'placeholder' => 'Enter your product cost']) !!}
    </div>
    @if ($errors->has('cost'))
        <span class="help-block">
            <strong>{{ $errors->first('cost') }}</strong>
        </span>
    @endif
</div>
{!! Form::label('price', 'Price:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Enter your product price']) !!}
    </div>
    @if ($errors->has('price'))
        <span class="help-block">
            <strong>{{ $errors->first('price') }}</strong>
        </span>
    @endif
</div>
{!! Form::label('discount_percent', 'Discount Percent:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('discount_percent', null, ['class' => 'form-control', 'placeholder' => 'Enter your product discount_percent']) !!}
    </div>
    @if ($errors->has('discount_percent'))
        <span class="help-block">
            <strong>{{ $errors->first('discount_percent') }}</strong>
        </span>
    @endif
</div>
{!! Form::label('discount_amount', 'Discount Amount:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('discount_amount', null, ['class' => 'form-control', 'placeholder' => 'Enter your product discount_amount']) !!}
    </div>
    @if ($errors->has('discount_amount'))
        <span class="help-block">
            <strong>{{ $errors->first('discount_amount') }}</strong>
        </span>
    @endif
</div>
{!! Form::label('origin_place', 'Origin Place:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('origin_place', null, ['class' => 'form-control', 'placeholder' => 'Enter your product origin_place']) !!}
    </div>
    @if ($errors->has('origin_place'))
        <span class="help-block">
            <strong>{{ $errors->first('origin_place') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('city_id', 'City:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('city_id', null, ['class' => 'form-control', 'placeholder' => 'Enter your product city_id']) !!}
    </div>
    @if ($errors->has('city_id'))
        <span class="help-block">
            <strong>{{ $errors->first('city_id') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('currency_id', 'Currency:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('currency_id', null, ['class' => 'form-control', 'placeholder' => 'Enter your product currency_id']) !!}
    </div>
    @if ($errors->has('currency_id'))
        <span class="help-block">
            <strong>{{ $errors->first('currency_id') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('language_id', 'Language:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('language_id', null, ['class' => 'form-control', 'placeholder' => 'Enter your product language_id']) !!}
    </div>
    @if ($errors->has('language_id'))
        <span class="help-block">
            <strong>{{ $errors->first('language_id') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('author', 'Author:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('author', null, ['class' => 'form-control', 'placeholder' => 'Enter your product author']) !!}
    </div>
    @if ($errors->has('author'))
        <span class="help-block">
            <strong>{{ $errors->first('author') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('short_description', 'Code:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::text('short_description', null, ['class' => 'form-control', 'placeholder' => 'Enter your product short_description']) !!}
    </div>
    @if ($errors->has('short_description'))
        <span class="help-block">
            <strong>{{ $errors->first('short_description') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('description', 'Description:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter your description']) !!}
    </div>
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>
<div class="demo-checkbox">
    {{--{!! Form::hidden('status', false) !!}--}}
    {{--{!! Form::checkbox('status', '1', null, ['id'=> 'status']) !!}--}}
    {{--<label for="status">Online</label>--}}
    {{--{!! Form::hidden('new', false) !!}--}}
    {{--{!! Form::checkbox('new', '1', null, ['class' => 'filled-in', 'id'=> 'new']) !!}--}}
    {{--<label for="status">New</label>--}}
    {{--{!! Form::hidden('popular', false) !!}--}}
    {{--{!! Form::checkbox('popular', '1', null, ['class' => 'filled-in', 'id'=> 'popular']) !!}--}}
    {{--<label for="status">Popular</label>--}}
    {!! Form::hidden('status', false) !!}
    {!! Form::checkbox('status', '1', null, ['id'=> 'status']) !!}
    {{--<input type="checkbox" id="basic_checkbox_1" name="status" value="1"/>--}}
    <label for="basic_checkbox_1">Online</label>
    <input type="checkbox" id="basic_checkbox_2" class="filled-in" name="new" value="1"/>
    <label for="basic_checkbox_2">New</label>
    <input type="checkbox" id="basic_checkbox_4" class="filled-in" name="popular" value="1"/>
    <label for="basic_checkbox_4">Popular</label>
</div>
<br>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.catalogs.products.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>