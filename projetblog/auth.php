<?php
include ('settings.php');

if ($_COOKIE['MyLoginPage'] != $cookie) {

header('Location: cookie.php');
die;

}
?>