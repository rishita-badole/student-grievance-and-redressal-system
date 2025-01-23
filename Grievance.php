<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location: login.php");
}
$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

// Check if the delete button is clicked
if (isset($_GET['id']) && isset($_GET['action']) && $_GET['action'] == 'delete') {
    $id = $_GET['id'];
    $sql = "DELETE FROM postgreviance WHERE id = '$id'";
    mysqli_query($data, $sql);
    header("location: Grievance.php");
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Prepare and execute the SQL query to update the status
    $sql = "UPDATE postgreviance SET status = ? WHERE id = ?";
    $stmt = mysqli_prepare($data, $sql);

    // Bind parameters and execute the statement
    mysqli_stmt_bind_param($stmt, "si", $status, $id);

    $result = mysqli_stmt_execute($stmt);

    // Check if the query was successful
    if ($result) {
        $_SESSION['message'] = "Status updated successfully.";
    } else {
        $_SESSION['error'] = "Error updating status: " . mysqli_error($data);
    }

    // Redirect back to the same page to prevent resubmission
    header("location: " . $_SERVER['PHP_SELF']);
    exit(); // Stop further execution
}


// Fetch data from the database
$sql = "SELECT * FROM postgreviance";
$result = mysqli_query($data, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance Dashboard</title>
    <?php include 'Grievance_css.php' ?>
</head>
<body>
    <?php include 'admin_sidebar.php'; ?>
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
                    <th style="padding:20px; font-size:15px;">Grievance Type</th>
                    <th style="padding:20px; font-size:15px;">Action</th>
                    <th style="padding:20px; font-size:15px;">Feedback</th>
                    <th style="padding:20px; font-size:15px;">Delete</th>
                    <th style="padding:20px; font-size:15px;">Status</th>
                </tr>
                <?php
                if (!$result) {
                    echo "Error in executing the query: " . mysqli_error($data);
                } else {
                    if (mysqli_num_rows($result) > 0) {
                        while ($info = mysqli_fetch_assoc($result)) {
                            ?>
                            <tr>
                                <td style="padding:20px;"><?php echo isset($info['name']) ? $info['name'] : ''; ?></td>
                                <td style="padding:20px;"><?php echo isset($info['email']) ? $info['email'] : ''; ?></td>
                                <td style="padding:20px;"><?php echo isset($info['phone']) ? $info['phone'] : ''; ?></td>
                                <td style="padding:20px;"><?php echo isset($info['message']) ? $info['message'] : ''; ?></td>
                                <td style="padding:20px;"><?php echo isset($info['grievance_type']) ? $info['grievance_type'] : ''; ?></td>
                                <td style="padding:20px;"><?php echo isset($info['status']) ? $info['status'] : ''; ?></td>
                                <td style="padding:20px;"><?php echo isset($info['feedback']) ? $info['feedback'] : ''; ?></td>

                                <td class="table_td">
                                    <a onClick="javascript:return confirm('Are you sure you want to delete this?');"
                                       class='btn btn-danger'
                                       href='grievance.php?id=<?php echo isset($info['id']) ? $info['id'] : ''; ?>&action=delete'>Delete</a>
                                    ;
                                </td>
                                <td class="table_td">
                                    <form method="POST" action="">
                                        <input type="hidden" name="id" value="<?php echo isset($info['id']) ? $info['id'] : ''; ?>">
                                        <select name="status" onchange="this.form.submit()">
                                            <option value="Pending" <?php if (isset($info['status']) && $info['status'] == 'Pending') echo 'selected'; ?>>
                                                Pending
                                            </option>
                                            <option value="In Progress" <?php if (isset($info['status']) && $info['status'] == 'In Progress') echo 'selected'; ?>>
                                                In Progress
                                            </option>
                                            <option value="Active" <?php if (isset($info['status']) && $info['status'] == 'Active') echo 'selected'; ?>>
                                                Active
                                            </option>
                                            <option value="Resolved" <?php if (isset($info['status']) && $info['status'] == 'Resolved') echo 'Resolved'; ?>>
                                                Resolved
                                            </option>
                                        </select>
                                    </form>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        echo "No records found.";
                    }
                }
                ?>
            </table>
        </center>
    </div>
</body>
</html>
