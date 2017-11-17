@extends('base')
@section('content')

	<nav class="z-depth-2">
		<div class="nav-wrapper red darken-2">
			<a href="#" data-activates="slide-out" class="brand-logo"><span><i class="material-icons">menu</i></span>TNB Asset Tracker</a>
			<ul id="nav-mobile" class="right hide-on-med-and-down">
				<li class="active"><a href="sass.html">{{ $user->username }}</a></li>
				<li><a href="/logout" class="waves-effect waves-light red lighten-1 btn nav-btn" id="logout">Logout</a></li>
			</ul>
		</div>
	</nav>

<ul id="slide-out" class="side-nav">
    <li><div class="user-view center-align">
      <div class="background z-depth-1">
        
      </div>
      <a href="#!user"><img class="circle" src="/images/user.svg"></a>
      <a href="#!name"><span class="white-text name">{{ $user->username }}</span></a>
      <a href="#!email"><span class="white-text email">{{ $user->email }}</span></a>
    </div></li>
	    <ul class="collection">
	      <li class="collection-item"><a class="waves-effect waves-light blue-grey lighten-5 btn z-depth-3">View Asset</a></li>
	      <li class="collection-item"><a id="new-asset" class="waves-effect waves-light blue-grey lighten-5 btn z-depth-3">Add New Asset</a></li>
	      <li class="collection-item"><a class="waves-effect waves-light blue-grey lighten-5 btn z-depth-3">Update Asset</a></li>
	      <li class="collection-item"><a class="waves-effect waves-light blue-grey lighten-5 btn z-depth-3">Remove Asset</a></li>
	  	</ul>
  </ul>

  <div class="row">
  	<div class="col s6 offset-s3">
  		<div class="container">
			<form method="POST" action="/add-new-asset" class="col s12" id="login-form">
		  	{{ csrf_field() }}
		  	  <h1>Add New Asset</h1>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="name" type="text" class="validate" name="name" required>
		          <label for="name">Name</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="func_location" type="text" class="validate" name="func_location" required>
		          <label for="func_location">Functional Location</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="ops_area" type="text" class="validate" name="ops_area" required>
		          <label for="ops_area">Operational Area</label>
		        </div>
		      </div>
		      <div class="row">
		        <div class="input-field col s12">
		          <input id="location" type="text" class="validate" name="location" required>
		          <label for="location">Location</label>
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
	  </div>
  	</div>
  </div>




@endsection	

@section('script')
<script type="text/javascript">
	 // Initialize collapse button
  $(".brand-logo").sideNav();
  // Initialize collapsible (uncomment the line below if you use the dropdown variation)
  //$('.collapsible').collapsible();
  $("#new-asset").click(function(){
  	$("#new-asset-form").removeClass("hide");
  });
        
</script>

@endsection