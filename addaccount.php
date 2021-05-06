<?php
$username = $_REQUEST['iusername'];
$password = $_REQUEST['ipassword'];
$email = $_REQUEST['iemail'];

$salt1 = "7B3";
$salt2 = "6SF";
$salted_pass = $salt1.$password.$salt2;
$hash_pass = hash('ripemd128', $salted_pass);

require_once 'api/login.php';
$conn = new mysqli($host, $user, $pass, $database);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

if($stmt = $conn->prepare("INSERT INTO `recipebook`.`user` (`username`, `password`, `email`, `permission`) 
VALUES (?, ?, ?, 'user');")) {
$stmt->bind_param("sss", $username, $hash_pass, $email);
$stmt->execute();

$error = $stmt->errno;

if ($error == 1062) {
    echo '<div class="alert alert-danger" role="alert">Account already exists!</div>';
} else {
    echo '<div class="alert alert-success" role="alert">Account Created. <a href="#" class="alert-link" id="loadLogin">Login In!</a></div>';
    echo '<script>$("#loadLogin").click(function() {$(".card-body").load("loginform.php")});</script>';
}

$stmt->close();
} else {
    echo '<div class="alert alert-danger" role="alert">Something went wrong!</div>';
}
?>