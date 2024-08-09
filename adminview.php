<!DOCTYPE html>
<html>
<head>
<title>view Item</title>
<style>

* {
  margin: 0;
  padding: 0;
  
}

a{
  text-decoration: none;
}

li{
  list-style: none;
}
/* NAVBAR STYLING STARTS */
.navbar{
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 20px;
  background-color:brown;
  color: #fff;
}

.nav-links a {
  color: white;
}


.logo {
  font-size: 32px;
}

/* NAVBAR MENU */
.menu {
  display: flex;
  gap: 1em;
  font-size: 18px;
}

.menu li:hover {
  background-color: #4c9e9e;
  border-radius: 5px;
  transition: 0.3s ease;
}

.menu li {
  padding: 5px 14px;
}


.services {
  position: relative;
}


/* RESPONSIVE NAVBAR MENU STARTS */
/* CHECKBOX HACK */
input[type=checkbox] {
  display: none;
}

/* HAMBURGER MENU */
.hamburger {
  display: none;
  font-size: 24px;
  user-select: none;
}

/* APPLYING MEDIA QUERIES */
@media (max-width: 768px) {
  .menu {
    display: none;
    position: absolute;
    background-color: #4c9e9e;
    color: #fff;
    width: 100%;
    height: 100vh;
    flex-direction: column;
    text-align: center;
  }

  .menu li {
    padding: 20px;
  }

  .hamburger {
    display: block;
    color: #fff;
  }
}

.header {
  background-image:url(" ");
  padding: 150px;
  text-align: center;
  color:white;
  background-size:100% 100%;
  
}
.header h1 {
  font-size: 60px;
}
.btn {
  background-color: rgb(218, 217, 218);
  border: 2px solid rgb(57, 56, 57);
  color: rgb(238, 232, 232);
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  transition-duration: 0.4s;
  cursor:pointer;
}

.btn:hover {
  background-color: rgb(84, 81, 81); 
  color: rgb(11, 11, 11);
}
.dropbtn {
  background-color: rgb(22, 23, 23);
  color: rgb(16, 15, 15);
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #edebeb;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: rgb(8, 8, 8);
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #d6dad8}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #858785;
}
</style>
<style>
  body{
    background: url("static/img/bakery1.jpg");
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    height: 100%;
    font-family: cursive;

  }
table {
  border-collapse: collapse;
  width: 100%;
  
}

th, td {
  text-align: center;
  padding: 8px;
  border-radius:10px solid black;
}
.container {
  
  width: 80%;
  margin: 0 auto;
  padding: 75px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: brown;
}
#customers {
    font-family: Arial, Helvetica, sans-serif;
    
    
     margin: auto;
  }
  
  #customers td, #customers th {
    background-color: white;
    padding: 28px;
  }
  
  #customers tr:{
    background-color: white;
  }
  
  #customers tr:hover {background-color: #f2f2f2;}
  
  #customers th {
    padding-top: 20px;
    padding-bottom: 20px;
    text-align: left;
    background-color: brown;
    color: rgb(14, 9, 9);
  }
  </style>    
</head>
<bpdy>
<nav class="navbar">
              <div class="logo">Welcome</div>
              <ul class="nav-links">
                
                <input type="checkbox" id="checkbox_toggle" />
                <label for="checkbox_toggle" class="hamburger">&#9776;</label>
                
                <div class="menu">
                
                  <li><a href="additem.php"><i class="fa fa-fw fa-envelope"></i>Add</a></li>
                  <li><a href="adminview.php"><i class="fa fa-fw fa-eye"></i>Manage</a></li>
                  <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Logout</a></li>
               </ul>
               </nav>
    <div class="container">
      <center><h1>Items Available</h1></center>
    <table id="customers">
        <tr>
            <th>Item Name</th>
            <th>description</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
            
            
          

        </tr> 
        <?php
        $conn = new mysqli('localhost','root','','bakery');
        if($conn->connect_error){
            die('Connection Failed :'.$conn->connect_error);
        }
        $sql = "SELECT iname, ides, quantity, price, id from add_items";
        $result = $conn-> query($sql);
        if($result-> num_rows > 0){
            while ($row = $result-> fetch_assoc()){
                $did='?delid='.$row["id"];
               echo "<tr><td>".$row["iname"]."</td><td>".$row["ides"]."</td><td>".$row["quantity"]."</td><td>".$row["price"]."</td><td><a href=".$did.">Delete</a></td></tr>";
            }
            echo "</table>";
            }
            else{
                echo "0 result";
            }
            if(isset($_GET['delid']))
            {
                $delid=$_GET['delid'];
                $delquery="delete from add_items where id='".$delid."'";
                if(mysqli_query($conn, $delquery))
                {
                    echo "<script>alert('deleted');</script>";

                    echo "<script>location.href='adminview.php'</script>";
                }
            }
            $conn->close();
        ?>
</table>   
        </div>
</body>
</html>