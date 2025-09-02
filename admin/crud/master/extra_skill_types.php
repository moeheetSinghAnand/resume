<?php
// require_once('dbconfig.php');

// if (isset($_POST['id']) && isset($_POST['name'])) {
//     // EDIT
//     $id = (int) $_POST['id'];
//     $name = $_POST['name'];
//     $update = "UPDATE `extra_skill_types` SET `name` = '$name' WHERE `id` = $id";
//     $result = mysqli_query($conn, $update);
//     if ($result) {
//         echo json_encode(['status' => 'success']);
//     } else {
//         echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);
//     }
// } elseif (isset($_POST['name'])) {
//     // ADD
//     $name = $_POST['name'];
//     $select = "SELECT * FROM `extra_skill_types` WHERE name = '$name'";
//     $result = mysqli_query($conn, $select);
//     if (mysqli_num_rows($result) != 0) {
//         echo json_encode([
//             "status" => "error",
//             "error" => "Language already exists"
//         ]);
//     } else {
//         $insert = "INSERT INTO `extra_skill_types` (`name`, `created_at`) VALUES ('$name', NOW())";
//         $result = mysqli_query($conn, $insert);
//         if ($result) {
//             echo json_encode(['status' => 'success']);
//         } else {
//             echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);
//         }
//     }
// } else {
//     echo json_encode(['status' => 'error', 'error' => 'Invalid request']);
//}

require_once('dbconfig.php');

if (isset($_POST['id']) && isset($_POST['name'])) {
    // EDIT
    $id = (int) $_POST['id'];
    $name = $_POST['name'];

    // Check if another record already has this name
    $check = "SELECT * FROM `extra_skill_types` WHERE name = '$name' AND id != $id";
    $check_result = mysqli_query($conn, $check);

    if (mysqli_num_rows($check_result) > 0) {
        echo json_encode([
            "status" => "error",
            "error" => "Extra Skill already exists"
        ]);
    } else {
        $update = "UPDATE `extra_skill_types` SET `name` = '$name' WHERE `id` = $id";
        $result = mysqli_query($conn, $update);
        if ($result) {
            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);
        }
    }

} elseif (isset($_POST['name'])) {
    // ADD
    $name = $_POST['name'];
    $select = "SELECT * FROM `extra_skill_types` WHERE name = '$name'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) != 0) {
        echo json_encode([
            "status" => "error",
            "error" => "Exta Skill already exists"
        ]);
    } else {
        $insert = "INSERT INTO `extra_skill_types` (`name`, `created_at`) VALUES ('$name', NOW())";
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