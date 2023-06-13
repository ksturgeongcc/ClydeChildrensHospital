<?php
$apptDetails = $conn->prepare("SELECT 
a.id,
a.title,
a.date,
a.dept_id,
d.name


FROM appointment a
INNER JOIN department d ON a.dept_id = d.id

where a.patient_id = 6


");
$apptDetails->execute();
$apptDetails->store_result();
$apptDetails->bind_result($apptId, $apptTitle, $apptDate, $deptId, $deptName);
$apptDetails->fetch();
echo $uid;