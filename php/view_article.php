<?php
include 'db_connect.php';
include 'include.php';

if(isset($_GET['id'])) {
    $article_id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM articles WHERE id = ?");
    $stmt->bind_param("i", $article_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->fetch_assoc();
    
    if($row) {
        $title = $row['title'];
        $content = json_decode($row['content'], true);
        
        echo "<div class='article-container'>";
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
                    echo "<img class='imageEditor' src='" . $block['data']['file']['url'] . "' alt='" . ($block['data']['caption'] ?? '') . "'>";
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
        echo "<a href='pages.php' class='buttonClass'>Back to Articles</a>";
        echo "</div>";
    }
}

$conn->close();
