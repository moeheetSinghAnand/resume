<?php
require_once 'dbconfig.php';
// if (isset($_POST['ps-ids'])) {
//     $ps_ids = $_POST['ps-ids'];
//     //$names = $_POST['ps-names'];
//     $measures = $_POST['ps-measures'];
//     $us_id = 1;

//     foreach ($ps_ids as $i => $id) {
//         // $name = $names[$i];
//         $measure = $measures[$i];

//         $insert = "INSERT INTO `user_programming_languages` (`user_id`, `programming_language_id`, `user_efficiency`, `created_at`) VALUES(
//         '$us_id', '$id', '$measure', NOW())";

//         if (!mysqli_query($conn, $insert)) {
//             echo "Error: " . mysqli_error($conn);
//         }
//     }
//     echo "<script>alert('Skills inserted successfully!'); window.history.back();</script>";
// } else {
//    echo "<script>alert('Failed to insert!');</script>";
// }
// Set header to ensure JSON response
header('Content-Type: application/json');
$us_id = 1;
$data = json_decode(file_get_contents('php://input'), true);
if (!empty($data['ids']) && !empty($data['measures']) && count($data['ids']) === count($data['measures'])) {
    $ids = $data['ids'];
    $measures = $data['measures'];
    foreach ($ids as $i => $id) {
        $measure = $measures[$i];

        $insert = "INSERT INTO `user_programming_languages` (`user_id`, `programming_language_id`, `user_efficiency`, `created_at`) VALUES(
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