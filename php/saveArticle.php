<?php
$data = json_decode(file_get_contents("php://input"), true);

if (json_last_error() !== JSON_ERROR_NONE) {
    echo json_encode(['success' => 0, 'error' => 'Invalid JSON']);
    exit;
}

// Извлечение названия новости и содержимого статьи
$title = $data['title'];
$content = json_encode($data['content']);
$DataNew = date('Y-m-d'); // Текущая дата и время

// SQL запрос для вставки данных с учетом даты создания новости
//$sql = "INSERT INTO articles (title, content, DataNew) VALUES (?, ?, ?)";

//$stmt = $conn->prepare($sql);
//$stmt->bind_param("sss", $title, $content, $DataNew);

if ($stmt->execute()) {
    echo json_encode(['success' => 1, 'id' => $stmt->insert_id]);
} else {
    echo json_encode(['success' => 0, 'error' => $stmt->error]);
}

?>
