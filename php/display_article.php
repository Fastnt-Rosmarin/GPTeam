<?php
include 'db_connect.php';

$query = "SELECT * FROM articles";
$result = $conn->query($query);

while($row = $result->fetch_assoc()) {
    $title = $row['title'];
    $content = json_decode($row['content'], true);
    
    echo "<div class='article-container'>";
    echo "<h1>{$title}</h1>";
    echo "<form method='POST' action='delete_article.php'>";
    echo "<input type='hidden' name='article_id' value='" . $row['id'] . "'>";
    echo "<button type='submit' class='buttonClass'>Delete Article</button>";
    echo "</form>";

    echo "<h1>{$title}</h1>";
    
    foreach($content['blocks'] as $block) {
        switch($block['type']) {
            case 'header':
                echo "<h" . $block['data']['level'] . ">" . $block['data']['text'] . "</h" . $block['data']['level'] . ">";
                break;
                
            case 'paragraph':
                echo "<p>" . $block['data']['text'] . "</p>";
                break;
                
                case 'image':
                    echo "<img src='" . $block['data']['file']['url'] . "' alt='" . ($block['data']['caption'] ?? '') . "'>";
                    if(!empty($block['data']['caption'])) {
                        echo "<figcaption>" . $block['data']['caption'] . "</figcaption>";
                    }
                    break;
                
            case 'quote':
                echo "<blockquote>";
                echo "<p>" . $block['data']['text'] . "</p>";
                if(!empty($block['data']['caption'])) {
                    echo "<footer>" . $block['data']['caption'] . "</footer>";
                }
                echo "</blockquote>";
                break;
                
            case 'table':
                echo "<table border='1'>";
                foreach($block['data']['content'] as $row) {
                    echo "<tr>";
                    foreach($row as $cell) {
                        echo "<td>" . $cell . "</td>";
                    }
                    echo "</tr>";
                }
                echo "</table>";
                break;
        }
    }
    echo "<hr>";
}

$conn->close();
