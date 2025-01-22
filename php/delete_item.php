<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['item_id'])) {
    $item_id = $_POST['item_id'];
    
    // Get item data to delete images
    $stmt = $conn->prepare("SELECT main_image, gallery_imgs FROM items WHERE id = ?");
    $stmt->bind_param("i", $item_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $item = $result->fetch_assoc();
    
    // Delete main image
    $mainImagePath = str_replace('http://localhost:3000/uploads/', '../uploads/', $item['main_image']);
    if(file_exists($mainImagePath)) {
        unlink($mainImagePath);
    }
    
    // Delete gallery images
    $galleryImages = json_decode($item['gallery_imgs'], true);
    if($galleryImages) {
        foreach($galleryImages as $image) {
            $imagePath = str_replace('http://localhost:3000/uploads/', '../uploads/', $image);
            if(file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }
    
    // Delete the item from database
    $stmt = $conn->prepare("DELETE FROM items WHERE id = ?");
    $stmt->bind_param("i", $item_id);
    
    if ($stmt->execute()) {
        header("Location: display_items.php");
    } else {
        echo "Error deleting item";
    }
    
    $stmt->close();
    $conn->close();
}
