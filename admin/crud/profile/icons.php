<?php
require_once '../../dbconfig.php';

if (isset($_FILES['file_name'])) {
    $temp = $_FILES['file_name']['tmp_name'];
    $fileName = $_FILES['file_name']['name'];
    $fileSize = $_FILES['file_name']['size'];
    $fileType = $_FILES['file_name']['type'];
    $dir = 'assets/project_header/'; 
    $newFileName = time() . '_' . $fileName;
    $dest = $dir . $newFileName;
    $insert = "INSERT INTO `user_social-icons` (`filename`) VALUE('fileName')";
    if (move_uploaded_file($temp, $dest)) {
        echo json_encode(['status' => true, 'file' => $newFileName]);
    } else {
        echo json_encode(['status' => false, 'error' => 'Failed to move the file.']);
    }
} else {
    echo json_encode(['status' => false, 'error' => 'No file uploaded or upload error.']);
}
?>
