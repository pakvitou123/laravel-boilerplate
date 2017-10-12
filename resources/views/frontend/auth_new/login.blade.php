@extends('frontend.layouts_new.app')

@section('title', app_name() . ' | Login')
@section('header')
        <style type="text/css">
            @import url(http://fonts.googleapis.com/css?family=Roboto);

            /****** LOGIN MODAL ******/
            .loginmodal-container {
                padding: 30px;
                max-width: 350px;
                width: 100% !important;
                background-color: #F7F7F7;
                margin: 0 auto;
                border-radius: 2px;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                overflow: hidden;
                font-family: roboto;
            }

            .loginmodal-container h1 {
                text-align: center;
                font-size: 1.8em;
                font-family: roboto;
            }

            .loginmodal-container input[type=submit] {
                width: 100%;
                display: block;
                margin-bottom: 10px;
                position: relative;
            }

            .loginmodal-container input[type=text], input[type=password] {
                height: 44px;
                font-size: 16px;
                width: 100%;
                margin-bottom: 10px;
                -webkit-appearance: none;
                background: #fff;
                border: 1px solid #d9d9d9;
                border-top: 1px solid #c0c0c0;
                /* border-radius: 2px; */
                padding: 0 8px;
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }

            .loginmodal-container input[type=text]:hover, input[type=password]:hover {
                border: 1px solid #b9b9b9;
                border-top: 1px solid #a0a0a0;
                -moz-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                -webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
                box-shadow: inset 0 1px 2px rgba(0,0,0,0.1);
            }

            .loginmodal {
                text-align: center;
                font-size: 14px;
                font-family: 'Arial', sans-serif;
                font-weight: 700;
                height: 36px;
                padding: 0 8px;
                /* border-radius: 3px; */
                /* -webkit-user-select: none;
                  user-select: none; */
            }

            .loginmodal-submit {
                /* border: 1px solid #3079ed; */
                border: 0px;
                color: #fff;
                text-shadow: 0 1px rgba(0,0,0,0.1);
                background-color: #4d90fe;
                padding: 17px 0px;
                font-family: roboto;
                font-size: 14px;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#4787ed)); */
            }

            .loginmodal-submit:hover {
                /* border: 1px solid #2f5bb7; */
                border: 0px;
                text-shadow: 0 1px rgba(0,0,0,0.3);
                background-color: #357ae8;
                /* background-image: -webkit-gradient(linear, 0 0, 0 100%,   from(#4d90fe), to(#357ae8)); */
            }

            .loginmodal-container a {
                text-decoration: none;
                color: #666;
                font-weight: 400;
                text-align: center;
                display: inline-block;
                opacity: 0.6;
                transition: opacity ease 0.5s;
            }

            .login-help{
                font-size: 12px;
            }
        </style>
    @endsection
@section('content')

    <div>
        <div class="container">
            <div class="page-header" id="banner" style="border-bottom:0px">
                <div class="row">
                </div>
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">{{ trans('labels.frontend.auth.login_box_title') }}</div>

                                        <div class="panel-body">

                                            {{ Form::open(['route' => 'frontend.auth.login.post', 'class' => 'form-horizontal']) }}

                                            <div class="form-group">
                                                {{ Form::label('email', trans('validation.attributes.frontend.email'), ['class' => 'col-md-4 control-label']) }}
                                                <div class="col-md-6">
                                                    {{ Form::email('email', null, ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.email')]) }}
                                                </div><!--col-md-6-->
                                            </div><!--form-group-->

                                            <div class="form-group">
                                                {{ Form::label('password', trans('validation.attributes.frontend.password'), ['class' => 'col-md-4 control-label']) }}
                                                <div class="col-md-6">
                                                    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.password')]) }}
                                                </div><!--col-md-6-->
                                            </div><!--form-group-->

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <div class="checkbox">
                                                        <label>
                                                            {{ Form::checkbox('remember') }} {{ trans('labels.frontend.auth.remember_me') }}
                                                        </label>
                                                    </div>
                                                </div><!--col-md-6-->
                                            </div><!--form-group-->

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    {{ Form::submit(trans('labels.frontend.auth.login_button'), ['class' => 'btn btn-primary', 'style' => 'margin-right:15px']) }}

                                                    {{ link_to_route('frontend.auth.password.reset', trans('labels.frontend.passwords.forgot_password')) }}
                                                </div><!--col-md-6-->
                                            </div><!--form-group-->

                                            {{ Form::close() }}

                                            <div class="row text-center">
                                                {!! $socialite_links !!}
                                            </div>
                                        </div><!-- panel body -->

                                    </div><!-- panel -->

                                </div><!-- col-md-8 -->
                            </div>

                        </div>

                    </div>


                </div><!-- row -->
            </div>
        </div>
    </div>

@endsection