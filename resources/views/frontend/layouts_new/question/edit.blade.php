@extends('frontend.layouts_new.app')

@section('content')
    <div class="col-md-9" style="margin-left: 10%;margin-top: 5%">
        <div class="row">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default" style="border:1px solid #f5f5f5;background-color:  #f5f5f5;">
                                <div class="panel-heading text-muted"
                                     style="font-size: 20px;display: inline-block;margin-left: 245px;">{{ trans('validation.attributes.frontend.edit_header') }}</div>

                                <div class="panel-body">

                                    {{ Form::open(['route' => ['updatequestion', $question->id], 'class' => 'form-horizontal']) }}

                                    <div class="form-group">
                                        {{ Form::label('first_nafcme', trans('validation.attributes.frontend.title'),
                                        ['class' => 'col-md-4 control-label']) }}
                                        <div class="col-md-6">
                                            {{ Form::text('title', $question->title,
                                            ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'autofocus' => 'autofocus', 'placeholder' => trans('validation.attributes.frontend.title')]) }}
                                        </div><!--col-md-6-->
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        {{ Form::label('decription', trans('validation.attributes.frontend.decription'),
                                        ['class' => 'col-md-4 control-label']) }}
                                        <div class="col-md-6" style="margin-left: -13px;">
                                            {{ Form::textarea('description', $question->description,
                                            ['class' => 'form-control', 'maxlength' => '191', 'required' => 'required', 'placeholder' => trans('validation.attributes.frontend.group_decription')]) }}
                                        </div><!--col-md-6-->
                                    </div><!--form-group-->

                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            {{ Form::submit(trans('validation.attributes.frontend.save'), ['class' => 'btn btn-primary']) }}
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
