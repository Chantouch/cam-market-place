<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        {!! Form::label('name', 'Image:') !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="margin-bottom: 0;">
            <div class="form-line">
                {!! Form::file('img_name[]', ['class' => 'form-control', 'multiple', 'id'=>'img_name']) !!}
                @if(isset($product))
                    @foreach($product->images as $image)
                        <span class="img">
                        <img src="{!! asset($product->img_path.$image->img_name) !!}" alt="{!! $product->name !!}"
                             class="imageThumb">
                        <span class="remove" onclick="deleteArticle('{{ $image->hashid }}')">Remove image</span>
                    </span>
                    @endforeach
                @endif
            </div>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>

        {!! Form::label('name', 'Product Name:') !!}
        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}" style="margin-bottom: 0;">
            <div class="form-line">
                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Enter your product name']) !!}
            </div>
            @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
        </div>
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
                <div class="row">
                    <div class="col-md-6 col-sm-6">
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
                    </div>

                    <div class="col-md-6 col-sm-6">
                        {!! Form::label('city_id', 'City:') !!}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::select('city_id',$cities , null, ['class' => 'form-control', 'data-live-search' => 'true', 'placeholder' => '--Please choose city--']) !!}
                            </div>
                            @if ($errors->has('city_id'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('city_id') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
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

                {!! Form::label('category_id', 'Categories:') !!}
                <div class="form-group">
                    <div class="form-line">
                        {!! Form::select('category_id[]',$categories , null, ['class' => 'form-control', 'data-live-search' => 'true', 'id'=>'category_id' , 'multiple']) !!}
                    </div>
                    @if ($errors->has('category_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('category_id') }}</strong>
                        </span>
                    @endif
                </div>

                {{--{!! Form::label('tags', 'Tags:') !!}--}}
                {{--<div class="form-group tagsinput-area">--}}
                    {{--<div class="form-line">--}}
                        {{--{!! Form::text('tags[]', null, ['class' => 'form-control', 'placeholder' => 'Enter your product tag', 'data-role'=>'tagsinputs', 'id'=>'tags']) !!}--}}
                        {{--{!! Form::select('tags[]',$tags , null, ['data-role' => 'tagsinput', 'id'=>'tags' , 'multiple']) !!}--}}
                        {{--<input type="text" value="" data-role="tagsinput" id="tags"/>--}}
                    {{--</div>--}}
                    {{--@if ($errors->has('tags'))--}}
                        {{--<span class="help-block">--}}
                            {{--<strong>{{ $errors->first('tags') }}</strong>--}}
                        {{--</span>--}}
                    {{--@endif--}}
                {{--</div>--}}

            </div>

            <div role="tabpanel" class="tab-pane fade" id="profile_with_icon_title">
                {!! Form::label('qty', 'Quantity:') !!}
                <div class="form-group{{ $errors->has('qty') ? ' has-error' : '' }}">
                    <div class="form-line">
                        {!! Form::text('qty', null, ['class' => 'form-control', 'placeholder' => 'Enter your product qty']) !!}
                    </div>
                    @if ($errors->has('qty'))
                        <span class="help-block">
                            <strong>{{ $errors->first('qty') }}</strong>
                        </span>
                    @endif
                </div>
                <h5>Availability preferences:</h5>
                <span class="control-label">Behavior when out of stock</span>
                <div class="radio-button">
                    {!! Form::hidden('can_order', false) !!}

                    {!! Form::radio('can_order', 3, null, ['id'=>'can_order_3' ,'class' => 'with-gap']) !!}
                    {!! Form::label('can_order_3', 'Deny Orders') !!}

                    {!! Form::radio('can_order', 2, null, ['id'=>'can_order_2' ,'class' => 'with-gap']) !!}
                    {!! Form::label('can_order_2', 'Allow Orders') !!}
                    @if(isset($product))
                        {!! Form::radio('can_order', 1, null, ['id'=>'can_order_1' ,'class' => 'with-gap']) !!}
                    @else
                        {!! Form::radio('can_order', 1, null, ['id'=>'can_order_1' ,'class' => 'with-gap', 'checked']) !!}
                    @endif
                    {!! Form::label('can_order_1', 'Used default behavior (Allow orders)') !!}

                </div>

            </div>
            <div role="tabpanel" class="tab-pane fade" id="messages_with_icon_title">

                {!! Form::label('currency_id', 'Currency:') !!}
                <div class="form-group">
                    <div class="form-line">
                        {!! Form::select('currency_id', $currencies, null, ['class' => 'form-control', 'data-live-search' => 'true', 'placeholder' => '--Please choose currency--']) !!}
                    </div>
                    @if ($errors->has('currency_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('currency_id') }}</strong>
                        </span>
                    @endif
                </div>

                <h4>Retail price</h4>
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

                <h4>Cost price</h4>
                {!! Form::label('cost', 'Price:') !!}
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

                <div class="row">
                    <div class="col-md-6">
                        {!! Form::label('discount', 'Discount:') !!}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::text('discount', null, ['class' => 'form-control', 'placeholder' => 'Enter your product discount']) !!}
                            </div>
                            @if ($errors->has('discount'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('discount') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="col-md-6">
                        {!! Form::label('discount_type', 'Discount Type:') !!}
                        <div class="form-group">
                            <div class="form-line">
                                {!! Form::select('discount_type',$discount_types , null, ['class' => 'form-control', 'data-live-search' => 'true', 'placeholder' => '--Please choose discount type--']) !!}
                            </div>
                            @if ($errors->has('discount_type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('discount_type') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div role="tabpanel" class="tab-pane fade" id="settings_with_icon_title">
                <div class="col-md-6">
                    {!! Form::label('language_id', 'Language:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            {!! Form::select('language_id[]', $languages, null, ['class' => 'form-control', 'data-live-search' => 'true', 'multiple', 'id'=> 'language_id']) !!}
                        </div>
                        @if ($errors->has('language_id'))
                            <span class="help-block">
                                <strong>{{ $errors->first('language_id') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-md-6">
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
                </div>
                <div class="col-md-4 col-sm-4">
                    {!! Form::label('status', 'Online:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            <div class="switch">
                                <div class="switch">
                                    {{ Form::hidden('status', '0') }}
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
                </div>
                <div class="col-md-4 col-sm-4">
                    {!! Form::label('new', 'New:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            <div class="switch">
                                <div class="switch">
                                    {{ Form::hidden('new', '0') }}
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
                </div>
                <div class="col-md-4 col-sm-4">
                    {!! Form::label('popular', 'Popular:') !!}
                    <div class="form-group">
                        <div class="form-line">
                            <div class="switch">
                                <div class="switch">
                                    {{ Form::hidden('popular', '0') }}
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
        <button type="submit" class="btn btn-primary waves-effect">SAVE</button>
        <a href="{!! route('admin.catalogs.products.index') !!}" class="btn btn-primary waves-effect">CANCEL</a>
    </div>
</div>