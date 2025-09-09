<?php
    session_start();
    require_once '../../dbconfig.php';
    if(isset($_POST['plan_ids'])){
        $pids = $_POST['plan_ids'];
        $prices = $_POST['prices'];
        $sids = $_POST['skill_ids'];
        $pops = $_POST['pops'];

        foreach($pids as $i => $id){
            // $insert = "INSERT INTO 'user_plan_prices' (`user_id`, `plan_type_id`, `price`, `skill_types`, `popularity_type`, `created_at`"
            // VALUES (".$_SESSION['user_id'].", '$i',  'prices[$i]', '$sids[$i]', $pops[i]);
            echo $insert = "INSERT INTO `user_plan_prices` (`user_id`,`plan_type_id`,`price`,`skill_types`,`popularity_type`,`created_at`) VALUES (".$_SESSION['user_id'].",'$id','".$prices[$i]."','".$sids[$i]."','".$pops[$i]."',NOW())";
            if(!mysqli_query($conn, $insert)){
                echo json_encode(['status' => 'failed', 'message' => mysqli_error($conn)]);
                return;
            }
        }
        echo json_encode(['status' => 'success']);
    }

?>