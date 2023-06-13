<?php
    include '../../../auth/dbConfig.php';

    $userId = $_GET['uid'];

    $deleteUser = $conn->prepare("DELETE FROM users WHERE users.id = $userId ");

    
    $deleteUser->execute();

    header('Location: ../allUsers');

    ?>
