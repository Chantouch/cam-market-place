{!! Form::label('category_id', 'Category Level:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::select('category_id',$categories , null, ['class' => 'form-control show-tick', 'data-live-search' => 'true', 'placeholder' => 'Select category']) !!}
    </div>
</div>

{!! Form::label('country_name', 'Category Name:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your category name']) !!}
    </div>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('description', 'Category Description:') !!}
<div class="form-group">
    <div class="form-line">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'Enter your category description']) !!}
    </div>
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>

{{ Form::hidden('status', '0') }}
{!! Form::checkbox('status', '1', null, ['class' => 'filled-in', 'id'=> 'status']) !!}
<label for="status">Active</label>
<br>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.catalogs.categories.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>