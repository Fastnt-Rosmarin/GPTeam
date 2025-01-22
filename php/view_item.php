<?php
include 'db_connect.php';
include 'include.php';

if(isset($_GET['id'])) {
    $item_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM items WHERE id = ?");
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();
    
    if($item) {
        echo "<div class='item-container'>";
        echo "<h1>{$item['name']}</h1>";
        
        // Display main image
        if($item['main_image']) {
            echo "<img class='item-main-image' src='{$item['main_image']}' alt='{$item['name']}'>";
        }
        
        // Display item data
        $data = json_decode($item['data'], true);
        echo "<div class='item-stats'>";
        foreach($data as $stat) {
            echo "<div class='stat-line'>";
            echo "<span class='stat-key'>{$stat['key']}:</span>";
            echo "<span class='stat-value'>{$stat['value']}</span>";
            echo "</div>";
        }
        echo "</div>";
        
        // Display type
        echo "<div class='item-type'>Type: {$item['type']}</div>";
        
        // Display gallery
        if($item['gallery_imgs']) {
            $gallery = json_decode($item['gallery_imgs'], true);
            echo "<div class='item-gallery'>";
            echo "<h2>Gallery</h2>";
            foreach($gallery as $img) {
                echo "<img src='{$img}' alt='Gallery image' class='gallery-image'>";
            }
            echo "</div>";
        }
        
        echo "<a href='display_items.php' class='buttonClass'>Back to Items</a>";
        echo "</div>";
    }
}

$conn->close();
