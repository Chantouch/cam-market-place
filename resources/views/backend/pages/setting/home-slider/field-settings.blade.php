{!! Form::label('speed', 'Speed:') !!}
<div class="form-group{{ $errors->has('speed') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('speed', null, ['class' => 'form-control', 'placeholder' => 'Enter your speed']) !!}
    </div>
    @if ($errors->has('speed'))
        <span class="help-block">
            <strong>{{ $errors->first('speed') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('pause_on_hover', 'Pause on hover:') !!}
<div class="form-group">
    <div class="form-line">
        <div class="switch">
            <div class="switch">
                {!! Form::hidden('pause_on_hover', false) !!}
                <label>OFF{!! Form::checkbox('pause_on_hover', '1', null) !!}<span class="lever"></span>ON</label>
            </div>
        </div>
    </div>
    @if ($errors->has('pause_on_hover'))
        <span class="help-block">
            <strong>{{ $errors->first('pause_on_hover') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('loop_forever', 'Loop forever:') !!}
<div class="form-group">
    <div class="form-line">
        <div class="switch">
            <div class="switch">
                {!! Form::hidden('loop_forever', false) !!}
                <label>OFF{!! Form::checkbox('loop_forever', '1', null) !!}<span class="lever"></span>ON</label>
            </div>
        </div>
    </div>
    @if ($errors->has('loop_forever'))
        <span class="help-block">
            <strong>{{ $errors->first('loop_forever') }}</strong>
        </span>
    @endif
</div>
<div class="form-group text-right">
    <button type="submit" class="btn btn-primary m-t-15 waves-effect">
        <i class="material-icons">save</i> <span class="icon-name">SAVE</span>
    </button>
</div>