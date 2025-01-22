<?php
include 'db_connect.php';
include 'include.php';

$query = "SELECT * FROM items";
$result = $conn->query($query);

echo "<div class='items-container'>";
while($row = $result->fetch_assoc()) {
    $name = $row['name'];
    $main_image = $row['main_image'];
    
    echo "<div class='item-container'>";
    echo "<h2>{$name}</h2>";
    
    if($main_image) {
        echo "<img class='item-thumbnail' src='" . $main_image . "' alt='" . $name . "'>";
    }
    
    echo "<div class='item-actions'>";
    echo "<a href='view_item.php?id=" . $row['id'] . "' class='buttonClass'>View Details</a>";
    echo "<form method='POST' action='delete_item.php'>";
    echo "<input type='hidden' name='item_id' value='" . $row['id'] . "'>";
    echo "<button type='submit' class='buttonClass'>Delete Item</button>";
    echo "<a href='edit_item.php?id=" . $row['id'] . "' class='buttonClass'>Edit Item</a>";
    echo "</form>";
    echo "</div>";
    
    echo "</div>";
    echo "<hr>";
}
echo "</div>";

$conn->close();
