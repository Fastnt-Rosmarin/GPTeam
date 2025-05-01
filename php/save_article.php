
<?php
include 'db_connect.php';

$data = json_decode(file_get_contents('php://input'), true);

$title = $data['title'];
$content = json_encode($data['content']);

$stmt = $conn->prepare("INSERT INTO article (title, content) VALUES (?, ?)");
$stmt->bind_param("ss", $title, $content);

if ($stmt->execute()) {
    echo json_encode(['status' => 'success', 'message' => 'Article saved successfully']);
} else {
    echo json_encode(['status' => 'error', 'message' => 'Failed to save article']);
}

$stmt->close();
$conn->close();
