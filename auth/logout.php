<?php

session_start();

include "../includes/function.php";

session_unset();

session_destroy();

redirect("login.php");

?>