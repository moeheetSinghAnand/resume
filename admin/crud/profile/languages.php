<?php
    session_start();
    require_once '../../dbconfig.php';
    // $data = json_decode(file_get_contents('php://input'), true);
    // if (!empty($data['ids']) && !empty($data['measures']) && count($data['ids']) === count($data['measures'])) {
    //     $ids = $data['ids'];
    //     $measures = $data['measures'];
    //     foreach ($ids as $i => $id) {
    //         $measure = $measures[$i];

    //         $insert = "INSERT INTO `user_languages` (`user_id`, `language_id`, `user_efficiency`, `created_at`) VALUES(
    //         '{$_SESSION['user_id']}', '$id', '$measure', NOW())";
    //         if (!mysqli_query($conn, $insert)) {
    //             echo "Error: " . mysqli_error($conn);
    //         }
    //     }
    //     echo json_encode(value: ['success' => true]);
    // } else {
    //     echo json_encode(['success' => false]);
    // }

    if (!empty($_POST['ids'])){
        $ids = $_POST['ids'];
        $measures = $_POST['measures'];

        foreach ($ids as $i => $id){
            $measure = $measures[$i];
            $insert = "INSERT INTO `user_languages`  (`user_id`, `language_id`, `user_efficiency`, `created_at`)
                VALUES (".$_SESSION['user_id']." , '$id', '$measure', NOW())";

            if(!mysqli_query($conn,$insert)){
                echo json_encode (['status' => 'error', 'message' => mysqli_error($conn)]);
            }
        }
        echo json_encode (value: ['status' => 'success']);
    }

?>