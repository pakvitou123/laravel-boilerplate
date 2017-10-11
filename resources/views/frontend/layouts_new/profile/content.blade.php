@extends('frontend.layouts_new.app')

@section('content')
    <div class="col-md-8" style="margin-left: 19%;margin-top: 5%;">
        <div class="row">
            <div class="main-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h4>ការកំណត់គណនីទូទៅ</h4>
                                </div>
                                <div class="panel-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('profileupdate') }} " enctype="multipart/form-data" file="true">
                                        {{ csrf_field() }}
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>First Name</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="first_name" value="{{Auth::user()->first_name}}" >

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>Last Name</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="name" type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" >

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">
                                                <h4>Photo</h4>
                                            </div>
                                            <div class="col-md-6">
                                                <input id="file" type="file" class="form-control" name="file" >

                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-3">

                                            </div>
                                            <div class="col-md-6">

                                                    <button type="submit" class="btn btn-primary"> Save </button>

                                            </div>
                                        </div>



                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
@endsection
