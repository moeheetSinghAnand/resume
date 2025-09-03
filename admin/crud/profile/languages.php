<?php
    // include 'dbconfig.php';
    //     if (isset($_POST['lang-ids'])) {
    //         $lang_ids = $_POST['lang-ids'];
    //         //$names = $_POST['ps-names'];
    //         $lang_measures = $_POST['lang-measures'];
    //         $us_id = 1;

    //         foreach ($lang_ids as $i => $id) {
    //             $measure = $lang_measures[$i];

    //             $insert = "INSERT INTO `language` (`user_id`, `programming_language_id`, `user_efficiency`, `created_at`) VALUES(
    //             '$us_id', '$id', '$measure', NOW())";

    //             if (!mysqli_query($conn, $insert)) {
    //                 echo "Error: " . mysqli_error($conn);
    //             }
    //         }
    //         echo "<script>alert('Skills inserted successfully!'); window.history.back();</script>";
    //     } else {
    //        echo "<script>alert('Failed to insert!');</script>";
    //     }

    
    require_once 'dbconfig.php';

    header('Content-Type: application/json');
    $us_id = 1;
    $data = json_decode(file_get_contents('php://input'), true);

    if (!empty($data['ids']) && !empty($data['measures']) && count($data['ids']) === count($data['measures'])) {
        $ids = $data['ids'];
        $measures = $data['measures'];
        foreach ($ids as $i => $id) {
            $measure = $measures[$i];

            $insert = "INSERT INTO `user_languages` (`user_id`, `language_id`, `user_efficiency`, `created_at`) VALUES(
            '$us_id', '$id', '$measure', NOW())";
            if (!mysqli_query($conn, $insert)) {
                echo "Error: " . mysqli_error($conn);
            }
        }
        echo json_encode(['success' => true]);
    } else {
        echo json_encode(['success' => false]);
    }

?>