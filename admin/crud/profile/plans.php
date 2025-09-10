<?php
    session_start();
    require_once '../../dbconfig.php';

     if(isset($_POST['pid'])){
        // $check = "SELECT 1 FROM `user_plan_prices` WHERE `user_id` = ".$_SESSION['user_id']." AND `plan_type_id` = ".$_POST['pid']." AND `skill_types` = ".$_POST['sid']." ";                                                                                       
        $check = "SELECT 1 FROM `user_plan_prices` 
          WHERE `user_id` = ".$_SESSION['user_id']." 
          AND `plan_type_id` = ".$_POST['pid']." 
          AND `skill_types` = ".$_POST['sid'];

        if(mysqli_num_rows(mysqli_query($conn, $check)) > 0){
            echo json_encode(['status' => 'already exists', 'message' => 'Plan already exists']);
            return;
        }
        else {
            echo json_encode(['status' => 'success']);
        }
     }
    if(isset($_POST['plan_ids'])){
        $pids = $_POST['plan_ids'];
        $prices = $_POST['prices'];
        $sids = $_POST['skill_ids'];
        $pops = $_POST['pops'];
        
        foreach($pids as $i => $id){
            // $insert = "INSERT INTO 'user_plan_prices' (`user_id`, `plan_type_id`, `price`, `skill_types`, `popularity_type`, `created_at`"
            // VALUES (".$_SESSION['user_id'].", '$i',  'prices[$i]', '$sids[$i]', $pops[i]);
            $insert = "INSERT INTO `user_plan_prices` (`user_id`,`plan_type_id`,`price`,`skill_types`,`popularity_type`,`created_at`) VALUES (".$_SESSION['user_id'].",'$id','".$prices[$i]."','".$sids[$i]."','".$pops[$i]."',NOW())";
            if(!mysqli_query($conn, $insert)){
                echo json_encode(['status' => 'failed', 'message' => mysqli_error($conn)]);
                return;
            }
        }
        echo json_encode(['status' => 'success']);
    }

?>