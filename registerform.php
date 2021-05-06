<form class="form-signin text-center">
    <h1 style="font-size:3.5em;"><i class="fas fa-user-circle"></i></h1>
    <div id="alert-placeholder">

    </div>
    <div class="form-group">
        <label for="inputUsername" style="font-weight:600;">Username</label>
        <input type="username" class="form-control" id="inputUsername" placeholder="Username">
    </div>
    <div class="form-group">
        <label for="inputPassword" style="font-weight:600;">Password</label>
        <input type="password" class="form-control" id="inputPassword" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="inputEmail" style="font-weight:600;">E-mail</label>
        <input type="email" class="form-control" id="inputEmail" placeholder="E-mail">
    </div>
    <button id="register" type="submit" class="btn btn-success btn-lg" style="width:100%;">Register <i class="fas fa-edit"></i></button>
</form>

<script>

	$("#register").click(function() {
		var username = $("#inputUsername").val();
		var password = $("#inputPassword").val();
		var email = $("#inputEmail").val();
		$("#alert-placeholder").load("addaccount.php", {iusername:username, ipassword:password, iemail:email});
	}); 

</script>