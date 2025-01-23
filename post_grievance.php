<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grievance</title>
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
</script>
<style>
        .grievance-type-label {
            white-space: nowrap; }
    </style>
</head>
<body style="background-color: #f7f7f7; font-family: Arial, sans-serif;">

    <div align="center" style="margin-top: 50px;">
        <h1 style="color: #333;">Post Your Grievance</h1>
    </div>

    <div align="center" class="admission_form" style="margin-top: 20px;">
        <form action="data_check.php" method="POST" style="padding: 20px; border: 1px solid #ddd; border-radius: 10px; background-color: #fff; max-width: 400px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
            <div class="adm_int" style="margin-bottom: 2px;">
                <label for="name" class="label_text" style="font-weight: bold; display: inline-block; color: #555; margin-bottom: 5px;">Name</label>
                <input id="name" class="input_deg" type="text" name="name" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 5px; display: inline-block;">
            </div>
            <div class="adm_int" style="margin-bottom: 2px;">
                <label class="label_text" style="font-weight: bold; display: inline-block; color: #555; margin-bottom: 5px;">Course</label><br>
                <label><input type="checkbox" name="course[]" value="MCA"> MCA</label><br>
                <label><input type="checkbox" name="course[]" value="MBA"> MBA</label><br>
                <label><input type="checkbox" name="course[]" value="B.Tech"> B.Tech</label><br>
            </div>
            <div class="adm_int" style="margin-bottom: 2px;">
                <label for="email" class="label_text" style="font-weight: bold; display: inline-block; color: #555; margin-bottom: 5px;">Email</label>
                <input id="email" class="input_deg" type="email" name="email" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 5px; display: inline-block;">
            </div>
            <div class="adm_int" style="margin-bottom: 2px;">
                <label for="phone" class="label_text" style="font-weight: bold; display: inline-block; color: #555; margin-bottom: 5px;">Phone</label>
                <input id="phone" class="input_deg" type="tel" name="phone" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 5px; display: inline-block;">
            </div>

            <div class="adm_int" style="margin-bottom: 2px;">
                <label for="message" class="label_text" style="font-weight: bold; display: block; color: #555; margin-bottom: 5px;">Grievance</label>
                <textarea id="message" class="input_txt" name="message" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 5px;"></textarea>
            </div>
            <div class="adm_int" style="margin-bottom: 2px;">
            <label for="grievance_type" class=" grievance-type-label label_text" style="font-weight: bold; display: inline-block; color: #555; margin-bottom: 5px;">Grievance Type</label>
            <select id="grievance_type" name="grievance_type" style="width: calc(100% - 22px); padding: 10px; border: 1px solid #ccc; border-radius: 5px; display: inline-block;">
                <option value="Admission">Grievance related to Admission</option>
                <option value="Victimization">Grievance related to Victimization</option>
                <option value="Attendance">Grievance related to Attendance</option>
                <option value="Charging of Fees">Grievance related to charging of fees</option>
                <option value="Non-transparent or Unfair Evaluation Process">Grievance regarding non-transparent or unfair evaluation process</option>
                <option value="Non-observation of AICTE Norms and Standards">Non-observation of AICTE norms and standards</option>
                <option value="Refusal to Return Documents">Refusal to return documents such as certificates</option>
                <option value="Harassment">Harassment by fellow students or teachers</option>
                <option value="Student Amenities and Quality Education">Grievance related to provision of student amenities and quality education as promised or required to be provided</option>
                <option value="Non-payment or Delay in Payment of Scholarships">Non-payment or Delay in payment of scholarships</option>
                <option value="Discrimination">Complaints on discrimination by students from SC/ST/Minority Women/Disabled Categories</option>
                <option value="Timetable Scheduling">Grievance related to timetable scheduling</option>
                <option value="Violation of Lab/Library Rules">Violation of lab/library rules</option>
                <option value="Institute Hostel and Mess">Institute hostel and mess related issues</option>
                <option value="General Administration and Maintenance">General administration and maintenance related issues</option>
            </select>
        </div>
            <div class="adm_int">
                <input class="btn btn-primary" id="submit" type="submit" value="Submit" name="apply" style="width: calc(100% - 22px); padding: 12px; background-color: #007bff; color: #fff; border: none; border-radius: 5px; cursor: pointer; font-size: 16px;">
            </div>
        </form>
    </div>
</body>


</html>