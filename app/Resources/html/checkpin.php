<?php
/**
 * Created by PhpStorm.
 * User: SUBANGANI
 * Date: 12/16/2015
 * Time: 12:26 PM
 */

include 'connection.php';
if($_POST['Pin']==null ||$_POST['UserId']== null){
    echo "<script>";
    echo"window.location = 'index.php'";
    echo "</script>";
}

function Driver_LogIn() {
    session_start(); //starting the session for driver profile page
    if(!empty($_POST['UserId'])) //checking the 'user' name , if is it empty or have some text
    { $query = mysql_query("SELECT * FROM driver where Driver_ID = '$_POST[UserId]' AND Driver_password = '$_POST[Pin]'") or die(mysql_error()); $row = mysql_fetch_array($query) or die(mysql_error());
        if(!empty($row['UserId']) AND !empty($row['Pin'])) {
            echo "<script>";
            echo"window.location = 'driverProfile.php?UID='+ $row[UserId];";
            echo"</script>";
        } else {
            echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
            echo "<script>";
            echo"window.location = 'index.html';";
            echo "</script>";
        } } }
function Admin_LogIn() {
    session_start(); //starting the session for driver profile page
    if(!empty($_POST['UserId'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
    { $query = mysql_query("SELECT * FROM admin where id = '$_POST[UserId]' AND password = '$_POST[Pin]'") or die(mysql_error()); $row = mysql_fetch_array($query) or die(mysql_error());
        if(!empty($row['UserId']) AND !empty($row['Pin'])) {
            echo "<script>";
            echo"window.location = 'adminProfile.php?UID='+ $row[UserId];";
            echo"</script>";
        } else {
            echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
            echo "<script>";
            echo"window.location = 'index.html';";
            echo "</script>";
        } } }
function customer_LogIn() {
    session_start(); //starting the session for driver profile page
    if(!empty($_POST['UserId'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text
    { $query = mysql_query("SELECT * FROM customer where customer_id = '$_POST[UserId]' AND customer_pass = '$_POST[Pin]'") or die(mysql_error()); $row = mysql_fetch_array($query) or die(mysql_error());
        if(!empty($row['UserId']) AND !empty($row['Pin'])) {
            echo "<script>";
            echo"window.location = 'customerProfile.php?UID='+ $row[UserId];";
            echo"</script>";
        } else {
            echo "SORRY... YOU ENTERED WRONG ID AND PASSWORD... PLEASE RETRY...";
            echo "<script>";
            echo"window.location = 'index.html';";
            echo "</script>";
        } } }

if((isset($_POST['submit']))and value=="admin") { Admin_LogIn(); }
elseif((isset($_POST['submit'])) and value=="driver"){ Driver_LogIn();}
elseif ((isset($_POST['submit'])) and value =="customer"){ customer_LogIn();}
?>