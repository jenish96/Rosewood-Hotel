@extends('user.master.masterpage')

@section('title')
Rosewood - Login
@endsection

@section('css')
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');
<style>
	
@import url('https://fonts.googleapis.com/css?family=Montserrat:400,800');

* {
	box-sizing: border-box;
}

body {
	background: #f6f5f7;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
	font-family: 'Montserrat', sans-serif;
	height: 100vh;
	margin: -20px 0 50px;
}

h1 {
	font-weight: bold;
	margin: 0;
}

h2 {
	text-align: center;
}

p {
	font-size: 14px;
	font-weight: 100;
	line-height: 20px;
	letter-spacing: 0.5px;
	margin: 20px 0 30px;
}

span {
	font-size: 12px;
}

a {
	color: #333;
	font-size: 14px;
	text-decoration: none;
	margin: 15px 0;
}

button {
	border-radius: 20px;
	border: 1px solid #FF4B2B;
	background-color: #FF4B2B;
	color: #FFFFFF;
	font-size: 12px;
	font-weight: bold;
	padding: 12px 45px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: transform 80ms ease-in;
}

button:active {
	transform: scale(0.95);
}

button:focus {
	outline: none;
}

button.ghost {
	background-color: transparent;
	border-color: #FFFFFF;
}

form {
	background-color: #FFFFFF;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 50px;
	height: 100%;
	text-align: center;
}

input {
	background-color: #eee;
	border: none;
	padding: 12px 15px;
	margin: 8px 0;
	width: 100%;
}

.container {
	background-color: #fff;
	border-radius: 10px;
  	box-shadow: 0 14px 28px rgba(0,0,0,0.25), 
			0 10px 10px rgba(0,0,0,0.22);
	position: relative;
	overflow: hidden;
	width: 768px;
	max-width: 100%;
	min-height: 480px;
}

.form-container {
	position: absolute;
	top: 0;
	height: 100%;
	transition: all 0.6s ease-in-out;
}

.sign-in-container {
	left: 0;
	width: 50%;
	z-index: 2;
}

.container.right-panel-active .sign-in-container {
	transform: translateX(100%);
}

.sign-up-container {
	left: 0;
	width: 50%;
	opacity: 0;
	z-index: 1;
}

.container.right-panel-active .sign-up-container {
	transform: translateX(100%);
	opacity: 1;
	z-index: 5;
	animation: show 0.6s;
}

@keyframes show {
	0%, 49.99% {
		opacity: 0;
		z-index: 1;
	}
	
	50%, 100% {
		opacity: 1;
		z-index: 5;
	}
}

.overlay-container {
	position: absolute;
	top: 0;
	left: 50%;
	width: 50%;
	height: 100%;
	overflow: hidden;
	transition: transform 0.6s ease-in-out;
	z-index: 100;
}

.container.right-panel-active .overlay-container{
	transform: translateX(-100%);
}

.overlay {
	background: #FF416C;
	background: -webkit-linear-gradient(to right, #FF4B2B, #FF416C);
	background: linear-gradient(to right, #FF4B2B, #FF416C);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: 0 0;
	color: #FFFFFF;
	position: relative;
	left: -100%;
	height: 100%;
	width: 200%;
  	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.container.right-panel-active .overlay {
  	transform: translateX(50%);
}

.overlay-panel {
	position: absolute;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: column;
	padding: 0 40px;
	text-align: center;
	top: 0;
	height: 100%;
	width: 50%;
	transform: translateX(0);
	transition: transform 0.6s ease-in-out;
}

.overlay-left {
	transform: translateX(-20%);
}

.container.right-panel-active .overlay-left {
	transform: translateX(0);
}

.overlay-right {
	right: 0;
	transform: translateX(0);
}

.container.right-panel-active .overlay-right {
	transform: translateX(20%);
}

.social-container {
	margin: 20px 0;
}

.social-container a {
	border: 1px solid #DDDDDD;
	border-radius: 50%;
	display: inline-flex;
	justify-content: center;
	align-items: center;
	margin: 0 5px;
	height: 40px;
	width: 40px;
}

footer {
    background-color: #222;
    color: #fff;
    font-size: 14px;
    bottom: 0;
    position: fixed;
    left: 0;
    right: 0;
    text-align: center;
    z-index: 999;
}

footer p {
    margin: 10px 0;
}

footer i {
    color: red;
}

footer a {
    color: #3c97bf;
    text-decoration: none;
}
	</style>
@endsection

@section('main')

@if(session()->has('message'))
                <div class="alert alert-message">
                    {{ session()->get('message') }}
                </div>
                @endif
<div class="row">
{{-- 
    <h2>Weekly Coding Challenge #1: Sign in/up Form</h2> --}}
    <div class="container" id="container">
		
        <div class="form-container sign-up-container">
            <form action="/user/register" id="form2" method="post">
				@csrf
				@if(session()->has('message'))
                <div class="alert alert-message">
                    {{ session()->get('message') }}
                </div>
                @endif
			<h1>Create Account</h1>
			<br>
			{{-- <div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span> --}}
			<input type="text" placeholder="Enter Name"  name="uname"/>
			<input type="email" placeholder="Enter Email" name="email"/>
			<input type="tel" placeholder="Enter Contact No"  name="cotactNo"/>
			<input type="password" placeholder="Enter Password" name="pwd" />
			<button type="submit">Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
        <form action="/user/checkLogin" id="form1" method="post">
			@csrf
			@if(session()->has('message'))
                <div class="alert alert-message">
                    {{ session()->get('message') }}
                </div>
                @endif
            <h1>Login</h1>
			<br><br>
			{{-- <span>or use your account</span> --}}
			<input type="email" placeholder="Email"  name="useremail"/>
			<input type="password" placeholder="Password" name="password" />
			<a href="/user/forgotPwd">Forgot your password?</a>
			<button type="submit">Log In</button>
		</form>
	</div>
	<div class="overlay-container">
        <div class="overlay">
            <div class="overlay-panel overlay-left">
                <h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" type="submit" id="signIn">Log In</button>
			</div>
			<div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" type="submit" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>
</div>
<br><br>

{{-- <footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer> --}}
@endsection

@section('js')
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
<script src="{{ URL::to('/') }}/assets/js/jquery.validate.js"></script>
    <script src="{{ URL::to('/') }}/assets/js/additional-methods.js"></script>
<script>
	$(document).ready(function() {
	$("#form2").validate({
		rules: {
			uname: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			cotactNo: {
				required: true,
				digits : true,
				minlength:10,
				maxlength: 10
			},
			password: {
				required: true
			}
		},
		messages: {
			uname: {
				required: "Please Enter UserName"
			},
			email: {
				required: "Please Enter EMail",
				email: "please enter Email"
			},
			cotactNo: {
				required: "Please Enter Contact No",
				digits : "Please Enter In Number",
				minlength: "Number should be 10 digit",
				maxlength: "Number should be 10 digit"
			},
			password: {
				required: "Please Enter Password"
			}
		}
	})
	})
</script>
<script>
	$(document).ready(function() {
	$("#form1").validate({
		rules: {
			username: {
				required: true,
				email:true
			},
			password: {
				required: true
			}
		},
		messages: {
			username: {
				required: "Please Enter UserName",
				email: "Please Enter Email"
			},
			password: {
				required: "Please Enter Password"
			}
		}
	})
	})
</script>
@endsection