<?php
// Set a simple, consistent user ID
$user_id = 1;

// Assuming dbconfig.php provides the $conn variable
require_once 'dbconfig.php';

// Define the target directory for image uploads
$upload_dir = __DIR__ . '/../../assets/images/project_headers/';

// Check if form data has been submitted
if (isset($_POST['proj-ids'])) {
    // Get all submitted data from the POST request
    $ids = $_POST['proj-ids'];
    $titles = $_POST['proj-titles'];
    $descs = $_POST['proj-descriptions'];
    $files = $_FILES['file-names'] ?? null;

    // A simple check to ensure at least one project was submitted
    if (empty($ids)) {
        echo json_encode(['success' => false, 'message' => 'No projects submitted.']);
        exit;
    }

    $success = true;
    $message = 'Projects submitted successfully.';

    // Loop through each submitted project
    foreach ($ids as $index => $id) {
        $title = $titles[$index];
        $desc = $descs[$index];
        $file_name = ''; // Default to an empty filename

        // Handle file uploads if a file exists and there are no errors
        if ($files && isset($files['name'][$index]) && $files['error'][$index] === 0) {
            $original_name = basename($files['name'][$index]);
            // Create a unique filename to prevent overwrites
            $unique_name = time() . '_' . $original_name;
            $target_file = $upload_dir . $unique_name;

            // Move the uploaded file to the target directory
            if (move_uploaded_file($files['tmp_name'][$index], $target_file)) {
                $file_name = $unique_name;
            } else {
                $success = false;
                $message = "Failed to upload file: " . $original_name;
                break; // Stop the loop if an upload fails
            }
        }

        // Prepare the SQL query to insert project data
        $insert_sql = "INSERT INTO `user_projects` (`category_id`, `user_id`, `title`, `description`, `filename`, `created_at`) VALUES ('$id', '$user_id', '$title', '$desc', '$file_name', NOW())";

        // Execute the query and check for errors
        if (!mysqli_query($conn, $insert_sql)) {
            $success = false;
            $message = 'Database error: ' . mysqli_error($conn);
            break; // Stop the loop if a database insert fails
        }
    }

    // Return a JSON response based on the outcome
    echo json_encode(['success' => $success, 'message' => $message]);
} else {
    // Handle cases where the form was not submitted correctly
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
}
?>