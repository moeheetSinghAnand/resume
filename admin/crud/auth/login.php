<?
require_once 'dbconfig.php';

if (isset($_POST['email'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select = "SELECT * FROM `user_registrations` WHERE `email` = '{$email}' AND `password` = '{$password}'";
    $result = mysqli_query($conn, $select);

    if ($result) {
        echo json_encode(['status' => true]);
    } else {
        echo json_encode(['error' => 'This user does not exist']);
    }
} 
else {
    echo json_encode(['error' => 'Something went wrong']);
}

?>