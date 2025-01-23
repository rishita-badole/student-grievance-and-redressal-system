<?php
error_reporting(0);
session_start();
session_destroy();
if($_SESSION['message'])
{
    $message=$_SESSION['message'];
    echo "<script type='text/javascript'>
    alert('$message');
    </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grievance and Redressal System</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Glitch+Pop&family=Yeseva+One&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap');
        nav {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
            background-color: white;
        }

        body {
            padding-top: 70px; 
        }

        .collegename{
            text-align:center;
            font-family: "Times New Roman", Times, serif;
            font-weight:bold;
        }

        .cont1 .card-text{
            text-align: justify;
            font-size: 14px;
            line-height: 1.6;
            color: #333;
            margin:auto;
            padding:1px;
            font-family:"Nuninto",sans-serif;
        }

        .card-bodys{
            border:1px solid light-grey;
            border-radius: 10px;
            box-shadow: 2px 4px 8px rgba(black,  0.5);
        }
        h2{
            font-family:"Nunito", sans-serif;
        }

        .carousel-caption h5 {
            color: black;
            font-family: "Times New Roman", Times, serif;
            font-size: 30px;
            background-color: lightblue;
            text-align: center;
        }

        .carousel-caption p{
            color:black;
            background-color:lightpink;
            text-align: center;
            font-family: "Times New Roman", Times, serif;
        } 

        .main{
            top:2px;
            position: relative;
            display: flex;
            align-items:center;
            justify-content: space-around;
            height: calc(100vh - 40px);
            margin-bottom:30px
        }

        .objectives{
            display:flex;
            box-shadow: 2px 4px 8px rgba;
            text-align:center;
            padding:20px;
            font-size:20px;
            border-radius :50px;
            border: 2px light-blue;
        }
        .collegeimg {
        display: block;
        margin: 0 auto;
        width: 20%; 
        height: auto; 
        }
        .ij {
        background-color: #f0f0f0; 
        padding: 20px; 
        border-radius: 10px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);}

        .ij h2 {
            color: #333; 
        }

        .ij ol {
            margin-top: 10px;}

        .ij ol li {
            margin-bottom: 10px; /* Add space between list items */
        }

        .objective{
            display:flex;
            justify-content:space-around;
            align-items:center;
            gap:20px
        }

        nav {
            position: fixed;
            z-index: 1000; 
        }

        .uff{
            border:none;
        }

        .cont1{
            background-color:#ADD8E6; 
            display:flex;
            gap:10px;
            justify-content:center;
            margin:20px;
            padding:5px;
        } 

        .card-bodys{
            border:1px dotted black;
            padding:2px;
        }

        .objectives li{
            font-family:'Nunito', sans-serif;
        }    
        
        .grievance-types ul {
    list-style-type: none;
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.grievance-types li {
    padding: 15px 20px;
    border-bottom: 1px solid #ddd;
    color: #666;
    transition: background-color 0.3s;
    cursor: pointer;
    font-size: 18px;
    margin: 0 10px 20px;
    text-align: center;
    border-radius: 8px;
    flex-grow: 1; 
    max-width: 250px;
}


.contact-me {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    margin: 40px;
}

.contact-me h2 {
    font-family: 'Nunito', sans-serif;
    text-align: center;
    color: #333;
    margin-bottom: 20px;
    font-weight: bold;
}

.contact-me p {
    font-family: 'Nunito', sans-serif;
    font-size: large;
    text-align: center;
    color: #555;
    margin-bottom: 30px;
}

.contact-details {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
}

.contact-item {
    flex: 1 1 calc(50% - 40px);
    max-width: 300px;
    text-align: center;
    margin-bottom: 20px;
    padding: 20px;
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.contact-icon {
    font-size: 2em;
    margin-bottom: 10px;
}

.contact-item p {
    color: #333;
    margin: 0;
}

.contact-item p a {
    color: inherit;
    text-decoration: none;
}

.contact-item p a:hover {
    text-decoration: underline;
}
    </style>
</head>

<body>
    <header class="header">
        <nav>
            <label class="logo" >Student Grievance Cell - Dr. D.Y Patil School Of MCA</label>
            <ul>
                <li><a href="login.php" class="btn btn-success">Login</a></li>
            </ul>
        </nav>         
    </header>
    <div class='para-1 boxi'>
        <h1 class="collegename" style="margin:40px">Dr. D Y Patil School Of MCA</h1>
        <h2 class='headi'>Grievance Redressal Cell </h2><br>
        <h2>Vision and Mission</h2>
        <p style="font-family:'bold'">The Student’s Grievance Cell desires to promote and maintain a conducive and unprejudiced educational environment. The objectives of Students Grievance Cell include the following:</p>
        <div class="cont1 ">
            <div class="card-bodys">
                <p class="card-text" style="padding:30px">The Student's Grievance Cell ensures impartiality and fairness in addressing student concerns by adhering to established procedures and regulations. It provides a platform for students to express their grievances and initiates a transparent grievance resolution process within the college's framework.</p>
            </div>
            <div class="card-bodys">
                <p class="card-text" style="padding:30px">Operating with strict confidentiality, the Cell investigates and analyzes the nature and recurrence of student grievances, aiming to identify underlying issues and patterns. This confidential approach fosters an environment where students feel comfortable expressing their concerns without fear of reprisal.</p>
            </div>
            <div class="card-bodys">
                <p class="card-text" style="padding:30px">By holding college officials accountable for their actions and promoting courteous and responsive behavior, the Cell contributes to a more supportive and respectful campus environment. It upholds principles of procedural fairness, ensuring that students have the right to be heard and treated without bias, while also advocating for students who may have been unjustly deprived of college services to which they are entitled.</p>
            </div>
        </div>
    </div>

    <div class="ij boxi fw-normal bg-info-subtle" style="margin:40px">
        <h2 style=" font-family:'Nunito', sans-serif;" class="bg-opacity-50 bg-info">Objectives of our system</h2><br>
        <section class="objective">
            <img src="img1/college.jpg" alt="college" class="collegeimg">
            <ol style="font-size:large;font-family:'Nunito', sans-serif;">
                <li>Grievance cell is formed in order to keep the healthy working atmosphere amongst staff, students and parents. This cell helps Students to record their complaints and solve their problems related to academics, resources and personal grievances freely and frankly without any fear of victimization.</li>
                <li>To keep the dignity of the School high by ensuring a conflict-free atmosphere in the School by promoting good Student-Student relationship and Student-teacher relationship.</li>
                <li>To ensure an effective solution to the student grievances with an impartial and fair approach.</li>
                <li>Ragging in any form is strictly prohibited in and outside the institution. Any violation of ragging and disciplinary rules should be urgently brought to the notice of the Principal. Ragging Complaints will be handled as per ragging rules.</li>
                <li>Woman Harassment complaints will be handled as per government guidelines by respective section.</li>
            </ol>
        </section>
    </div>
    <div class='ef boxi  bg-success p-2 text-dark bg-opacity-50 bg-info'>
        <h2 style=" font-family:'Nunito', sans-serif;">Grievance Types</h2>
        <section>
        <div class="grievance-types list-group ">
          <ul class="list-group">
              <li class="list-group-item list-group-item-action list-group-item-primary">Academic Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-warning">Admission Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-success">Harassment Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-danger">Financial Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-info">Faculty Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-success">Infrastructure Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-warning">Examination Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-danger">Scholarship Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-success">Library Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-secondary">Transport Grievance</li>
              <li class="list-group-item list-group-item-action list-group-item-warning">Placement Grievance</li>
          </ul>
    </div>
        </section>
    </div>
    <div>
        <div id="myCarousel" class="carousel slide uff" data-ride="carousel">
            <ol class="carousel-indicators uff">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner uff">
                <div class="item active">
                    <img src="img1/img1.jpg" alt="Los Angeles">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>What do we preach?</h5>
                        <p>"Fairness and impartiality are fundamental principles guiding our student grievance system."</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img1/img2.jpg" alt="Chicago">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>What is our mission?</h5>
                        <p>Student's safety and mental peace.</p>
                    </div>
                </div>

                <div class="item">
                    <img src="img1/img3.jpg" alt="New York">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Our Aim</h5>
                        <p>"Through the student grievance system, we aim to address issues proactively and prevent recurrence wherever possible."</p>
                    </div>
                </div>
            </div>
            <a class="left carousel-control uff" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="contact-me boxi">
    <h2>Contact Me</h2>
    <p>If you have any questions, concerns, or need further assistance, please feel free to reach out to us using the following contact details:</p>
    <div class="contact-details">
        <div class="contact-item">
            <div class="contact-icon">
                <i class="glyphicon glyphicon-map-marker"></i>
            </div>
            <p><strong>Address:</strong> Dr. D.Y Patil School Of MCA</p>
        </div>
        <div class="contact-item">
            <div class="contact-icon">
                <i class="glyphicon glyphicon-earphone"></i>
            </div>
            <p><strong>Phone:</strong> +123-456-7890</p>
        </div>
        <div class="contact-item">
            <div class="contact-icon">
                <i class="glyphicon glyphicon-envelope"></i>
            </div>
            <p><strong>Email:</strong> <a href="mailto:info@dypatilschool.com">info@dypatilschool.com</a></p>
        </div>
        <div class="contact-item">
            <div class="contact-icon">
                <i class="glyphicon glyphicon-time"></i>
            </div>
            <p><strong>Office Hours:</strong> Monday - Friday, 9:00 AM - 5:00 PM</p>
        </div>
    </div>
</div>

    </div>
</body>
</html>
