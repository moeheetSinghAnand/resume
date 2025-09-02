<?php
require_once('dbconfig.php');

if (isset($_POST['id']) && isset($_POST['table'])) {
    $id = (int) $_POST['id'];
    $table = $_POST['table'];
    $delete = "DELETE FROM `$table` WHERE `id` = $id";
    $result = mysqli_query($conn, $delete);

    if ($result) {
        echo json_encode(['status' => 'success']);
    } else {
        echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);
    }
} else {
    echo json_encode(['status' => 'error', 'error' => 'Invalid request']);
}
?>