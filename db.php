<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cat_cafe";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT item_name, price, description FROM menu_items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h3>" . $row["item_name"] . "</h3>";
        echo "<p>Price: $" . $row["price"] . "</p>";
        echo "<p>Description: " . $row["description"] . "</p>";
    }
} else {
    echo "0 results";
}
$conn->close();
