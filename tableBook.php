<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TableBooking</title>
    <link rel="stylesheet" href="./Css/style1.css" />
    <link rel="stylesheet" href="./Css/tablebook.css" />
    <script type="text/javascript"  src="./javascript/navbar.js" defer></script>
    <script type="text/javascript"  src="./javascript/booktableValidation.js" defer></script>
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
        <section class="tableBook-main-section content">
        <?php
                          if(isset($_SESSION['bookverify']))
                          {
                              echo"<span style='color:lightgreen;'> Verify Email to Confirm the Booking</span>";
                              unset($_SESSION['bookverify']);
                            }
                          ?> 
                    <form class="signin-form form-style" action="dbtable.php" method="post">
                        <div class="table-detail">
                            <div class="input-group" >
                            <select name="people">
                                <option value="1">1 People</option>
                                <option value="2" selected>2 People</option>
                                <option value="3">3 People</option>
                                <option value="4">4 People</option>
                                <option value="5">5 People</option>
                                <option value="6">6 People</option>
                                <option value="6">8 People</option>
                            </select>
                            </div>
                            <div class="input-group">
                            <select name="date"> 
                                <option value="none">Date</option>
                               <?php
                                     date_default_timezone_set("Asia/Calcutta");
                                     for($i=0;$i<34;$i++){
                                     $datestamp= strtotime("+$i Days");
                                        $bdate=date('y/m/d',$datestamp);
                                         $date_num =date('d',$datestamp);
                                         $month_num =date('m',$datestamp);
                                         $week_day=date('l',$datestamp);
                                         $month_word=date('M', mktime(0,0,0,$month_num,10));
                                         if(!($week_day=="Sunday"))
                                         {
                                            echo "<option value='$bdate'>$date_num $month_word </option>";
                                         } 
                                     }
                               ?>
                            </select>
                            <span class="validation-alert" id="b-date"></span>
                        </div>
                        <div class="input-group">
                            <select name="time">
                                <option value="none">Time</option>
                                <?php
                                    date_default_timezone_set("Asia/Calcutta");
                                    for($i=1;$i<25;$i++){
                                    $datestamp= strtotime("+$i hours");
                                    $hr=date("H",$datestamp);
                                    if($hr>8 && $hr<=18)
                                    {
                                        $mi=sprintf("%02d",0);
                                        echo "<option>$hr:$mi</option>";
                                        $mi=30;
                                        echo "<option>$hr:$mi</option>";
                                    }
                                }
                                 ?>
                            </select>
                            <?php
                          if(isset($_SESSION['dateverify']))
                          {
                              echo"<span class='warning'> Time is Invalid</span>";
                              unset($_SESSION['dateverify']);
                            }
                          ?>
                            <span class="validation-alert" id="b-time"></span>
                        </div>
                        </div>
                        <div class="person-detail">
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
                            <label>Mobile No.</label>
                            <input type="text" required id="mobile" name="mobile">
                            <span class="validation-alert" id="u-mobile"></span>
                          </div>
                        </div>
                        <div class="input-group button">
                            <button type="submit" class="btn" name="submit">BOOK TABLE</button>
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
