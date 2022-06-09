<?php
session_start();
if (!isset($_SESSION['email'])) {
       echo "Your Hacked!";
       echo '<script type="text/javerscript">alert("Your Hacked!");</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8" />
       <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
       <meta http-equiv="X-UA-Compatible" content="ie=edge" />
       <link rel="stylesheet" href="style.css">
       <title>Home page</title>
</head>

<body>
       <div class="banner">
              <div class="navbar">
                     <img src="./logo.svg" alt="logo">
                     <ul>
                            <div class="menu-bar">
                                   <ul>
                                          <li class="active"><a href="#"><i class="fa fa-home"></i>Home</a></li>
                                          <li><a href="#"><i user="fa fa-home"></i>Account</a> </li>
                                          <li><a href="#"><i clone="fa fa-home"></i>Products & Services</a>
                                                 <div class="sub-menu-1">
                                                        <ul>
                                                               <li><a href="../products &services/index.html"> Web Designing</a></li>
                                                               <li class="hover-me"><a href="#"> Marketing</a><i class="fa fa-angle-right"></i>
                                                                      <div class="sub-menu-2">
                                                                             <ul>
                                                                                    <li><a href="#"> SEO</a></li>
                                                                                    <li><a href="#"> Social Media</a>
                                                                                           <div class="sub-menu-2">
                                                                                                  <ul>
                                                                                                         <li><a href="../products &services/index.html#footer">Contacts</a></li>
                                                                                                         <li><a href="../products &services/index.html#footer"> Email</a></li>
                                                                                                         <li><a href="www.facebook.com/bonface.gitahi.75/?_rdc=1&_rdr"> Facebook</a></li>
                                                                                                         <li><a href="../products &services/index.html#footer"> Twitter</a></li>
                                                                                                         <li><a href="../products &services/index.html#footer"> Instagram</a></li>
                                                                                                         <li><a href="../products &services/index.html#footer"> Whatsapp</a></li>
                                                                                                  </ul>
                                                                                           </div>
                                                                                    </li>
                                                                                    <li><a href="#"> Website</a></li>
                                                                             </ul>
                                                                      </div>
                                                               </li>
                                                               <li class="hover-me"><a href="#"> Mobile Phones</a> <i class="fa fa-angle-right"></i>
                                                                      <div class="sub-menu-2">
                                                                             <ul>
                                                                                    <li><a href="../products &services/index.html#phone"> Android</a></li>
                                                                                    <li><a href="#"> Iphones</a></li>
                                                                                    <li><a href="#"> Sumsugs</a></li>
                                                                                    <li><a href="../products &services/index.html#headphone"> HeadPhones</a></li>
                                                                                    <li><a href="#"> Laptops</a></li>
                                                                             </ul>
                                                                      </div>
                                                               </li>
                                                        </ul>
                                                 </div>
                                          </li>
                                          <li> <a href="#"><i class="fa fa-phone"></i>About Us</a>
                                                 <div class="sub-menu-1">
                                                        <ul>
                                                               <li><a href="#"> Mssion</a></li>
                                                               <li><a href="#"> Vission</a></li>
                                                               <li><a href="#"> Team</a></li>
                                                               <li><a href="../products &services/index.php#footer"> Contacts</a></li>
                                                        </ul>
                                                 </div>
                                          </li>

                                          <li> <a href="../3D FripRegLogin Design/includes.inc/logout.php"><i class="fa fa-phone"></i>Logout</a> </li>
                                   </ul>

                            </div>

                     </ul>
              </div>
              </ul>
       </div>
       <div>
              <div class="content">
                     <h1>Welcome To our website</h1>
                     <p><?php echo "<h2><i> " . $_SESSION['email'] . "</i></h2>"; ?></p>
                     <div>
                            <button type="button"><i><span></span>Watch More</i></button>
                            <button type="button"><i><span></span>Subscribe</i></button>
                     </div>
              </div>
       </div>
       </div>
</body>

</html>