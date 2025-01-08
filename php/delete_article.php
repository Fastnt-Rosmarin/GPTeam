<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['article_id'])) {
    $article_id = $_POST['article_id'];
    
    // First get the article content to find images
    $stmt = $conn->prepare("SELECT content FROM articles WHERE id = ?");
    $stmt->bind_param("i", $article_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $article = $result->fetch_assoc();
    
    // Parse JSON content
    $content = json_decode($article['content'], true);
    
    // Find and delete images
    foreach($content['blocks'] as $block) {
        if($block['type'] === 'image') {
            $imageUrl = $block['data']['file']['url'];
            // Convert URL to local file path
            $imagePath = str_replace('http://localhost:3000/uploads/', '../uploads/', $imageUrl);
            if(file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
    }
    
    // Now delete the article
    $stmt = $conn->prepare("DELETE FROM articles WHERE id = ?");
    $stmt->bind_param("i", $article_id);
    
    if ($stmt->execute()) {
        header("Location: pages.php");
    } else {
        echo "Error deleting article";
    }
    
    $stmt->close();
    $conn->close();
}
