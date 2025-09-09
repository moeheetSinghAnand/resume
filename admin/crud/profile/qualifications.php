<?php
    session_start();
    require_once '../../dbconfig.php';
    if (!empty($_POST['qualification-ids']) && !empty($_FILES['file']['name']) ) {
        $ids = $_POST['qualification-ids'];
        $starts = $_POST['start-dates'];
        $ends = $_POST['end-dates'];
        $descs = $_POST['descriptions'];
        $certs = $_POST['certs'];
        $file_names= $_POST['files[]']; // file names yo not akshually files

        if (!empty($_FILES['file']['name'])) {
            $tmpName = $_FILES['file']['tmp_name'];
            $name = $_FILES['file']['name'];
            move_uploaded_file($tmpName, "uploads/$name"); 
        }

        foreach($ids as $i => $id){
            $insert = "INSERT INTO `user_qualifications` (`user_id`, `qualification_id`, `start-date`, `end-date`, `description`, `certification`, 
            `file_name,`, `created_at`) VALUES (".$_SESSION['user_id'].", '$starts[$i]', '$ends[$i]', '$desc[$i]', 
            '$certs[$i]', '$files[$i]', NOW())";

            if(!mysqli_query($conn,$insert)){
                echo json_encode (['status' => 'error', 'message' => mysqli_error($conn)]);
            }
        }
        echo json_encode (['status' => 'success']);
    }

?>