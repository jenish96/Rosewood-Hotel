@extends('user.master.masterpage')

@section('title')
    Rosewood - My Account
@endsection

@section('css')
    <style>
        body {
            background-color: #f9f9fa
        }

        .padding {
            padding: 3rem !important
        }

        .user-card-full {
            overflow: hidden
        }

        .card {
            border-radius: 5px;
            -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
            box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
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
            background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
            background: linear-gradient(to right, #ee5a6f, #f29263)
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
    <div class="page-content page-container" id="page-content">
        <div class="padding">
            <div class="row container d-flex justify-content-center">
                <div class="col-xl-1"></div>
                <div class="col-xl-10 col-md-12">
                    <div class="card user-card-full">
                        <div class="row m-l-0 m-r-0">
                           
                            <div class="col-sm-12">
                                <div class="card-block">
                                    <form method="post" id="form1" action="/user/updateAccount">
                                        @csrf
                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Information</h6>
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <p class="m-b-20 p-b-5 b-b-default f-w-600">Name</p>
                                                <h6 class="text-muted f-w-400">
                                                    <input type="text" class="form-control" name="txtname"
                                                        value="{{$userData->username}}">
                                                </h6>
                                            </div>
                                            <div class="col-sm-6">
                                                <p class="m-b-20 p-b-5 b-b-default f-w-600">Phone</p>
                                                <h6 class="text-muted f-w-400">
                                                    <input type="text" class="form-control" name="txtphone"
                                                        value="{{$userData->contact_no}}">
                                                </h6>
                                            </div>
                                        </div><br>
                                        {{-- <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Projects</h6> --}}
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p class="m-b-10 b-b-default f-w-600">Email</p>
                                                <h6 class="text-muted f-w-400"><input type="text" class="form-control" name="txtemail"
                                                    value="{{$userData->email}}"></h6>
                                            </div>

                                        </div>
                                        <br>
                                        <button type="submit" class="theme-btn btn-sm">Update</button>
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

@section('js')
<script src="{{URL::to('/')}}/assets/js/jquery.validate.js"></script>
    <script src="{{URL::to('/')}}/assets/js/additional-methods.js"></script>
    <script>
        $(document).ready(function(){
            $("#form1").validate({
                rules:{
                    txtname:
                    {
                        required:true
                    },
                    txtemail:
                    {
                        required:true,
                        email: true
                    },
                    txtphone:
                    {
                        required:true,
                        digits: true,
                        maxlength: 10,
                        minlength:10
                    }
                },
                messages:{
                    txtname:
                    {
                        required:"Please Enter Name"
                    },
                    txtemail:
                    {
                        required:"Please Enter Email",
                        email: "Please Enter Email"
                    },
                    txtphone:
                    {
                        required:"Please Enter phone No",
                        digits: "Please Enter In digits",
                        maxlength: "Phone No should be 10 digits",
                        minlength:"Phone No should be 10 digits"
                    }
                }
            })
        })
    </script>
@endsection
