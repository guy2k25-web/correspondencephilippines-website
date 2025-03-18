<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Midian Sanctuary</title>
  <link rel="stylesheet" href="login.css">
  <link rel="icon" href="images/logo.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<body>
  <nav>
    <img src="images/logo.png" alt="logo" class="logo">
    <ul id="menu-links">
      <a href="index.html">Home</a> 
      <a href="service.html">Services</a>
      <a href="lesson.php">Lesson</a>
      <a href="about.html">About Us</a> 
    </ul>
    <button class="nav-btn"><a href="support.html">Support us</a><img src="images/arrow-white.png" alt="arrow-white"></button> <img src="images/menu.png" alt="menu" class="menu-icon" onclick="toogleMenu()">
  </nav>
  <div class="header">
    <div class="header-content">
  <div class="container" id="signup" style="display:none;">
    <h1 class="form-title">Register</h1>
    <form method="post" action="register.php">
      <div class="input-group">
         <i class="fas fa-user"></i>
         <input type="text" name="fName" id="fName" placeholder="First Name" required>
         <label for="fname">First Name</label>
      </div>
      <div class="input-group">
          <i class="fas fa-user"></i>
          <input type="text" name="lName" id="lName" placeholder="Last Name" required>
          <label for="lName">Last Name</label>
      </div>
      <div class="input-group">
          <i class="fas fa-envelope"></i>
          <input type="email" name="email" id="email" placeholder="Email" required>
          <label for="email">Email</label>
      </div>
      <div class="input-group">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" id="password" placeholder="Password" required>
          <label for="password">Password</label>
      </div>
     <input type="submit" class="btn" value="Sign Up" name="signUp">
    </form>
    <p class="or">
    --------or--------
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="links">
      <p>Already Have Account ?</p>
      <button id="signInButton">Sign In</button>
    </div>
  </div>
  <div class="container" id="signIn">
      <h1 class="form-title">Sign In</h1>
      <form method="post" action="register.php">
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            <label for="email">Email</label>
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            <label for="password">Password</label>
        </div>
        <p class="recover">
          <a href="#">Forget Password</a>
        </p>
       <input type="submit" class="btn" value="Sign In" name="signIn">
      </form>
      <p class="or">
        --------or--------
      </p>
      <div class="icons">
        <i class="fab fa-google"></i>
        <i class="fab fa-facebook"></i>
      </div>
      <div class="links">
        <p>Don't have account yet?</p>
        <button id="signUpButton">Sign Up</button>
      </div>
    </div>
    <script src="script.js"></script>
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
