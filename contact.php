<!DOCTYPE html>
<html>
<head>
<title>Contact us</title>
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
        background-image: url("static/img/bakery11.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 100%;
    }
.container {
  
  width: 500px;
  margin: 0 auto;
  padding: 120px;
  border: 1px solid #ccc;
  border-radius: 5px;
  background-color: brown;
}
.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
  width: 100%;
  padding: 5px;
  margin-top: 5px;
  border: 1px solid #5d5959;
  border-radius: 5px;
  box-sizing: border-box;
}

.contact-form input[type="submit"] {
  width: 100%;
  padding: 20px;
  margin-top: 10px;
  background-color: rgb(13, 14, 14);
  color: rgb(233, 231, 232);
  border:none;
  border-radius: 25px;
  cursor: pointer;
}

.contact-form input[type="submit"]:hover {
  background-color:rgb(96, 118, 118);
}
.h1{
  color: aliceblue;
}
.btn {
  background-color: black;
  border: none;
  
  padding: 15px 20px;
  text-align: center;
  text-decoration: none;
  display: block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.btn:hover {
 
  color: black;
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
                
                  <li><a href="contact.php"><i class="fa fa-fw fa-envelope"></i>Contact us</a></li>
                  <li><a href="view.php"><i class="fa fa-fw fa-eye"></i>View</a></li>
                  <li><a href="home.php"><i class="fa fa-fw fa-home"></i>Home</a></li>
                  <li><a href="index.php"><i class="fa fa-fw fa-home"></i>Logout</a></li>
               </ul>
               </nav>
    <center><h1>Contact Us</h1></center>
    <div class="container">
      

        <form  class="contact-form">
          <label for="name">Name:</label><br>
          <input type="text" id="name" name="name" required><br>
      
          <label for="email">Email:</label><br>
          <input type="email" id="email" name="email" required><br>
      
          <label for="message">Message:</label><br>
          <textarea id="message" name="message" required></textarea><br>
      
          <input type="submit" value="Submit">
          <div class="btn" >
        <a href="index.php" style="color:white;" >Back</a>
   </div>
        </form>
      </div>

</body>    
</html>
<?php
