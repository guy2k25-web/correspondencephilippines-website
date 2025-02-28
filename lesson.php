<?php
session_start();
include("connect.php");

?>
<!DOCTYPE html>
<html>
<head>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Midian Sanctuary</title>
  <link rel="stylesheet" href="lesson.css">
  <link rel="icon" href="images/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>
<body>
<nav>
    <img src="images/logo.png" alt="" class="logo">
    <ul id="menu-links">
      <a href="index.html">Home</a>
    <a href="service.html">Services</a>
    <a href="lesson.php">Lesson</a>
    <a href="about.html">About Us</a>
    </ul>
    <button class="nav-btn"><a href="support.html">Support us</a><img src="images/arrow-white.png" alt="arrow-white"></button>
    <img src="images/menu.png" alt="menu" class="menu-icon" onclick="toogleMenu()">
  </nav>
    <div class="header">
      <div class="header-content">
      </div>
      <img src="images/user.png" alt="user" class="user-img">
</div>
<?php 
       if(isset($_SESSION['email'])){
        $email=$_SESSION['email'];
        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
        while($row=mysqli_fetch_array($query)){
            echo $row['firstName'].' '.$row['lastName'];
        }
       }
       ?>
<script>
  let navbar = document.querySelector('nav');
  let menulinks = document.getElementById("menu-links");
  
  function toogleMenu(){
      menulinks.classList.toggle('show-menu');

  }

window.onscroll = function(){
  if(window.scrollY > 0){
      navbar.style.background = '#eefff9';
  }else{
      navbar.style.background = 'transparent';
  }

}
</script>
</body>
</html>