<form class="form-signin text-center">
    <h1 style="font-size:3.5em;"><i class="fas fa-user-circle"></i></h1>
    <div class="form-group">
        <label for="inputUsername" style="font-weight:600;">Username</label>
        <input type="username" class="form-control" id="inputUsername" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="inputPassword" style="font-weight:600;">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    	<button id="login" type="submit" class="btn btn-primary btn-lg" style="width:100%;">Sign In <i class="fas fa-sign-in-alt"></i></button>
    <div class="mt-3">
        <a>Don't have an account?</a> <a href="#" id="loadRegister">Register</a>
    </div>
</form>

<script>
	$("#loadRegister").click(function() {
		$(".card-body").load("registerform.php")
	});

	$("#login").click(function() {
		var username = $("#inputUsername").val();
		var password = $("#inputPassword").val();
		$(".card-body").load("loginaccount.php", {iusername:username, ipassword:password})
	});
</script>