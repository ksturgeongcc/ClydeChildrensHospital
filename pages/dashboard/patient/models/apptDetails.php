<?php
$apptDetails = $conn->prepare("SELECT 
a.id,
a.title,
a.date,
a.dept_id,
a.video_path,
a.description,
d.name,
d.staff_nurse_name,
d.staff_nurse_img,
d.doctor_name,
d.doctor_img,
d.nurse_name,
d.nurse_img


FROM appointment a
INNER JOIN department d ON a.dept_id = d.id

where a.patient_id = $userId


");
$apptDetails->execute();
$apptDetails->store_result();
$apptDetails->bind_result($apptId, $apptTitle, $apptDate, $deptId, $aVideo, $aDescription, $deptName, $snName, $snImg, $dName, $dImg, $nName, $nImg);
$apptDetails->fetch();

$date = $apptDate;  
//converts date and time to seconds  
$sec = strtotime($date);  
//converts seconds into a specific format  
$newDate = date ("d/m/Y H:i", $sec);  
//Appends seconds with the time  
$newDate = $newDate . ":00";  
// display converted date and time  
