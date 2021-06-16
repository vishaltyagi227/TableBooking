<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe Biblio Home</title>
    <link rel="stylesheet" href="./Css/style.css" />
    <link rel="stylesheet" href="./Css/home.css" />
    <script type="text/javascript"  src="./javascript/navbar.js" defer></script>
  </head>
  <body class="container full-height-grow">
      <header class="main-header">
        <img src="./image/Logo.svg" alt="logo" class="logo" />
        <nav class="main-nav">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="Menu.php">Menu</a></li>
            <li><a href="Reservation.php">Reservation</a></li>
            <?php
                session_start();
                if(!isset($_SESSION['username']))
                {
                    
                  echo "<li><a href='Signin.php'>SignIn</a></li>
                  <li><a href='Signup.php'>SignUp</a></li> "; }
                  else{
                   echo " <li><a href='logout.php'>Logout</a></li>"; 
                  
                  }
                   
                
            ?>
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
      <div class="content">
        <div class="heading">
          <h1>
            WELCOME TO <span class="modifiy">CAFE BIBLIO</span><br />
            <span class="add">Vijay Nagar, NEW Delhi</span>
          </h1>
        </div>
        <div class="sub-content">
          Cafe biblio is a book cafe where you can enjoy with your family,
          friends or even alone reading a massive selection of books to browse
          to your heart’s content.
        </div>
        <div class="btn">
          <a href="tableBook.php">FIND A TABLE</a>
          <a href="About.php">ABOUT US</a>
        </div>
      </div>
    </div>
  </body>
</html>
