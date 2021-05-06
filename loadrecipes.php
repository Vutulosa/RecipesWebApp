<?php

$category = $_REQUEST["icategory"];
$recipeName = $_REQUEST["irecipeName"];
$recipeName .= "%";

switch ($category) {
    case "Main Dish":
        $category = "maindish";
        break;
    case "Side Dish":
        $category = "sidedish";
        break;
    case "Light Meal":
        $category = "lightmeal";
        break;
    case "Starter":
        $category = "starter";
        break;
    case "Baking":
        $category = "baking";
        break;
    case "Baking":
        $category = "baking";
        break;
    case "Dessert":
        $category = "dessert";
        break;
    case "Soup":
        $category = "soup";
        break;
    case "Snack":
        $category = "snack";
        break;
    case "Other":
        $category = "other";
        break;
}

require_once 'api/login.php';
$conn = new mysqli($host, $user, $pass, $database);
/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

$stmt = $conn->stmt_init();

if ($category == "All Categories") {
    $stmt->prepare('SELECT `recipeID`, `rating`, `category`, `servings`, `cookingTime`, `recipeName`, `description`, `user`.`firstname`, user.`lastname`
FROM (recipe
INNER JOIN user
ON recipe.userID = user.userID)
WHERE `recipeName` LIKE ?;');
    
    $stmt->bind_param("s", $recipeName);
} else {
    $stmt->prepare('SELECT `recipeID`, `rating`, `category`, `servings`, `cookingTime`, `recipeName`, `description`, `user`.`firstname`, user.`lastname`
FROM (recipe
INNER JOIN user
ON recipe.userID = user.userID)
WHERE `category` = ? AND `recipeName` LIKE ?;');
    
    $stmt->bind_param("ss", $category, $recipeName);
}

$stmt->execute();

$result = $stmt->get_result();

$json_string = json_encode($result->fetch_all(MYSQLI_ASSOC), JSON_UNESCAPED_UNICODE);
echo $json_string;

$stmt->close();
$conn->close();
?>