<?php
session_start();
if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
    $welcomeMessage = "Welcome to the member's area, " . $_SESSION['Username'] . "!";
} else {
    header('Location: checkout.php');
}
?>