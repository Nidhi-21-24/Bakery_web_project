<!DOCTYPE html>
<html lang="en">
<head>
  <title>add item</title>
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
  background: url("static/img/bakery2.jpg");

}
  form {
  max-width: 500px;
  margin: 40px auto;
  padding: 20px;
  border: 10px solid #ccc;
  background:brown;
}

label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"], input[type="number"], textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
}



input[type="submit"] {
  background-color: #cf50b6;
  color: #fff;
  padding: 10px 20px;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #898b89;
}
</style>
</head>
<body>
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
  <form action="add_items.php" method="post">
    <h2>Add Item Details</h2>
    <label for="cake-name">Item Name:</label>
    <input type="text" id="iname" name="iname"><br><br>
    <label for="cake-description"> Description:</label>
    <textarea id="cake-description" name="ides"></textarea><br><br>
    <label for="cake-quantity"> Quantity:</label>
    <input type="text" id="quantity" name="quantity"><br><br>
    <label for="cake-price"> Price:</label>
    <input type="number" id="price" name="price"><br><br>
    
    <input type="submit" value="Add"><br><br>
  </form>
</body>

</html>
