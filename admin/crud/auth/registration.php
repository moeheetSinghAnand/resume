<?php
require_once '../../dbconfig.php';

if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $token = md5($password);

    $select = "SELECT * FROM `user_registrations` WHERE `email` = '{$email}'";
    $check = mysqli_query($conn,$select);
    if($check && mysqli_num_rows($check) > 0){  
        $error = "The user already exists";
        echo json_encode(["status" => "error", "error" => $error]);
        exit;
    }
    else{
        $insert = "INSERT INTO `user_registrations` (`first_name`, `last_name`, `user_name`, `email`, `token`, `password`, `created_at`) VALUES('$first_name', '$last_name', '".$first_name.'_'.$last_name."', 
        '$email', '$token' , '$password', NOW())";
        $result = mysqli_query($conn, $insert);
        if (!$result) {
            $error = mysqli_error($conn);
            echo json_encode(["status" => "error", "error" => $error]);
            exit;
        } else {
            echo json_encode(["status" => "success"]);
        }
    }
}
?>