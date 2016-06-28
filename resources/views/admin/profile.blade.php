@extends('admin.layouts.adminlayout')

@section('Content')
    <div class="page-title">

        <div class="title-env">
            <h1 class="title">You Are Here </h1>
            <p class="description">Your Profile Page</p>
        </div>

        <div class="breadcrumb-env">

            <ol class="breadcrumb bc-1">
                <li>
                    <a href="/admin"><i class="fa-home"></i>Dashboard</a>
                </li>
                <li>

                    <a href="#"><strong>Profile</strong></a>
                </li>
            </ol>

        </div>

    </div>
    <div class="col-sm-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Profile</h3>
                <div class="panel-options">
                    <a href="#" data-toggle="panel">
                        <span class="collapse-icon">–</span>
                        <span class="expand-icon">+</span>
                    </a>
                    <a href="#" data-toggle="remove">
                        ×
                    </a>
                </div>
            </div>

            <div class="panel-body ">
                <!--             begin: Form             -->
                {!! Form::open(array('url' => 'admin/profile/up', 'method' => "post", 'role'=> "form", 'id' =>"profile" , 'class'=>"form-horizontal")) !!}
                <div class="form-group">
                    {!! Form::label('username', 'Username',array('class'=>"col-sm-2 control-label")) !!}
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-user"></i></span>
                            <strong class="form-control" disabled="disabled">
                                {{ $userD->username }}
                            </strong>
                        </div>
                    </div>
                </div>

                <div class="form-group-separator"></div>

                <div class="form-group">
                    {!! Form::label('oldpassword', 'Old Password',array('class'=>"col-sm-2 control-label")) !!}
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-lock"></i></span>
                            <input type="Password" name="oldpassword" id="oldpassword" class="form-control" placeholder="Old Password">
                        </div>
                    </div>
                </div>

                <div class="form-group-separator"></div>

                <div class="form-group">
                    {!! Form::label('newpassword', 'New Password',array('class'=>"col-sm-2 control-label")) !!}
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-lock"></i></span>
                            <input type="Password" name="newpassword" id="newpassword" class="form-control" placeholder="New Password">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    {!! Form::label('confnewpassword', 'Confirm',array('class'=>"col-sm-2 control-label")) !!}
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-lock"></i></span>
                            <input type="Password" name="confnewpassword" id="confnewpassword" class="form-control" placeholder="Confirm New Password">
                        </div>
                    </div>
                </div>

                <div class="form-group-separator"></div>

                <div class="form-group">
                    {!! Form::label('name', 'Personal Detail',array('class'=>"col-sm-2 control-label")) !!}
                    <div class="col-sm-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-user"></i></span>
                            <input type="text" name="name" id="name" class="form-control" value="{{ $userD->name }}" placeholder="Name">
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-user"></i></span>
                            <input type="text" name="family" id="family" class="form-control" value="{{ $userD->family }}" placeholder="Family">
                        </div>
                    </div>
                </div>

                <div class="form-group-separator"></div>

                <div class="form-group">
                    {!! Form::label('email', 'Email',array('class'=>"col-sm-2 control-label")) !!}
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-envelope"></i></span>
                            <input type="email" name="email" id="email" class="form-control" value="{{ $userD->email }}" placeholder="Email">
                        </div>
                    </div>
                </div>

                <div class="form-group-separator"></div>

                <div class="form-group">
                    {!! Form::label('phonenumber', 'Phone Number',array('class'=>"col-sm-2 control-label")) !!}
                    <div class="col-sm-10">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa-phone-square"></i></span>
                            <input type="number" name="phonenumber" value="{{ $userD->phonenumber }}" id="phonenumber" class="form-control" placeholder="Phone Number" maxlength="11" minlenght="10">
                        </div>
                    </div>
                </div>

                <div class="form-group text-right">
                    <div class="col-sm-12" style="text-align: -webkit-right;">
                        <div class="input-group">
                            <button type="submit" class="btn btn-blue">
                                Update
                            </button>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
                        <!--            end: Form           -->
            </div>
        </div>

    </div>
    @endsection

    @section('Username')
    {{ $userD->name . " " .  $userD->family }}
    @stop

    @section('Email')
    {{ $userD->email }}
    @stop

    @section('EventNum')
            <!-- TODO: set Event Number -->
    5
    @stop

    @section('BottomScript')
            <!-- Bottom Scripts -->
    <script src="{{ url('assets') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('assets') }}/js/TweenMax.min.js"></script>
    <script src="{{ url('assets') }}/js/resizeable.js"></script>
    <script src="{{ url('assets') }}/js/joinable.js"></script>
    <script src="{{ url('assets') }}/js/xenon-api.js"></script>
    <script src="{{ url('assets') }}/js/xenon-toggles.js"></script>


    <!-- Imported scripts on this page -->
    <script src="{{ url('assets') }}/js/xenon-widgets.js"></script>
    <script src="{{ url('assets') }}/js/devexpress-web-14.1/js/globalize.min.js"></script>
    <script src="{{ url('assets') }}/js/devexpress-web-14.1/js/dx.chartjs.js"></script>
    <script src="{{ url('assets') }}/js/toastr/toastr.min.js"></script>





    <!-- JavaScripts initializations and stuff -->
    <script src="{{ url('assets') }}/js/xenon-custom.js"></script>
@stop