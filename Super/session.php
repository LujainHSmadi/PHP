<?php
session_start();
$_SESSION['Number'] += 5;
echo "The number is " . $_SESSION['Number'];
