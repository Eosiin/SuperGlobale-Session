<?php
var_dump($_SESSION);



if(!isset($_SESSION['USER'])){
    header("Location: login.php");

}




