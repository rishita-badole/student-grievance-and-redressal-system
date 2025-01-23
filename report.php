<?php
session_start();

$host = "localhost";
$user = "root";
$password = "";
$db = "schoolproject";
$data = mysqli_connect($host, $user, $password, $db);

// Count number of grievances with different statuses
$sql_pending = "SELECT COUNT(*) AS count FROM postgreviance WHERE status = 'Pending'";
$sql_in_progress = "SELECT COUNT(*) AS count FROM postgreviance WHERE status = 'In Progress'";
$sql_active = "SELECT COUNT(*) AS count FROM postgreviance WHERE status = 'Active'";
$sql_resolved = "SELECT COUNT(*) AS count FROM postgreviance WHERE status = 'Resolved'";
$sql_total = "SELECT COUNT(*) AS count FROM postgreviance";

$result_pending = mysqli_query($data, $sql_pending);
$result_in_progress = mysqli_query($data, $sql_in_progress);
$result_active = mysqli_query($data, $sql_active);
$result_resolved = mysqli_query($data, $sql_resolved);
$result_total = mysqli_query($data, $sql_total);

// Fetch counts
$count_pending = mysqli_fetch_assoc($result_pending)['count'];
$count_in_progress = mysqli_fetch_assoc($result_in_progress)['count'];
$count_active = mysqli_fetch_assoc($result_active)['count'];
$count_resolved = mysqli_fetch_assoc($result_resolved)['count'];
$count_total = mysqli_fetch_assoc($result_total)['count'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievances Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 80%;
            max-width: 700px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
            font-size: 2em;
        }

        .report-card {
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .report-title {
            font-size: 1.5em;
            margin-bottom: 15px;
            color: #555;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #eee;
        }

        li:last-child {
            border-bottom: none;
        }

        .report-count {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Grievances Report</h1>
        <div class="report-card">
            <h2 class="report-title">Number of Grievances:</h2>
            <ul>
                <li><span>Total:</span> <span class="report-count"><?php echo $count_total; ?></span></li>
                <li><span>Pending:</span> <span class="report-count"><?php echo $count_pending; ?></span></li>
                <li><span>In Progress:</span> <span class="report-count"><?php echo $count_in_progress; ?></span></li>
                <li><span>Active:</span> <span class="report-count"><?php echo $count_active; ?></span></li>
                <li><span>Resolved:</span> <span class="report-count"><?php echo $count_resolved; ?></span></li>
            </ul>
        </div>
    </div>
</body>
</html>
