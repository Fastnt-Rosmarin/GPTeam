<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['article_id'])) {
    $article_id = $_POST['article_id'];
    
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
