<?php
       
       session_start();
        require_once '../../dbconfig.php';
        $data = json_decode(file_get_contents("php://input"), true);

        if(isset($data['ids']) && isset($data['measures'])) {
            $ids = $data['ids'];         
            $measures = $data['measures']; 

            foreach ($ids as $i => $id) {
                $measure = $measures[$i];
                $insert = "INSERT INTO `user_programming_languages` (`user_id`, `programming_language_id`, `user_efficiency`, `created_at`) 
                VALUES   ('{$_SESSION['user_id']}', '$id', '$measure',  NOW())";
                if(!mysqli_query($conn,$insert)){
                    echo json_encode(['status' => 'false', 'message' => mysqli_error($conn)]);
                    exit;
                }
            }
            echo json_encode(value: ['status' => 'success']);
        }
?>