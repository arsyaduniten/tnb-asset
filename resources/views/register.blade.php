@extends('base')
@section('content')

<div class="container">
	<div class="columns">
		<div class="column">
			<form action="/register" method="POST">
				<div class="field is-grouped">
					<div class="label-input">
			            <label class="label label-name">Staff Name</label>
			            <div class="control">
			              <input class="input" type="text" name="name">
			            </div>
			        </div>
					<div class="label-input">
						<label class="label label-name">Email</label>
						<div class="control">
						  <input class="input" type="text" placeholder="example@example.com" name="email">
						</div>
					</div>
				</div>
				<div class="field">
					<div class="label-input">
			            <label class="label label-name">Username</label>
			            <div class="control">
			              <input class="input" type="text" name="username">
			            </div>
			        </div>
				</div>
				<div class="field">
					<div class="label-input">
			            <label class="label label-name">Password</label>
			            <div class="control">
			              <input class="input" type="text" name="password">
			            </div>
			        </div>
				</div>
				<div class="field">
					<div class="label-input">
			            <label class="label label-name">Position</label>
			            <div class="control">
			              <input class="input" type="text" name="position">
			            </div>
			        </div>
				</div>
				<input class="button is-success" type="submit" name="register" value="Register">
				<input class="button" type="reset" name="reset" value="Reset">
			</form>
		</div>
		<div class="column"></div>
	</div>
</div>


@endsection

@section('script')
<script type="text/javascript">

</script>
@endsection