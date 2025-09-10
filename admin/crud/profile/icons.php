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

    if (isset($_FILES['icons']['name'])) {
        foreach ($_FILES['icons']['name'] as $key => $filename) {
            $tempName = $_FILES['icons']['tmp_name'][$key];
            $folder   = "../../assets/sm_icons/" . $filename;

            if (!move_uploaded_file($tempName, $folder)) {
                echo json_encode(['status' => 'failed to upload ' . $filename]);
                exit;
            }
        }
    }
        if (!empty($_POST['file-names'])) {
        $names = $_POST['file-names'];
    
        foreach ($names as $i => $name){
            $insert ="INSERT INTO  `user_social_icons` (`user_id`, `filename`, `created_at`) VALUES(".$_SESSION['user_id'].", '$name', NOW()) ;";
            if (!mysqli_query($conn, $insert)){
                echo json_encode(['status' => 'failed', 'message' => mysqli_error($conn)]);
                exit;            
            }
        }
        echo json_encode(['status' => 'success']);
    }
?>
