<?php
session_start();
$conn = new mysqli('localhost','root','','bakery');

$db = mysqli_select_db($conn,'bakery');

if(isset($_POST['submit'])){
$aname = $_POST['aname'];
$apassword = $_POST['apassword'];
$sql = "select * from admin_login where aname = '$aname' and apassword = '$apassword'";
$query = mysqli_query($conn,$sql);
$row = mysqli_num_rows($query);
    if($row == 1){
        echo "<script>alert('Registration is successful');</script>";
        $_SESSION['aname'] = $aname;
        header('location:additem.php');    
    }else{
        echo "<script> alert('login failed') </script>";
        header('location:adminlogin.php'); 
    }
}



?>