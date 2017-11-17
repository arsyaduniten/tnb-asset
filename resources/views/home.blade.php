@extends('base')
@section('content')
	<nav>
		<div class="nav-wrapper red darken-2">
			<a href="#" class="brand-logo"><span><i class="material-icons"></i></span>TNB Asset Tracker</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li class="active"><a href="sass.html">Home</a></li>
				<li><a class="waves-effect waves-light red lighten-1 btn nav-btn" id="login">Login</a></li>
				<li><a class="waves-effect waves-light red darken-1 btn nav-btn z-depth-4" id="register"><i class="material-icons left">add_to_photos</i>Register</a></li>
			</ul>
		</div>
	</nav>

	<div class="container center-align">
		<div class="row padding-top">
	      <div class="col s6 offset-s3">
	        <img class="responsive-img" src="/images/tnb.png">
	      </div>
	    </div>

	    <div class="row">
	      <div class="col s6 offset-s3">
	      	<div class="box red darken-2">
	          <form method="POST" action="/register" class="col s12 hide" id="register-form">
	          	{{ csrf_field() }}
			      <div class="row">
			        <div class="input-field col s12">
			          <input placeholder="Placeholder" name="username" type="text" class="validate" required>
			          <label for="username">Username</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input type="password" class="validate" name="password" required>
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input type="password" class="validate" name="password_confirmation" required>
			          <label for="password_confirmation">Password Confirmation</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="email" type="email" class="validate" name="email" required>
			          <label for="email">Email</label>
			        </div>
			      </div> 
			      <div class="row">
			        <div class="input-field col s12">
			          <input type="text" class="validate" name="position" required>
			          <label for="position">Position</label>
			        </div>
			      </div>
			      <div class="input-field inline">
		            <button class="btn waves-effect waves-light red darken-2" type="submit" name="action">Register
						<i class="material-icons right">send</i>
					</button>
					<button class="btn waves-effect waves-light red darken-2" type="reset" name="action">Reset
					</button>
		          </div>
			  </form>

			  <form method="POST" action="/login" class="col s12" id="login-form">
	          	{{ csrf_field() }}
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="username" type="text" class="validate" name="username" required>
			          <label for="username">Username</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="input-field col s12">
			          <input id="password" type="password" class="validate" name="password" required>
			          <label for="password">Password</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="col s12">
			          <div class="input-field inline">
			            <button class="btn waves-effect waves-light red darken-2" type="submit" name="action">Login
							<i class="material-icons right">send</i>
						</button>
			          </div>
			        </div>
			      </div>
			  </form>
			  <div class="col s12">
			  	@include('layouts.formerrors')
			  </div>
			</div>
	      </div>
	    </div>

	</div>

        


@endsection

@section('script')
<script type="text/javascript">
	$("#register").click(function(){
		$("#register-form").removeClass("hide");
		$("#login-form").addClass("hide");
	});

	$("#login").click(function(){
		$("#login-form").removeClass("hide");
		$("#register-form").addClass("hide");
	});

	$(document).ready(function(){
		@if(session()->has('activeTab'))
		$("{{ session('activeTab') }}").click();
		@endif
	});
</script>
@endsection