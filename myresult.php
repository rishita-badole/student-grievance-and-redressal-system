<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

// Check if the user is logged in and get their username
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Fetch email associated with the logged-in username
    $email_query = "SELECT email FROM user WHERE username = '$username'";
    $email_result = mysqli_query($data, $email_query);
    $row = mysqli_fetch_assoc($email_result);
    $email = $row['email'];

    // Fetch grievances associated with the retrieved email
    $sql = "SELECT * FROM postgreviance WHERE email = '$email'";
    $result = mysqli_query($data, $sql);
} else {
    // Redirect to login page or handle the case where the user is not logged in
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance Dashboard</title>
    <?php include 'Grievance_css.php' ?>
    
    <?php include 'student_sidebar.php'; ?>
</head>

<body>
    <div class="content">
        <center>
            <h1>Students Grievances</h1>
            <br><br>
            <table border="1px">
                <tr>
                    <th style="padding:20px; font-size:15px;">Name</th>
                    <th style="padding:20px; font-size:15px;">Email</th>
                    <th style="padding:20px; font-size:15px;">Phone</th>
                    <th style="padding:20px; font-size:15px;">Message</th>
                    <th style="padding:20px; font-size:15px;">Status</th>
                    <th style="padding:20px; font-size:15px;">Feedback</th>
                </tr>
                <?php while ($info = $result->fetch_assoc()) { ?>
                    <tr>
                        <td style="padding:20px;"><?php echo $info['name']; ?></td>
                        <td style="padding:20px;"><?php echo $info['email']; ?></td>
                        <td style="padding:20px;"><?php echo $info['phone']; ?></td>
                        <td style="padding:20px;"><?php echo $info['message']; ?></td>
                        <td style="padding:20px;"><?php echo $info['status']; ?></td>
                        <td style="padding:20px;">
                            <?php
                            // Assuming $info['status'] contains the status of the grievance (resolved or not)
                            $status = $info['status'];
                            $grievance_id = $info['id']; // Assuming there's a field for grievance_id in your database

                            if ($status === 'Resolved') {
                                // Display feedback form only if the grievance is resolved
                                echo "<form action='submit_feedback.php' method='POST'>";
                                echo "<input type='hidden' name='grievance_id' value='$grievance_id'>";
                                echo "<label for='feedback'>Feedback:</label>";
                                echo "<select name='feedback' id='feedback'>";
                                echo "<option value='Satisfied'>Satisfied</option>";
                                echo "<option value='Unsatisfied'>Unsatisfied</option>";
                                echo "</select>";
                                echo "<input type='submit' value='Submit Feedback'>";
                                echo "</form>";
                            } else {
                                // Display a message indicating that feedback can only be given for resolved grievances
                                echo "<p>Feedback can only be given for resolved grievances.</p>";
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
        </center>
    </div>
</body>

</html>
