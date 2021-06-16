<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SignUp</title>
    <link rel="stylesheet" href="./Css/style1.css" />
    <link rel="stylesheet" href="./Css/signup.css" />
    <script type="text/javascript"  src="./javascript/navbar.js" defer></script>
    <script type="text/javascript"  src="./javascript/formvalidSignup.js" defer></script>
  </head>
  <body class="full-height-grow">
      <div class="container full-height-grow">
        <header class="main-header">
            <img src="./image/Logo.svg" alt="logo" class="logo" />
            <nav class="main-nav">
                <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Menu.php">Menu</a></li>
                <li><a href="Reservation.php">Reservation</a></li>
                <li><a href="Signin.php">SignIn</a></li>
                <li><a href="#">SignUp</a></li>
                </ul>
            </nav>
            <div class="burger">
                <a href="#" class="toggle-btn">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
                </a>
            </div>
        </header>
        <section class="signup-main-section content">
                  <h1 class="main-text">“Drink <span class="title1">tea,</span> <br>
                    read<span class="title2"> books,</span><br>be happy.”</h1>         
                      <form class="signin-form" action="usersignup.php" method="post">
                      <?php
                          if(isset($_SESSION['signupverify']))
                          {
                              echo"<span class='warning'> This Email is Already Registered</span>";
                              unset($_SESSION['signupverify']);
                            }
                          ?> 
                      <div class="input-group">
                            <label>Name</label>
                            <input type="text" required id="name" name="name">
                            <span class="validation-alert" id="u-name"></span>
                          </div>
                          <div class="input-group">
                            <label>Email Id</label>
                            <input type="email" required id="email" name="email">
                            <span class="validation-alert" id="u-email"></span>
                          </div>
                          <div class="input-group">
                            <label>Password</label>
                            <input type="password" required id="pswd" name="password">
                            <span class="validation-alert" id="u-pswd"></span>
                          </div>
                          <div class="input-group">
                            <label>Confirm Password</label>
                            <input type="password" required id="cpswd">
                            <span class="validation-alert" id="u-cpswd"></span>
                          </div>
                          <div class="input-group">
                            <button type="submit" class="btn" name="submit">SignUp</button>
                          </div>
                      </form>
        </section>
    </div>  
    <footer class="main-footer">
        <div class="container">
            <nav class="footer-nav">
                <ul>
                    <li><a href="About.php">About Us</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </nav>
            <nav class="footer-nav">
                <ul>
                    <li>
                        <a href="#" class="social-link">
                        <img src="./image/instagram.svg">
                        Instagram</a>
                    </li>
                    <li> <a href="#" class="social-link">
                        <img src="./image/fb.svg">
                        Facebook</a>
                    </li>
                </ul>
            </nav>
        </div>
    </footer>
  </body>
</html>
