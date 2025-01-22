<?php
// Check if the request is a POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Check if a file was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $uploadDir = '../uploads/';
        $fileExtension = pathinfo($_FILES['image']['name'], PATHINFO_EXTENSION);
        $uniqueFileName = uniqid() . '_' . time() . '.' . $fileExtension;
        $targetPath = $uploadDir . $uniqueFileName;

        // Move the uploaded file to the uploads directory
        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetPath)) {
            // Return the URL of the uploaded image
            $imageUrl = 'http://' . $_SERVER['HTTP_HOST'] . '/uploads/' . $uniqueFileName;
            $response = [
                'success' => 1,
                'file' => [
                    'url' => $imageUrl
                ]
            ];
            echo json_encode($response);
        } else {
            $response = [
                'success' => 0,
                'message' => 'Error uploading file'
            ];
            echo json_encode($response);
        }
    } else {
        $response = [
            'success' => 0,
            'message' => 'No file uploaded'
        ];
        echo json_encode($response);
    }
} else {
    $response = [
        'success' => 0,
        'message' => 'Invalid request method'
    ];
    echo json_encode($response);
}
