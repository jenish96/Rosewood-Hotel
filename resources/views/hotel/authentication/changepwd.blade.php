@extends('hotel.hotelMaster.hotelMasterpage')

@section('title')
{{Session::get('hotel_name')}}- Change Password
@endsection

@section('css')
    <!-- icons -->
    <link href="assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!--bootstrap -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="assets/css/material_style.css">
    <!-- animation -->
    <link href="assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages/formlayout.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
@endsection


@section('js')
    <!-- start js include path -->
    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>___scripts_1___
    <script src="assets/plugins/popper/popper.min.js"></script>
    <script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
    <script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- bootstrap -->
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Common js-->
    <script src="assets/js/app.js"></script>
    <script src="assets/js/layout.js"></script>
    <script src="assets/js/theme-color.js"></script>
    <!-- Material -->
    <script src="assets/plugins/material/material.min.js"></script>
    <!-- animation -->
    <script src="assets/js/pages/ui/animations.js"></script>
    <!-- end js include path -->

    <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function() {
        $("#form1").validate({
            rules: {
                oldpwd: {
                    required: true
                },
                newpwd: {
                    required: true
                },
                conpwd: {
                    required: true
                }
            },
            messages: {
                oldpwd: {
                    required: "Please Enter Old Password"
                },
                newpwd: {
                    required: "Please Enter New Password"
                },
                conpwd: {
                    required: "Please Enter Confirm Password"
                }
            }
        })
        })
    </script>
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">Change Password</div>
                </div>
                {{-- <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/hotel/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li><a class="parent-item" href="/hotel/changepwd">Change Password</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Change Password</li>
                </ol> --}}
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-3">
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="card card-box">
                    <div class="card-head">
                        <header>Change Password</header>


                    </div>
                    @if (session()->has('message'))
                    <div class="alert alert-success">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                    @if (session()->has('danger'))
                    <div class="alert alert-danger">
                        {{ session()->get('danger') }}
                    </div>      
                @endif
                    <div class="card-body " id="bar-parent">
                        <form action="/hotel/updatepwd" method="POST" id="form1">
                            @csrf
                            <div class="form-group">
                                <label for="state">Old Password</label>
                                <input type="password" class="form-control" id="oldpwd" placeholder="" name="oldpwd">
                            </div>
                            <div class="form-group">
                                <label for="state">New Password</label>
                                <input type="password" class="form-control" id="newpwd" placeholder="" name="newpwd">
                            </div>
                            <div class="form-group">
                                <label for="state">Confirm Pasword</label>
                                <input type="password" class="form-control" id="conpwd" placeholder="" name="conpwd">
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
