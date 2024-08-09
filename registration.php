<!DOCTYPE html>
<html>
<head>
<title>registration</title>
<link rel="stylesheet" href="i.css">
<style>
body{
    background: url("static/img/bakery1.jpg");
    display: flex;
    height: 100vh;
    justify-content: center;
    align-items: center;
    padding: 10px; 
}
.container{
    max-width: 700px;
    width: 100%;
    background: brown;
    padding: 25px 30px;
    border-radius: 5px;

}
.container .title{
    font-size: 25px;
    font-weight: 500;
    position: relative;
}

.container form .user-details{
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 20px 0 12px 0;
}
form .user-details .input-box{

    margin-bottom: 15px;
    width: 700px;
    
}
.user-details .input-box input{
    height: 45px;
    width: 100%;
    outline: none;
    border-radius: 5px;
    border: 1px solid #ccc;
    padding-left: 15px;
    font-size: 16px;
    border-bottom-width: 2px;
    transition: all 2s ease;

}
.user-details .input-box input:focus,
.user-details .input-box input:valid{
    border-color: #490553;
}



   
.form input[type="radio"]{
    
}
form .button{
    height: 45px;
    margin: 45px 0;

}
form .button input{
    height: 100%;
    width: 100%;
    outline: none;
    color: #fff;
    border: none;
    font-size: 18px;
    font-weight: 500;
    border-radius: 5px;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #5b0e65, #ac45be);;
    
    
}
form .button input:hover{
  background: linear-gradient;
}
 .btn {
  background-color: black;
  border: none;
  
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
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
     
     <form action="connect.php" method="POST">
      <div class="container">
        <p align="left">
            <div class="title">Registration </div><br>
      <div class="user-details">
                <div class="input-box">
                  <span class="details">Full name</span>
                  <input type="text" placeholder="enter your name" name="fullname" required>
                </div>
                <div class="input-box">
                  <span class="details">DoB</span>
                  <input type="date"required name="dob"required>
                </div>
                <div class="input-box">
                  <span class="details">Email</span>
                  <input type="email" placeholder="enter your email" name="email"required>
                </div>
                <div class="input-box">
                  <span class="details">Password</span>
                  <input type="password" placeholder="enter your password" name="password" id="password" required/>
                </div>
              <div>
        <span class="gender-title">Gender</span>
        <input type="radio" name="gender" value="m"> Male
        <input type="radio" name="gender" value="f">Female
        <input type="radio" name="gender" value="o">other
      </div><br><br>
        </div><br><br>
        <div class="btn">
         <input type="submit" value="Register">
         
        </div>
        <div class="btn" >
        <a href="index.php" style="color:white;" >Back</a>
</div>
        
</div>
</div>
</div>
</form>
</body>
</html>