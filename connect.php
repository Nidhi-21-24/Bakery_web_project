<?php
$fullname = $_POST['fullname'];
$dob = $_POST['dob'];
$email = $_POST['email'];
$password = $_POST['password'];
$gender  =  $_POST['gender'];


$conn = new mysqli('localhost','root','','bakery');
if($conn->connect_error){
 die('Connection Failed :'.$conn->connect_error);
}else{
 $stmt = $conn->prepare("insert into registration(fullname, dob, email, password, gender)
      values(?,?,?,?,?)");
 $stmt->bind_param("sssss", $fullname, $dob, $email, $password, $gender);
 $stmt->execute();
 echo "<script>alert('Registration is Successful');window.location='custmrlogin.php'</script>";
 $stmt->close();
 $conn->close();
}
?>




