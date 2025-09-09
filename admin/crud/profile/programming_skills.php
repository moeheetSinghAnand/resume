<?php
    session_start();
    require_once '../../dbconfig.php';

    if (!empty($_POST['ids'])) {

        $ids = $_POST['ids'];
        $measures = $_POST['measures'];
 
        foreach ($ids as $i => $id) {
            $measure = $measures[$i];
            $insert = "INSERT INTO `user_programming_languages`
                (`user_id`, `programming_language_id`, `user_efficiency`, `created_at`)
                VALUES (".$_SESSION['user_id'].", '$id', '$measure', NOW())";
            
            $result = mysqli_query($conn, $insert);
            if (!$result) {
                echo json_encode(['status' => 'error', 'message' => mysqli_error($conn)]);
            }
        }

        echo json_encode(['status' => 'success']);

    }
?>