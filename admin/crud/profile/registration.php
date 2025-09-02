<?php
require_once('dbconfig.php');

if (isset($_POST['firstname'])) {
            $first_name = $_POST['firstname'];
            $last_name = $_POST['last-name'];
            $user_name = $_POST['user-name'];
            $password = $_POST['password1'];
            $designation = $_POST['designation'];
            $email = $_POST['e-mail'];
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

            $insert = "INSERT INTO `user_registrations`
                (`first_name`, `last_name`, `user_name`, `email`, `password`, `country`, 
                `street`, `pincode`, `telegram`, `skype`, `personal_no`, `support_no`, 
                `office_no`, `created_at`)
                VALUES (
                '$first_name', '$last_name', '$user_name', '$email', '$password', '$country', 
                '$street', '$pincode', '$telegram', '$skype', '$personal_no', '$support_no', 
                '$office_no', NOW()
            )";
            $result = mysqli_query($conn, $insert);
            if (!$result) {
                echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);

            }

            else {
                $insert = "INSERT INTO `user_profiles` (`residence`, `city`, `state`, `pincode`, `dob`, `experience`, 
                `projects_completed`, `customer_count`, `award_count`, `created_at`) 
                VALUES (
                 '$residence', '$city', '$state', '$pincode','$age', '$experience', '$projects_completed', '$customer_count', 
                 '$award_count', NOW()
                 )";
                    $result = mysqli_query($conn, $insert);

                    if (!$result) {
                        echo json_encode(['status' => 'error', 'error' => mysqli_error($conn)]);
                    } 
                    else {
                        echo json_encode(['status' => 'success']);
                    }
            }
            }
?>