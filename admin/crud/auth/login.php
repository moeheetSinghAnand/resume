<?php
session_start();
require_once '../../dbconfig.php';
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `user_registrations` WHERE `email` = '{$email}' AND `password` = '{$password}'";
    $result = mysqli_query($conn, $select);
    

    if ($result && mysqli_num_rows($result) > 0) {
        echo json_encode(['status' => true]);
        $_SESSION['user_email'] = $email;

    } else {
        echo json_encode(['status' => false, 'error' => 'Invalid email or password']);
    }
} else {
    echo json_encode(['status' => false, 'error' => 'Something went wrong']);
}

?>