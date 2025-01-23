<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

if ($data === false) {
    die("Connection error");
}

// Process form submission for new grievance application
if (isset($_POST['apply'])) {
    $data_name = $_POST['name'];
    $data_email = $_POST['email'];
    $data_phone = $_POST['phone'];
    $data_message = $_POST['message'];
    $grievance_type = $_POST['grievance_type'];

    // Prepare the SQL statement with placeholders
    $sql = "INSERT INTO postgreviance(name, email, phone, message, grievance_type) VALUES (?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($data, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "sssss", $data_name, $data_email, $data_phone, $data_message, $grievance_type);
    $result = mysqli_stmt_execute($stmt);

    if ($result) {
        $_SESSION['message'] = "Your application was sent successfully.";
        header("location: index.php");
        exit(); // Stop further execution
    } else {
        $_SESSION['error'] = "Error submitting application: " . mysqli_error($data);
    }
}
?>
