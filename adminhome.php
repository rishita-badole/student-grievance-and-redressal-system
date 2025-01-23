<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("location: login.php");
} elseif ($_SESSION['usertype'] == 'student') {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
    /* Add the following CSS styles to set the background image */
    body {
        background-image: url('img1/adminbgfinal.jpeg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100vh;
    }
            
    /* Your other CSS styles here */
    h1 {
        font-weight: bold;
        text-align: center;
        font-size: 3rem;
        color: #333;
        text-shadow: 2px 2px 2px rgba(0, 0, 0, 0.2);
        margin: 2rem 0;
    }
    </style>
    <?php
    include 'grievance_css.php'
    ?>
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css">
</head>
<body>
<?php
include 'admin_sidebar.php';
?>
    
</p>
</div>
</body>
</html>
