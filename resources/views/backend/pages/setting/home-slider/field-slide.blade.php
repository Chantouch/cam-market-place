{!! Form::label('img_name', 'Image:') !!}
<div class="form-group{{ $errors->has('img_name') ? ' has-error' : '' }}">
    <img id="img_preview" src="#" alt="Image slider" class="img-thumbnail"/>
    <div class="form-line">
        <div class="input-group">
            <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; {!! Form::file('img_name', ['class' => 'form-control hide','id' => 'img_name']) !!}
                    </span>
            </label>
            <input type="text" class="form-control" readonly id="img_name">
        </div>
    </div>
    @if ($errors->has('img_name'))
        <span class="help-block">
            <strong>{{ $errors->first('img_name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('name', 'Title:') !!}
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('name'))
        <span class="help-block">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('url', 'Target URL:') !!}
<div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('url'))
        <span class="help-block">
            <strong>{{ $errors->first('url') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('caption', 'Caption:') !!}
<div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('caption', null, ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('caption'))
        <span class="help-block">
            <strong>{{ $errors->first('caption') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('description', 'Description:') !!}
<div class="form-group{{ $errors->has('caption') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    </div>
    @if ($errors->has('description'))
        <span class="help-block">
            <strong>{{ $errors->first('description') }}</strong>
        </span>
    @endif
</div>

<div class="form-group text-right">
    <button type="submit" class="btn btn-primary m-t-15 waves-effect">
        <i class="material-icons">save</i> <span class="icon-name">SAVE</span>
    </button>
    <a href="{!! route('admin.home-sliders.index') !!}" class="btn btn-primary m-t-15 waves-effect">
        <i class="material-icons">cancel</i> <span class="icon-name">CANCEL</span>
    </a>
</div>