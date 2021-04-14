<?php

require_once 'api/login.php';
$conn = new mysqli($host, $user, $pass, $database);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$query = "SELECT `recipeID`, `rating`, `category`, `servings`, `cookingTime`, `recipeName`, `description`, `user`.`firstname`, user.`lastname`
FROM (recipe
INNER JOIN user
ON recipe.userID = user.userID);";
$result = $conn->query($query);
$all_rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
$json_string = json_encode($all_rows, JSON_UNESCAPED_UNICODE);
echo $json_string;

/* close connection */
$conn->close();

?>