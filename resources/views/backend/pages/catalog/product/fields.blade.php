<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="header">
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
        </div>
        <div class="body">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li role="presentation" class="active">
                    <a href="#home_with_icon_title" data-toggle="tab">
                        <i class="material-icons">home</i> BASIC SETTINGS
                    </a>
                </li>
                <li role="presentation">
                    <a href="#profile_with_icon_title" data-toggle="tab">
                        <i class="material-icons">face</i> QUANTITIES
                    </a>
                </li>
                <li role="presentation">
                    <a href="#messages_with_icon_title" data-toggle="tab">
                        <i class="material-icons">email</i> PRICING
                    </a>
                </li>
                <li role="presentation">
                    <a href="#settings_with_icon_title" data-toggle="tab">
                        <i class="material-icons">settings</i> OPTIONS
                    </a>
                </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home_with_icon_title">

                    {!! Form::label('origin_place', 'Origin Place:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::text('origin_place', null, ['class' => 'form-control', 'placeholder' => 'Enter your product origin place']) !!}
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
                            {!! Form::text('city_id', null, ['class' => 'form-control', 'placeholder' => 'Enter your product city']) !!}
                        </div>
                        @if ($errors->has('city_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('city_id') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::label('short_description', 'Summary:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::textarea('short_description', null, ['class' => 'form-control', 'placeholder' => 'Enter your product short description']) !!}
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

                </div>
                <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                    {!! Form::label('qty', 'Quantity:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::text('qty', null, ['class' => 'form-control', 'placeholder' => 'Enter your product qty']) !!}
                        </div>
                        @if ($errors->has('qty'))
                            <span class="help-block">
                                <strong>{{ $errors->first('qty') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">

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


                </div>
                <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">

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

                    {!! Form::label('status', 'Online:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            <div class="switch">
                                <div class="switch">
                                    {!! Form::hidden('status', false) !!}
                                    <label>NO{!! Form::checkbox('status', '1', null) !!}<span
                                                class="lever"></span>YES</label>
                                </div>
                            </div>
                        </div>
                        <p class="help-block">
                            If it enabled, it will be available to all user.
                        </p>
                        @if ($errors->has('status'))
                            <span class="help-block">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::label('new', 'New:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            <div class="switch">
                                <div class="switch">
                                    {!! Form::hidden('new', false) !!}
                                    <label>NO{!! Form::checkbox('new', '1', null) !!}<span
                                                class="lever"></span>YES</label>
                                </div>
                            </div>
                        </div>
                        <p class="help-block">
                            If it enabled, it will be showed in the new tab to user.
                        </p>
                        @if ($errors->has('new'))
                            <span class="help-block">
                                <strong>{{ $errors->first('new') }}</strong>
                            </span>
                        @endif
                    </div>

                    {!! Form::label('popular', 'Popular:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            <div class="switch">
                                <div class="switch">
                                    {!! Form::hidden('popular', false) !!}
                                    <label>NO{!! Form::checkbox('popular', '1', null) !!}<span class="lever"></span>YES</label>
                                </div>
                            </div>
                        </div>
                        <p class="help-block">
                            If it enabled, it will be showed in the popular tab to user.
                        </p>
                        @if ($errors->has('popular'))
                            <span class="help-block">
                                <strong>{{ $errors->first('popular') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>
<button type="submit" class="btn btn-primary m-t-15 waves-effect">SUBMIT</button>
<a href="{!! route('admin.catalogs.products.index') !!}" class="btn btn-primary m-t-15 waves-effect">CANCEL</a>