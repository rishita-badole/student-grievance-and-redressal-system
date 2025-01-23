<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the grievance ID and feedback from the form
    $grievance_id = $_POST['grievance_id'];
    $feedback = $_POST['feedback'];

    // Prepare and execute the SQL query to update the feedback in the database using prepared statement
    $sql = "UPDATE postgreviance SET feedback = ? WHERE id = ?";
    $stmt = mysqli_prepare($data, $sql);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, "si", $feedback, $grievance_id);

    if (mysqli_stmt_execute($stmt)) {
        // Feedback submitted successfully
        $_SESSION['message'] = "Feedback submitted successfully.";
    } else {
        // Error submitting feedback
        $_SESSION['message'] = "Error: " . mysqli_error($data);
    }

    // Close statement
    mysqli_stmt_close($stmt);
}

// Redirect back to the grievances dashboard
header("Location: myresult.php");
exit;
?>
