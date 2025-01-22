<?php
include 'db_connect.php';
header('Content-Type: application/json');

$data = json_decode(file_get_contents('php://input'), true);

if ($data) {
    $name = $data['title'];
    $main_image = $data['main_image'];
    $type = $data['type'];
    $item_data = json_encode($data['lines']);
    $gallery_imgs = json_encode($data['gallery']);

    // Check if we're updating an existing item
    if (isset($data['itemId'])) {
        $sql = "UPDATE items SET name = ?, main_image = ?, data = ?, type = ?, gallery_imgs = ? WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssi", $name, $main_image, $item_data, $type, $gallery_imgs, $data['itemId']);
    } else {
        // Create new item
        $sql = "INSERT INTO items (name, main_image, data, type, gallery_imgs) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $name, $main_image, $item_data, $type, $gallery_imgs);
    }

    if ($stmt->execute()) {
        $response = [
            'success' => true,
            'message' => 'Item saved successfully'
        ];
    } else {
        $response = [
            'success' => false,
            'message' => 'Database error: ' . $conn->error
        ];
    }
} else {
    $response = [
        'success' => false,
        'message' => 'Invalid data received'
    ];
}

echo json_encode($response);
exit;
