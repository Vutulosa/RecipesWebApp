<?php
$username = $_REQUEST['iusername'];
$password = $_REQUEST['ipassword'];

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
    
$stmt = $conn->stmt_init();
$stmt->prepare('SELECT `password` FROM recipebook.user WHERE username = ?');

$stmt->bind_param("s", $username);

$stmt->execute();

$result = $stmt->get_result();

$returnedPassword = $result->fetch_row();

if( $returnedPassword[0] == $password ) {
    session_start(); // start the session
    $_SESSION["username"] = $username; // set session variables
}

$stmt->close();
$conn->close();
?>