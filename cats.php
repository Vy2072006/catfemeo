<?php
include 'db.php';

$stmt = $pdo->query("SELECT * FROM cats");
$cats = $stmt->fetchAll();

foreach ($cats as $cat) {
    echo "<h3>" . htmlspecialchars($cat['name']) . "</h3>";
    echo "<p>Breed: " . htmlspecialchars($cat['breed']) . "</p>";
    echo "<p>Age: " . htmlspecialchars($cat['age']) . " years</p>";
    echo "<p>Description: " . htmlspecialchars($cat['description']) . "</p>";
    echo "<img src='" . htmlspecialchars($cat['image']) . "' alt='" . htmlspecialchars($cat['name']) . "'>";
}
