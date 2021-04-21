<?php

require_once 'api/login.php';
$conn = new mysqli($host, $user, $pass, $database);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$id = $_GET["id"];

$stmt = $conn->stmt_init();
$stmt->prepare('SELECT `ingredientName`, `quantity` FROM ingredient
    WHERE (`recipeID` = ?)');

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$json_string = json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_UNESCAPED_UNICODE);
echo $json_string;

$stmt->close();
$conn->close();
?>