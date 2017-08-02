<div class="row">
    <div class="col-sm-6 col-md-6">
        {!! Form::label('title', 'Ads title:') !!}
        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
            <div class="form-line">
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Enter your ads title']) !!}
            </div>
            @if ($errors->has('title'))
                <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('link', 'Ads Link:') !!}
        <div class="form-group">
            <div class="form-line">
                {!! Form::text('link', null, ['class' => 'form-control', 'placeholder' => 'Enter your ads link']) !!}
            </div>
            @if ($errors->has('link'))
                <span class="help-block">
                    <strong>{{ $errors->first('link') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('attachment', 'Ads image:') !!}
        <div class="form-group">
            <div class="form-line">
                {!! Form::file('attachment', ['class' => 'form-control']) !!}
            </div>
            @if ($errors->has('attachment'))
                <span class="help-block">
                    <strong>{{ $errors->first('attachment') }}</strong>
                </span>
            @endif
        </div>
    </div>
    <div class="col-sm-6 col-md-6">

        {!! Form::label('partner_id', 'Partner:') !!}
        <div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
            <div class="form-line">
                {!! Form::select('partner_id',$partners , null, ['class' => 'form-control show-tick', 'data-live-search' => 'true']) !!}
            </div>
            @if ($errors->has('partner_id'))
                <span class="help-block">
                    <strong>{{ $errors->first('partner_id') }}</strong>
                </span>
            @endif
        </div>


        {!! Form::label('expired_at', 'Ads expired at:') !!}
        <div class="form-group">
            <div class="form-line">
                {!! Form::date('expired_at',null, ['class' => 'form-control', 'placeholder' => 'Pick your ads expired date']) !!}
            </div>
            @if ($errors->has('expired_at'))
                <span class="help-block">
                    <strong>{{ $errors->first('expired_at') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('types', 'Ads types:') !!}
        <div class="form-group">
            <div class="form-line">
                {!! Form::select('types',$types , null, ['class' => 'form-control show-tick', 'data-live-search' => 'true']) !!}
            </div>
            @if ($errors->has('types'))
                <span class="help-block">
                    <strong>{{ $errors->first('types') }}</strong>
                </span>
            @endif
        </div>

    </div>
</div>

{{ Form::hidden('active', '0') }}
{!! Form::checkbox('active', '1', null, ['class' => 'filled-in', 'id'=> 'active']) !!}
<label for="active">Active</label>
<br>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.promotions.ads.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>