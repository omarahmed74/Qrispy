<?php


function redirect($path){
    header("Location: $path");
    exit; 
}

function clean($value){ 
   return trim(htmlspecialchars($value));
}

// Authentication 
function require_login(){
  if(!isset($_SESSION['user_id'])){
    redirect("../auth/login.php");
}
}
