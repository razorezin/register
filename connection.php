<?php
$connection = mysqli_connect("localhost","root","","firefox-poultry");
if (!isset($connection)){
    die("DB Connection failed");
}