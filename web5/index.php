<?php
session_start();

if (!isset($_SESSION['visit'])) {
    $_SESSION['visit'] = 0;
}

$_SESSION['visit'] = $_SESSION['visit']+1;

if ($_SESSION['visit'] == 10) {
    header("location: /phpsandbox/congratulations.php");
}
if ($_SESSION['visit'] == 5) {
    echo "Thank you for visiting the page a lot.";
}
?>

<h1>Hello</h1>
<p>You have visited this page <?= $_SESSION["visit"] ?> times</p>
<p><a href="?reset=true">Reset</a></p>
