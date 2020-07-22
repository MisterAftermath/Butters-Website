<?php
session_start();
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false) {

    header("Location: index.php");
}


?>


Finally
<button onclick="location.href = 'admin.php';" id="myButton" class="float-left submit-button" >LOGOUT, HA I GOT TO WORK HAHAHAHAHAHAHAHHA</button>