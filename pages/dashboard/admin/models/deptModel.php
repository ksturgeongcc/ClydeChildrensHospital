<?php

$deptDetails = $conn->prepare("SELECT 
d.name

FROM department d
where d.id = $deptId


");
$deptDetails->execute();
$deptDetails->store_result();
$deptDetails->bind_result($deptName);
$deptDetails->fetch();
