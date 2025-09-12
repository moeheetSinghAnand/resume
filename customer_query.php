<?php

    if(!empty(isset($_POST['name']))){
        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $insert = "INSERT INTO `user_contacts` (`user_id`, `name`, `email`, `message`, NOW())";
        $result = mysqli_query($conn, $insert);
        
        if(!$result){
            echo json_encode(['status' => true]);
        }
        else{
            echo json_encode(['existsAlready' => true]);
        }
    }


?>