<?php
require_once('dbconfig.php');

if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $select = "SELECT * FROM `categories` WHERE name = '$name'";
    $result = mysqli_query($conn, $select);
    if (mysqli_num_rows($result) != 0) {
        echo json_encode([
            "status" => "error",
            "error" => "Category already exists"
        ]);

    } else {
        // echo json_encode([
        //     "status" => "error",
        //     "error" => mysqli_error($conn)
        // ]);
        $insert = "INSERT INTO `categories` (`name`, `created_at`) VALUES ('$name', NOW())";
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
}

    if (isset($_POST['id'])) {
        $name = $_POST['name'];
        $update = "UPDATE `categories` SET `name` = '$name' WHERE `id` = '{$_POST['id']}'";
        $result = mysqli_query($conn, $update);
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