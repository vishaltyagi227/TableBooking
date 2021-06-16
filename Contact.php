<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="stylesheet" href="./Css/style1.css" />
    <link rel="stylesheet" href="./Css/contact.css" />
    <script type="text/javascript"  src="./javascript/navbar.js" defer></script>
    <script type="text/javascript"  src="./javascript/contactformvalid.js" defer></script>
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
                <li><a href="Signup.php">SignUp</a></li>
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
        <section class="contact-main-section content">
                  <h1 class="main-text">Contact<br> <span class="title1">Cafe Biblio</span></h1>         
                      <form class="signin-form">
                        <div class="input-group">
                            <label>Name</label>
                            <input type="text" required id="name">
                            <span class="validation-alert" id="u-name"></span>
                          </div>
                          <div class="input-group">
                            <label>Email Id</label>
                            <input type="email" required id="email">
                            <span class="validation-alert" id="u-email"></span>
                          </div>
                          <div class="input-group">
                            <label>Message</label>
                            <textarea class="msg-field" required></textarea>
                          </div>
                          <div class="input-group">
                            <button type="submit" class="btn">SUBMIT</button>
                          </div>
                      </form>
        </section>
    </div>  
    <footer class="main-footer">
        <div class="container">
            <nav class="footer-nav">
                <ul>
                    <li><a href="About.php">About Us</a></li>
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
