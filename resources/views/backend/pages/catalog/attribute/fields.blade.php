{!! Form::label('attribute_group', 'Attribute group:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::select('parent_id',$attributes , null, ['class' => 'form-control show-tick','id' => 'attribute_group', 'data-live-search' => 'true', 'placeholder' => 'Select attribute group']) !!}
    </div>
</div>

{!! Form::label('name', 'Value:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your attribute value']) !!}
    </div>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

<div id="color_value">
    {!! Form::label('value', 'Color:') !!}
    <div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
        <div class="input-group colorpicker">
            <div class="form-line">
                {!! Form::text('value', null, ['class' => 'form-control', 'placeholder' => 'Enter your color value']) !!}
            </div>
            <span class="input-group-addon">
                <i></i>
            </span>
        </div>
        @if ($errors->has('value'))
            <span class="help-block">
            <strong>{{ $errors->first('value') }}</strong>
        </span>
        @endif
    </div>
</div>

<div id="p_name">
    {!! Form::label('public_name', 'Public name:') !!}
    <div class="form-group{{ $errors->has('public_name') ? ' has-error' : '' }}">
        <div class="form-line">
            {!! Form::text('public_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your attribute public name']) !!}
        </div>
        @if ($errors->has('public_name'))
            <span class="help-block">
            <strong>{{ $errors->first('public_name') }}</strong>
        </span>
        @endif
    </div>
</div>

{{ Form::hidden('status', '0') }}
{!! Form::checkbox('status', '1', null, ['class' => 'filled-in', 'id'=> 'status']) !!}
<label for="status">Active</label>
<br>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.catalogs.attributes.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>