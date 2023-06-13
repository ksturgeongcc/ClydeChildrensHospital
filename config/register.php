<?php
// error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'dbConfig.php';

if (!preg_match('/^[a-zA-Z0-9]+$/', $_POST['username'])) {
    exit('Username is not valid!');
}
// Password must be between 5 and 20 characters long.
if (strlen($_POST['password']) > 20 || strlen($_POST['password']) < 5) {
    exit('Password must be between 5 and 20 characters long!');
}
// We need to check if the account with that username exists.
$check_details = $conn->prepare('SELECT id, password FROM login_details WHERE username = ? ');
$check_details->bind_param('s', $_POST['username']);
$check_details->execute();
$check_details->store_result();
// Store the result so we can check if the account exists in the database.
if ($check_details->num_rows > 0) {
    // Username already exists
    echo 'Username exists! Please choose another. <button class="close">CLOSE</button>';
} else {
    // Username doesnt exists, insert new account
    $login_details = $conn->prepare("INSERT INTO login_details (username, password) VALUES(?, ?);");
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    // We do not want to expose passwords in our database, so hash the password and use password_verify when a user logs in.
    $login_details->bind_param('ss', $_POST['username'], $password);
    $login_details->execute();
    // patient details
    $patient_details = $conn->prepare("INSERT INTO patient_details (firstname, surname, email, login_details_id ) VALUES(?, ?, ?, LAST_INSERT_ID());");
    $patient_details->bind_param('sss', $_POST['firstname'], $_POST['surname'], $_POST['email']);   
    $patient_details->execute();
    $conn->close();


}
header('Location: login');
