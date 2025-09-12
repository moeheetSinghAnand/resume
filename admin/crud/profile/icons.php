<?php
require_once '../../dbconfig.php';
session_start();

// if (isset($_FILES['file_name'])) {
//     $temp = $_FILES['file_name']['tmp_name'];
//     $fileName = $_FILES['file_name']['name'];
//     $fileSize = $_FILES['file_name']['size'];
//     $fileType = $_FILES['file_name']['type'];
//     $dir = 'assets/project_header/'; 
//     $newFileName = time() . '_' . $fileName;
//     $dest = $dir . $newFileName;
//     $insert = "INSERT INTO `user_social-icons` (`filename`) VALUE('fileName')";
//     if (move_uploaded_file($temp, $dest)) {
//         echo json_encode(['status' => true, 'file' => $newFileName]);
//     } else {
//         echo json_encode(['status' => false, 'error' => 'Failed to move the file.']);
//     }
// } else {
//     echo json_encode(['status' => false, 'error' => 'No file uploaded or upload error.']);
//}
    // if(isset($_FILES['icons']['names'])){
    //     foreach(){
    //         $filename = $_FILES['icon']['name'];
    //         $tempName = $_FILES['icon']['tmp_name'];
    //         $folder = "../../assets/" . $filename;
    //         if(!move_uploaded_file($tempName, $folder)){
    //             echo json_encode(['status' => 'failed to uploaded']);
    //         }
    
    //     }
    // }

    if (isset($_FILES['file_icon'])){
        $fileName = $_FILES['file_icon']['name'];
        $tempname = $_FILES['file_icon']['tmp_name'];
        $folder   = "../../assets/images/sm_icons/" . $fileName;
        $check = "SELECT * FROM `user_social_icons` WHERE `user_id` = ".$_SESSION['user_id']." AND `filename` = '$fileName'";
        if(mysqli_num_rows(mysqli_query($conn, $check)) > 0){
            echo json_encode(['status' => 'already exists', 'message' => 'Icon already exists']);
            exit;
        }
        else{
            if(!move_uploaded_file($tempname, $folder)){
                echo json_encode(['status' => 'failure', 'message' => 'File failed To upload']);
                return;
            }
         $insert = "INSERT INTO `user_social_icons` (`user_id`, `filename`, `created_at`) 
                    VALUES(" .$_SESSION['user_id']. ", '" . $fileName . "', NOW())";
        
        if (!mysqli_query($conn,$insert)){
            echo json_encode(['status' => 'failure', 'message' => mysqli_error($conn)]);
            return;
        }
            echo json_encode([ 'status' => 'success']);
        }
    }

?>
