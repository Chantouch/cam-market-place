{!! Form::label('alias', 'Alias:') !!}
<div class="form-group{{ $errors->has('alias') ? ' has-error' : '' }}">
    <div class="form-line">
        {!! Form::text('alias', null, ['class' => 'form-control', 'placeholder' => 'Enter your alias']) !!}
    </div>
    @if ($errors->has('alias'))
        <span class="help-block">
            <strong>{{ $errors->first('alias') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('first_name', 'First name:') !!}
<div class="form-group {!! $errors->has('first_name') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your first name']) !!}
    </div>
    @if ($errors->has('first_name'))
        <span class="help-block">
            <strong>{{ $errors->first('first_name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('last_name', 'Last name:') !!}
<div class="form-group {!! $errors->has('last_name') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => 'Enter your last name']) !!}
    </div>
    @if ($errors->has('last_name'))
        <span class="help-block">
            <strong>{{ $errors->first('last_name') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('company', 'Company:') !!}
<div class="form-group {!! $errors->has('company') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('company', null, ['class' => 'form-control', 'placeholder' => 'Enter your company']) !!}
    </div>
    @if ($errors->has('company'))
        <span class="help-block">
            <strong>{{ $errors->first('company') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('vat_number', 'VAT number:') !!}
<div class="form-group {!! $errors->has('vat_number') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('vat_number', null, ['class' => 'form-control', 'placeholder' => 'Enter your vat number']) !!}
    </div>
    @if ($errors->has('vat_number'))
        <span class="help-block">
            <strong>{{ $errors->first('vat_number') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('address', 'Address:') !!}
<div class="form-group {!! $errors->has('address') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('address', null, ['class' => 'form-control', 'placeholder' => 'Enter your address']) !!}
    </div>
    @if ($errors->has('address'))
        <span class="help-block">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('address_complement', 'Address complement:') !!}
<div class="form-group {!! $errors->has('address_complement') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('address_complement', null, ['class' => 'form-control', 'placeholder' => 'Enter your address complement']) !!}
    </div>
    @if ($errors->has('address_complement'))
        <span class="help-block">
            <strong>{{ $errors->first('address_complement') }}</strong>
        </span>
    @endif
</div>


{!! Form::label('zip_postal_code', 'Zip/postal code:') !!}
<div class="form-group {!! $errors->has('zip_postal_code') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('zip_postal_code', null, ['class' => 'form-control', 'placeholder' => 'Enter your zip/postal code']) !!}
    </div>
    @if ($errors->has('zip_postal_code'))
        <span class="help-block">
            <strong>{{ $errors->first('zip_postal_code') }}</strong>
        </span>
    @endif
</div>


{!! Form::label('country_id', 'Country:') !!}
<div class="form-group{{ $errors->has('country_id') ? ' has-error' : '' }}">
    {!! Form::select('country_id', array(null => '---Choose country---') + $countries, null, ['class'=>'custom-select custom-form', 'placeholder'=>'---Select Country---']) !!}
    @if ($errors->has('country_id'))
        <span class="help-block">
            <strong>{{ $errors->first('country_id') }}</strong>
        </span>
    @endif
</div>


{!! Form::label('city_id', 'City:') !!}
<div class="form-group{{ $errors->has('city_id') ? ' has-error' : '' }}">
    {!! Form::select('city_id', [], null, ['class'=>'custom-select custom-form']) !!}
    @if ($errors->has('city_id'))
        <span class="help-block">
            <strong>{{ $errors->first('city_id') }}</strong>
        </span>
    @endif
</div>

{!! Form::label('phone', 'Phone:') !!}
<div class="form-group {!! $errors->has('first_name') ? ' has-error' : '' !!}">
    <div class="form-line">
        {!! Form::text('phone', null, ['class' => 'form-control', 'placeholder' => 'Enter your phone']) !!}
    </div>
    @if ($errors->has('phone'))
        <span class="help-block">
            <strong>{{ $errors->first('phone') }}</strong>
        </span>
    @endif
</div>

<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.cities.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            get_child("country_id", "city_id", "/api/cities/");
            get_child("city_id", "commune_id", "/api/communes/");
        });
    </script>
@stop
