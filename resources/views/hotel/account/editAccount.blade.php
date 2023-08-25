@extends('hotel.hotelMaster.hotelMasterPage')

@section('title')
    {{ Session::get('hotel_name') }} - Account
@endsection

@section('css')
    <!-- icons -->
    <link href="{{ URL::to('/') }}/assets/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet"
        type="text/css" />
    <link href="{{ URL::to('/') }}/assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet"
        type="text/css" />
    <!--bootstrap -->
    <link href="{{ URL::to('/') }}/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Material Design Lite CSS -->
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/plugins/material/material.min.css">
    <link rel="stylesheet" href="{{ URL::to('/') }}/assets/css/material_style.css">
    <!-- animation -->
    <link href="{{ URL::to('/') }}/assets/css/pages/animate_page.css" rel="stylesheet">
    <!-- Template Styles -->
    <link href="{{ URL::to('/') }}/assets/css/style.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link href="{{ URL::to('/') }}/assets/css/theme-color.css" rel="stylesheet" type="text/css" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ URL::to('/') }}/assets/img/favicon.ico" />
    <style>
        body {
            background-color: #ffffff
        }

        .padding {
            padding: 3rem !important
        }

        .user-card-full {
            overflow: hidden
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(219, 237, 245, 0.08);
            box-shadow: 0 1px 20px 0 rgba(206, 214, 218, 0.08);
            border: none;
            margin-bottom: 30px
        }

        .m-r-0 {
            margin-right: 0px
        }

        .m-l-0 {
            margin-left: 0px
        }

        .user-card-full .user-profile {
            border-radius: 5px 0 0 5px
        }

        .bg-c-lite-green {
            background: -webkit-gradient(linear, left top, right top, from(#131049), to(#42394d));
            background: linear-gradient(to right, #15054e, #2e1305)
        }

        .user-profile {
            padding: 30px 0
        }

        .card-block {
            padding: 1.25rem
        }

        .m-b-25 {
            margin-bottom: 25px
        }

        .img-radius {
            border-radius: 5px
        }

        h6 {
            font-size: 20px
        }

        .card .card-block p {
            line-height: 25px
        }

        @media only screen and (min-width: 1400px) {
            p {
                font-size: 14px
            }
        }

        .card-block {
            padding: 1.25rem
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .card .card-block p {
            line-height: 25px
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .text-muted {
            color: #0c0e0f !important
        }

        .b-b-default {
            border-bottom: 1px solid #e0e0e0
        }

        .f-w-600 {
            font-weight: 600
        }

        .m-b-20 {
            margin-bottom: 20px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .p-b-5 {
            padding-bottom: 5px !important
        }

        .m-b-10 {
            margin-bottom: 10px
        }

        .m-t-40 {
            margin-top: 20px
        }

        .user-card-full .social-link li {
            display: inline-block
        }

        .user-card-full .social-link li a {
            font-size: 20px;
            margin: 0 10px 0 0;
            -webkit-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out
        }

    </style>
@endsection

@section('main')
    <div class="page-content">
        <div class="page-bar">
            <div class="page-title-breadcrumb">
                <div class=" pull-left">
                    <div class="page-title">My Account</div>
                </div>
                <ol class="breadcrumb page-breadcrumb pull-right">
                    <li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
                            href="/admin/dashboard">Dashboard</a>&nbsp;<i class="fa fa-angle-right"></i>
                    </li>

                    <li class="active">Edit Account</li>
                </ol>
            </div>
        </div>


        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif

        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-1"></div>
                <div class="col-xl-10 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l- m-r-0">
                            <div class="col-sm-12">
                                <form action="/hotel/updateAccount" id="form1" method="post">
                                    @csrf
                                    <div class="card-block">
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information Update</h6>
                                        <br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="m-b-20 p-b-5 b-b-default f-w-600">UserName</p>
                                                <h6 class="text-muted f-w-400">
                                                    <input type="text" class="form-control"
                                                        value="{{ $hotelData->username }} " name="txtUsername">
                                                </h6>
                                            </div>

                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="m-b-20 p-b-5 b-b-default f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400">
                                                    <input type="text" class="form-control"
                                                        value="{{ $hotelData->email }}" name="txtEmail">
                                                </h6>
                                            </div>

                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="m-b-10 b-b-default f-w-600">Contact No</p>
                                                <h6 class="text-muted f-w-400">
                                                    <input type="text" class="form-control"
                                                        value="{{ $hotelData->contact_no }}" name="txtphone">
                                                </h6>
                                            </div>

                                        </div><br>                                       
                                        <button type="submit" class="btn btn-round btn-primary m-2">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


        <!-- end page content -->
        <!-- end page container -->
    @endsection

    @section('js')
        <!-- start js include path -->
        <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/plugins/popper/popper.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
        <script src="{{ URL::to('/') }}/assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <!-- bootstrap -->
        <script src="{{ URL::to('/') }}/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
        <!-- Common js-->
        <script src="{{ URL::to('/') }}/assets/js/app.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/layout.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/theme-color.js"></script>
        <!-- Material -->
        <script src="{{ URL::to('/') }}/assets/plugins/material/material.min.js"></script>
        <!-- animation -->
        <script src="{{ URL::to('/') }}/assets/js/pages/ui/animations.js"></script>
        <!-- end js include path -->

        {{-- validation --}}
        <script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
        <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
        <script>
            $(document).ready(function() {
                $("#form1").validate({
                    rules: {
                        txtUsername: {
                            required: true
                        },
                        txtEmail: {
                            required: true,
                            email: true
                        },
                        txtphone: {
                            required: true,
                            digits: true,
                            maxlength: 10,
                            minlength: 10
                        }
                    },
                    messages: {
                        txtUsername: {
                            required: "Please Enter Name"
                        },
                        txtEmail: {
                            required: "Please Enter Email",
                            email: "Please Enter Email"
                        },
                        txtphone: {
                            required: "Please Enter phone No",
                            digits: "Please Enter In digits",
                            maxlength: "Phone No should be 10 digits",
                            minlength: "Phone No should be 10 digits"
                        }
                    }
                })
            })
        </script>
    @endsection
