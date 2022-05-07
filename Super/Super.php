<?php
session_start();

// $firstname = $_GET['fname'];
// echo "Hi Mr $firstname";

$_SESSION['Number'] = $_POST['favnumber'];//method1
echo '<a href="session.php"> please go to session';

//method2
// $favNumber = $_POST['favnumber'];
// $_SESSION['favNumber']=$favNumber;


