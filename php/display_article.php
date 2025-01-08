<?php
include 'db_connect.php';
include 'include.php';

$query = "SELECT * FROM articles";
$result = $conn->query($query);
echo "<div class='article-container'>";
while($row = $result->fetch_assoc()) {
    $title = $row['title'];
    $content = json_decode($row['content'], true);
    
    echo "<div class='article-container'>";
    echo "<h1>{$title}</h1>";
    
    // Find first image for thumbnail
    $thumbnail = '';
    foreach($content['blocks'] as $block) {
        if($block['type'] === 'image') {
            $thumbnail = $block['data']['file']['url'];
            break;
        }
    }
    
    if($thumbnail) {
        echo "<img class='imageEditor thumbnail' src='" . $thumbnail . "' alt='" . $title . "'>";
    }
    
    echo "<div class='article-actions'>";
    echo "<a href='view_article.php?id=" . $row['id'] . "' class='buttonClass'>Read More</a>";
    echo "<form method='POST' action='delete_article.php'>";
    echo "<input type='hidden' name='article_id' value='" . $row['id'] . "'>";
    echo "<button type='submit' class='buttonClass'>Delete Article</button>";
    echo "<a href='edit_article.php?id=" . $row['id'] . "' class='buttonClass'>Edit Article</a>";
    echo "</form>";
    echo "</div>";
    
    echo "</div>";
    echo "<hr>";
}
echo "</div>";

$conn->close();
