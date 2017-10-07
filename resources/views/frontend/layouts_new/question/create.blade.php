@extends('frontend.layouts_new.app')

@section('content.blade.php')
    <div class="col-md-12">
        <div class="col-md-3" style="margin-left: 3%">
            @include('frontend.layouts_new.side-bar')
        </div>
        <div class="col-md-8" style="margin-top: 2%">
            <div class="col-md-12">
                <div class="row">
                    <div class="main-content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">

                                    <div class="panel panel-default">
                                        <div class="panel-heading">{{ trans('validation.attributes.frontend.question_header') }}</div>

                                        <div class="panel-body">

                                            {{ Form::open(['route' => 'QuestionCreate', 'class' => 'form-horizontal']) }}

                                            <div class="form-group">
                                                {{ Form::label('first_nafcme', trans('validation.attributes.frontend.title'),
                                                ['class' => 'col-md-4 control-label']) }}
                                                <div class="col-md-6">
                                                    {{ Form::text('title', null,
                                                    ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.title')]) }}
                                                </div><!--col-md-6-->
                                            </div><!--form-group-->

                                            <div class="form-group">
                                                {{ Form::label('decription', trans('validation.attributes.frontend.decription'),
                                                ['class' => 'col-md-4 control-label']) }}
                                                <div class="col-md-6">
                                                    {{ Form::textarea('description', null,
                                                    ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.group_decription')]) }}
                                                </div><!--col-md-6-->
                                            </div><!--form-group-->

                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    {{ Form::submit(trans('validation.attributes.frontend.public_question'), ['class' => 'btn btn-primary']) }}
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
        </div>
    </div>

@endsection

@section('after-scripts')
    @if (config('access.captcha.registration'))
        {!! Captcha::script() !!}
    @endif
@endsection
