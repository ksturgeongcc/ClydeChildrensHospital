<?php
//  we can get the patients details from storing their login id in a session['id']
// this way the patient will only see their details
// ** when a patient registers, a row is created in the login_details table 
// then a row is created in the patient_details which stores the newly created login id
$patientDetails = $conn->prepare("SELECT 
u.id,
u.firstname,
u.surname,
u.email,
u.guardian

FROM patient_details u
where u.id = $uid


");
$patientDetails->execute();
$patientDetails->store_result();
$patientDetails->bind_result($userId, $userFirstname, $userSurname, $userEmail, $guardian);
$patientDetails->fetch();
