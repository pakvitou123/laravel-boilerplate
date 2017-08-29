@extends('frontend.layouts_new.app')
@section('title', app_name() . ' | Create Group')

@section('content')
    <div class="col-md-9">
        <div class="row">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">

                            <div class="panel panel-default">
                                <div class="panel-heading">{{ trans('validation.attributes.frontend.group_header') }}</div>

                                <div class="panel-body">

                                    {{ Form::open(['route' => 'frontend.auth.register.post', 'class' => 'form-horizontal']) }}

                                    <div class="form-group">
                                        {{ Form::label('first_nafcme', trans('validation.attributes.frontend.group_name'),
                                        ['class' => 'col-md-4 control-label']) }}
                                        <div class="col-md-6">
                                            {{ Form::text('first_name', null,
                                            ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.group_name')]) }}
                                        </div><!--col-md-6-->
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        {{ Form::label('decription', trans('validation.attributes.frontend.decription'),
                                        ['class' => 'col-md-4 control-label']) }}
                                        <div class="col-md-6">
                                            {{ Form::textarea('last_name', null,
                                            ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.group_decription')]) }}
                                        </div><!--col-md-6-->
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        {{ Form::label('email', trans('validation.attributes.frontend.privacy'), ['class' => 'col-md-4 control-label']) }}
                                        <div class="col-md-6">
                                            <select class="form-control" name="item_id">
                                                <option value="public">Public</option>
                                                <option value="private">Private</option>
                                            </select>
                                        </div>
                                    </div><!--form-group-->






                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            {{ Form::submit(trans('validation.attributes.frontend.create'), ['class' => 'btn btn-primary']) }}
                                        </div><!--col-md-6-->
                                    </div><!--form-group-->

                                    {{ Form::close() }}

                                </div><!-- panel body -->

                            </div><!-- panel -->

                        </div><!-- col-md-8 -->

                    </div><!-- row -->
                </div>
            </div>
        </div>
    </div>
@endsection

@section('after-scripts')
    @if (config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@endsection