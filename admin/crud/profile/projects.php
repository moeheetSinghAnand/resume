<?php
$us_id = 1;
require_once '../../dbconfig.php';
// Set your target directory
$uploadDir = __DIR__ . '/../../assets/images/project_headers/';
if (isset($_POST['proj-ids'])) {
    $ids = $_POST['proj-ids'];
    $titles = $_POST['proj-titles'];
    $descs = $_POST['proj-descriptions'];

    // Check for uploaded files
    $files = $_FILES['file-names'] ?? null;

    if (count($ids) === 0) {
        echo json_encode(['success' => false, 'message' => 'No projects submitted']);
        exit;
    }

    $success = true;

    foreach ($ids as $i => $id) {
        $title = $titles[$i];
        $desc = $descs[$i];
        $file_name = $files[$i];

        // Handle file upload
        // if ($files && isset($files['name'][$i]) && $files['error'][$i] === 0) {
        //     $originalName = basename($files['name'][$i]);
        //     $targetFile = $uploadDir . $originalName;

        //     if (move_uploaded_file($files['tmp_name'][$i], $targetFile)) {
        //         $file_name = $originalName;
        //     } else {
        //         $allSuccess = false;
        //         $errorMessage = "Failed to upload file: " . $originalName;
        //         break;
        //     }
        // }
        // Handle file upload
        if ($files && isset($files['name'][$i]) && $files['error'][$i] === 0) {
            $originalName = basename($files['name'][$i]);

            // Ensure unique filenames to avoid overwriting
            $uniqueName = time() . '_' . $originalName;

            $targetFile = $uploadDir . $uniqueName;

            if (move_uploaded_file($files['tmp_name'][$i], $targetFile)) {
                $file_name = $uniqueName; // save the unique filename in DB
            } else {
                $success = false;
                $errorMessage = "Failed to upload file: " . $originalName;
                break;
            }
        }
        

        $insert = "INSERT INTO `user_projects` (`category_id`, `user_id`, `title`, `description`, `filename`, `created_at`) 
                    VALUES ('$id', '$us_id', '$title', '$desc', '$file_name', NOW())";

        if (!mysqli_query($conn, $insert)) {
            $success = false;
            $errorMessage = mysqli_error($conn);
            break;
        }
    }

    if ($success) {
        echo json_encode(value: ['success' => true, 'message' => 'Projects submitted successfully']);
    } else {
        echo json_encode(['success' => false, 'message' => $errorMessage]);
    }
}
?>