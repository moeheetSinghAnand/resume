<?php
session_start();
require_once '../../dbconfig.php';

$response = ['status' => true, 'errors' => []];

if (isset($_POST['first_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user-name'];
    $password = $_POST['password1'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $personal_no = $_POST['personal_no'];
    $support_no = $_POST['support_no'];
    $office_no = $_POST['office_no'];
    $residence = $_POST['residence'];
    $street = $_POST['street'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $country = $_POST['country'];
    $telegram = $_POST['telegram_id'];
    $skype = $_POST['skype_id'];
    $age = $_POST['age'];
    $experience = $_POST['experience'];
    $projects_completed = $_POST['projects_completed'];
    $customer_count = $_POST['customer_count'];
    $award_count = $_POST['award_count'];

    $check = "SELECT `id` FROM `user_profiles` WHERE `user_id` = '{$_SESSION['user_id']}'"; // check first in profiles
    $result = mysqli_query($conn, $check);
    if (mysqli_num_rows($result) > 0) {
        $update = "
            UPDATE `user_registrations` SET
                `first_name`    = '$first_name',
                `last_name`     = '$last_name',
                `user_name`     = '$user_name',
                `email`         = '$email',
                `password`      = '$password',
                `country`       = '$country',
                `street`        = '$street',
                `pincode`       = '$pincode',
                `telegram`      = '$telegram',
                `skype`         = '$skype',
                `personal_no`   = '$personal_no',
                `support_no`    = '$support_no',
                `office_no`     = '$office_no',
                `updated_at`    = NOW()
            WHERE `id` = '{$_SESSION['user_id']}'
        ";

        if (!mysqli_query($conn, $update)) {
            $response['status'] = 'success';
            $response['error'] = mysqli_error($conn);
            echo json_encode($response);
            exit;
        }

        $update_profile = "
            UPDATE `user_profiles` SET
                `experience`          = '$experience',
                `projects_completed`  = '$projects_completed',
                `customer_count`      = '$customer_count',
                `award_count`         = '$award_count',
                `residence`           = '$residence',
                `city`                = '$city',
                `state`               = '$state',
                `pincode`             = '$pincode',
                `dob`                 = '$age',
                `updated_at`          = NOW()
            WHERE `user_id` = '{$_SESSION['user_id']}'
        ";

        if (!mysqli_query($conn, $update_profile)) {
            $response['status'] = 'success';
            $response['error'] = mysqli_error($conn);
            echo json_encode($response);
            exit;
        }

    } else {
        $insert = "
            INSERT INTO `user_registrations` (
                `first_name`, `last_name`, `user_name`,
                `email`, `password`,
                `country`, `street`, `pincode`,
                `telegram`, `skype`,
                `personal_no`, `support_no`, `office_no`,
                `created_at`
            ) VALUES (
                '$first_name', '$last_name', '$user_name',
                '$email', '$password',
                '$country', '$street', '$pincode',
                '$telegram', '$skype',
                '$personal_no', '$support_no', '$office_no',
                NOW()
            )
        ";

        if (!mysqli_query($conn, $insert)) {
            $response['status'] = 'success';
            $response['error'] = mysqli_error($conn);
            echo json_encode($response);
            exit;
        }

        $insert_profile = "
            INSERT INTO `user_profiles` (
                `user_id`,`residence`, `city`, `state`, `pincode`, `dob`,
                `experience`, `projects_completed`, `customer_count`, `award_count`, `created_at`
            ) VALUES (
                '{$_SESSION['user_id']}', '$residence', '$city', '$state', '$pincode', '$age',
                '$experience', '$projects_completed', '$customer_count', '$award_count', NOW()
            )
        ";

        if (!mysqli_query($conn, $insert_profile)) {
            $response['status'] = 'success';
            $response['error'] = mysqli_error($conn);
            echo json_encode($response);
            exit;
        }
    }
    echo json_encode($response);

}
?>