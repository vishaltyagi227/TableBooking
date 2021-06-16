<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Reservation</title>
    <link rel="stylesheet" href="./Css/style1.css" />
    <link rel="stylesheet" href="./Css/reservation.css" />
    <script type="text/javascript"  src="./javascript/navbar.js" defer></script>
</head>
  <body class="full-height-grow">
      <div class="container full-height-grow">
        <header class="main-header">
            <img src="./image/Logo.svg" alt="logo" class="logo" />
            <nav class="main-nav">
                <ul>
                <li><a href="Home.php">Home</a></li>
                <li><a href="Menu.php">Menu</a></li>
                <li><a href="#">Reservation</a></li>
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
        <section class="reservation-main-section content">
        <?php
                session_start();
             if(!isset($_SESSION['reserveverify']))
             {
                 
                 echo "<span class='warning'> You have to login to see Information</span>";
               }
               else{
                
                    
                $username= $_SESSION['username'];
                
                $ser="localhost";
                $u="root";
                $p="";
                $db="cafebiblio";
                $con=new mysqli($ser,$u,$p,$db);
                $sq="select * from userinformation where email='$username'";
                $rs=$con->query($sq);
                $row=$rs->fetch_array();
                $name=$row[0];
                $email=$row[1];

                   echo "<div class='profile'>
                   <br><br><span>Name:</span><span> $name</span><br><br>
                   <span>Email:</span><span>$email</span><br><br>
                   <a href='#' class='forget'>Change Password</a>
                </div>  ";  
               
                echo "<h2>Previous Booking</h2>  
                <div class='pre-book'>
                <div class='hist'>
                    <p>People</p>
                    
                    
                </div>
                <div class='hist'>
                   <p>Booking Date</p>
                  
               </div>
               <div class='hist'>
               <p>Booking Time</p>
              
               </div>
               <div class='hist'>
                   <p>Status</p>
               </div>
            </div>
                ";
                $sq="select People, DATE_FORMAT(Date,'%d/%m/%y'),Time,Status from bookinginfo  where email='$username'";
                $rs=$con->query($sq);
                if($rs->num_rows>0){
                    while($row=$rs->fetch_array())
                    {
                        $p= $row[0];
                        $d=$row[1];
                        $t=$row[2];
                        $s=$row[3];
                    
                  echo "  
                  <div class='pre-book'>
                    <div class='hist'>
                        
                        <p>$p</p>
                        
                    </div>
                    <div class='hist'>
                       
                       <p>$d</p>
                   </div>
                   <div class='hist'>
                   
                   <p>$t</p>
                   </div>
                   <div class='hist'>
                       <p>$s</p>
                   </div>
                </div>";
            }
        }
          
                echo "
           </section>
       </div>  
       <footer class='main-footer'>
           <div class='container'>
               <nav class='footer-nav'>
                   <ul>
                       <li><a href='About.php'>About Us</a></li>
                       <li><a href='Contact.php'>Contact</a></li>
                   </ul>
               </nav>
               <nav class='footer-nav'>
                   <ul>
                       <li>
                           <a href='#' class='social-link'>
                           <img src='./image/instagram.svg'>
                           Instagram</a>
                       </li>
                       <li> <a href='#' class='social-link'>
                           <img src='./image/fb.svg'>
                           Facebook</a>
                       </li>
                   </ul>
               </nav>
           </div>
       </footer>
     </body>
   </html>
   ";
               }
        ?>
             