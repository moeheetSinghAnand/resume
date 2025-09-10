<?php
session_start();
require_once '../../dbconfig.php';

    if (isset($_POST['id'])) {  // check b4 adding rows
        $select = "SELECT 1 FROM `user_skills_to_show` WHERE `skill_list_id` = ".$_POST['id']." AND `user_id` = ".$_SESSION['user_id']." ";
        if(mysqli_num_rows(mysqli_query($conn, $select)) > 0){
            echo json_encode(['status' => 'already exists', 'message' => 'Skill list already exists']);
            return;
        }
        else {
            echo json_encode(['status' => 'success']);
        }
    }

    if (isset($_POST['skill-list-ids'])) {
        $ids = $_POST['skill-list-ids'];

        foreach ($ids as $i => $id) {
            $insert = "INSERT INTO `user_skills_to_show` (`user_id`, `skill_list_id`, `created_at`) 
                    VALUES (" . $_SESSION['user_id'] . ", '$id', NOW())";
            if (!mysqli_query($conn, $insert)) {
                echo json_encode(['status' => 'error', 'message' => mysqli_error($conn)]);
                exit; // stop if error happens
            }
        }
        echo json_encode(['status' => 'success']);
    }
?>