{!! Form::label('speed', 'Speed:') !!}
<div class="form-group{{ $errors->has('speed') ? ' has-error' : '' }}">
    <div class="form-line">
        <div class="input-group" style="margin-bottom: 0">
            {!! Form::text('speed', null, ['class' => 'form-control', 'placeholder' => 'Enter your speed','aria-describedby'=>'basic-addon']) !!}
            <span class="input-group-addon" id="basic-addon">milliseconds</span>
        </div>
    </div>
    <p class="help-block">
        The duration of the transition between two slides.
    </p>
    @if ($errors->has('speed'))
        <span class="help-block">
            <strong>{{ $errors->first('speed') }}</strong>
        </span>
    @endif
</div>
<div class="row">
    <div class="col-md-6 col-sm-6">
        {!! Form::label('pause_on_hover', 'Pause on hover:') !!}
        <div class="form-group">
            <div class="form-line">
                <div class="switch">
                    <div class="switch">
                        {{ Form::hidden('pause_on_hover', '0') }}
                        <label>OFF{!! Form::checkbox('pause_on_hover', '1', null) !!}<span
                                    class="lever"></span>ON</label>
                    </div>
                </div>
            </div>
            <p class="help-block">
                Stop sliding when the mouse cursor is over the slideshow.
            </p>
            @if ($errors->has('pause_on_hover'))
                <span class="help-block">
            <strong>{{ $errors->first('pause_on_hover') }}</strong>
        </span>
            @endif
        </div>
    </div>

    <div class="col-md-6 col-sm-6">
        {!! Form::label('loop_forever', 'Loop forever:') !!}
        <div class="form-group">
            <div class="form-line">
                <div class="switch">
                    <div class="switch">
                        {{ Form::hidden('loop_forever', '0', array('id' => 'loop_forever')) }}
                        <label>OFF{!! Form::checkbox('loop_forever', '1', null) !!}<span class="lever"></span>ON</label>
                    </div>
                </div>
            </div>
            <p class="help-block">
                Loop or stop after the last slide.
            </p>
            @if ($errors->has('loop_forever'))
                <span class="help-block">
            <strong>{{ $errors->first('loop_forever') }}</strong>
        </span>
            @endif
        </div>
    </div>
</div>
<div class="form-group text-right">
    <button type="submit" class="btn btn-primary m-t-15 waves-effect" name="submit_button" value="settings">
        <i class="material-icons">save</i> <span class="icon-name">SAVE</span>
    </button>
</div>