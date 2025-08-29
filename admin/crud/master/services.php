<?php
require_once('dbconfig.php');

if (isset($_POST['name'])) {
    $name = $_POST['name'];

    $insert = "INSERT INTO `skill_list_types` (`name`, `created_at`) VALUES ('$name', NOW())";
    $result = mysqli_query($conn, $insert);
    if ($result) {
        echo json_encode([
            "status" => "success"
        ]);
    } else {
        echo json_encode([
            "status" => "error",
            "error" => mysqli_error($conn)
        ]);
    }
}
?>
