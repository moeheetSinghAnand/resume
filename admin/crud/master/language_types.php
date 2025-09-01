<?php
require_once('dbconfig.php');

if (isset($_POST['id']) && isset($_POST['name'])) {
    // EDIT
    $id = (int) $_POST['id'];
    $name = $_POST['name'];
    $update = "UPDATE `language_types` SET `name` = '$name' WHERE `id` = $id";
    $result = mysqli_query($conn, $update);
    if ($result) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);
    }
} elseif (isset($_POST['name'])) {
    $name = $_POST['name'];
    $select = "SELECT * FROM `language_types` WHERE name = '$name'";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) != 0) {
        echo json_encode([
            "status" => "error",
            "error" => "Language already exists"
        ]);
    } else {
        $insert = "INSERT INTO `language_types` (`name`, `created_at`) VALUES ('$name', NOW())";
        $result = mysqli_query($conn, $insert);
        if ($result) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);
        }
    }
} else {
    echo json_encode(['status' => 'error', 'error' => 'Invalid request']);
}
?>