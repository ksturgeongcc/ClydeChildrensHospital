<?php
    // patient details has fk to login detials
    // appointment has department and patient
	$patientDetails = $conn->prepare("SELECT 
        p.id,
        p.firstname,
        p.surname,
        p.email,
        p.guardian,
        p.login_details_id

       FROM patient_details p
       where login_details_id = $uid

       
      ");
$patientDetails->execute();
$patientDetails->store_result();
$patientDetails->bind_result($userId, $userFirstname, $userSurname, $userEmail, $userActive, $guardian);
$patientDetails->fetch();