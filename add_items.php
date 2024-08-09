<?php
   $iname = $_POST['iname'];
   $ides = $_POST['ides'];
   $quantity = $_POST['quantity'];
   $price= $_POST['price'];

$conn = new mysqli('localhost','root','','bakery');
if($conn->connect_error){
    die('Connection Failed :'.$conn->connect_error);
}
    $stmt = $conn->prepare("insert into add_items(iname, ides, quantity, price)
         values(?,?,?,?)");
    $stmt->bind_param("ssss", $iname, $ides, $quantity, $price);
    $stmt->execute();
    echo "<script>alert('item is added successful'); window.location='additem.php'</script>";
    
    $stmt->close();
    $conn->close();

?>