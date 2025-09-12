<?php
    session_start();
    require_once '../../dbconfig.php';
    
    if (isset($_FILES['file_name'])) {
        $fileName = $_FILES['file_name']['name'];
        $tempname = $_FILES['file_name']['tmp_name'];
        $folder   = "../../assets/images/project_headers/" . $fileName;
        $cid = $_POST['project-category'];
        $title = $_POST['project-title'];
        $desc = $_POST['project-desc'];
        if (!empty($_POST['custom-category'])) { 
            // $insert= "INSERT INTO `categories` (`name`) VALUES(".$_POST['custom-category'].")";
            $insert = "INSERT INTO `categories` (`name`) VALUES('".$_POST['custom-category']."')";

            if (mysqli_query($conn, $insert)){
                $cid = mysqli_insert_id($conn);
            }
            else{
                echo json_encode(['status' => 'failure', 'message' => 'failed to upload']);
                exit;
            }
        }

        $check = "SELECT 1 FROM `user_projects` WHERE `user_id` = ".$_SESSION['user_id']." AND `category_id` = '$cid'";
        
        if(mysqli_num_rows(mysqli_query($conn,$check)) > 0){  // insert 

                if (!move_uploaded_file($tempname, $folder)) {
                    echo json_encode(['status' => 'failure', 'message' => 'failed to upload']);
                    exit;
                }
            $update = "UPDATE `user_projects`   SET `category_id` = '$cid',   `title` = '$title',   `description` = '$desc', `file_name` = '$fileName', `updated_at` = NOW()     WHERE `user_id` = ".$_SESSION['user_id']." AND `category_id` = '$cid'";
                if (!mysqli_query($conn, $update)){
                        echo json_encode(['status' => 'failure', 'message' => mysqli_error($conn)]);
                        exit;
                }
                else{
                    echo json_encode(['status' => 'success']);
                    exit;
                }
        }

        else{                    // update
                $insert = "INSERT INTO `user_projects` (`category_id` ,`user_id`, `title`, `description`, `file_name`, `created_at`) VALUES('$cid', ".$_SESSION['user_id'].", '$title', '$desc', '$fileName', NOW())"; 
                if (!move_uploaded_file($tempname, $folder)) {
                    echo json_encode(['status' => 'failure', 'message' => 'failed to upload']);       // code to move file
                    exit;
                }
                else{                                                                                          // else
                    if (!mysqli_query($conn, $insert)){
                        echo json_encode(['status' => 'failure', 'message' => mysqli_error($conn)]);
                        exit;
                    }
                    else{
                        echo json_encode(['status' => 'success',]); 
                        exit;
                    }
                }
            //  echo json_encode(['status' => 'already exists', 'message' => 'Project Already exist']);
        }
    }

?>