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
$stmt->prepare('SELECT `recipe`.`userID`, `recipeID`, `rating`, `category`, `servings`, `cookingTime`, `recipeName`, `instructions`, `user`.`firstname`, user.`lastname`
    FROM (recipe
        INNER JOIN user
        ON recipe.userID = user.userID)
    WHERE (`recipeID` = ?)');

$stmt->bind_param("i", $id);

$stmt->execute();

$result = $stmt->get_result();

$json_string = json_encode($result->fetch_assoc(), JSON_UNESCAPED_UNICODE);
echo $json_string;

$stmt->close();
$conn->close();
?>