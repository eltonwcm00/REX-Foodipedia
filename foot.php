<?php
    //include "db-connect.php";
    ob_start();

    //error_reporting(E_ERROR | E_PARSE);

    if(isset($_SESSION['google_id']) /*||  $_SESSION["email"] == true*/){

        echo $id = $_SESSION['google_id']; 
        $google = $_SESSION['google_id'];
        $convert_google_id = mysqli_query($connect, "SELECT email FROM user_acc WHERE google_id='$id'");
        $output_change = mysqli_fetch_assoc($convert_google_id);
        
        echo $output_change["email"];

        if ($converted_google_output = $output_change["email"]){
            $_SESSION['email'] = $output_change["email"];
        }else if($var_email_login = $_SESSION['email']){
            $_SESSION['email'];
        }


        if(!empty($_SESSION['email'])){
            echo "has session";
        }else{
            echo "no session";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Footer | REX Foodipedia</title>
    <link rel="icon" type="image/png" href= "img/logo/logo.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />


<link rel="stylesheet" href="css/foot.css">

<style>
    .logofoot{
        width: 15%;
        height: 100px;
    }
</style>
</head>
<body>
    
    <footer>
      <div class="container">
        <div class="col-left">
            <a href="index"><img src="img/logo/logo.png" alt="REX Foodipedia Logo"  class="logofoot"></a>
            <p><h3>REX Foodipedia</h3>
                <br>
                <h4>Kita Jaga Kita</h4>
                <p>
                    Multimedia University, <br>
                    Persiaran Multimedia, <br>
                    63100 Cyberjaya, <br>
                    Selangor, Malaysia <br>
                    
                </p></p>
            <!--ul class="social-media-list">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fas fa-basketball-ball"></i></a></li>
                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul-->
        </div>
        <div class="col-right">
            <ul class="links-container">
                <h4>How to use</h4>
                <li><a href="how-to-use">How To Use</a></li>
                <!--li><a href="#">Support</a></li>
                <li><a href="#">Performance</a></li>
                <li><a href="#">Scalibility</a></li-->
                <br>
                <h4>Menu</h4>
                <li><a href="menu.php">View Our Menu</a></li>
            </ul>
            <ul class="links-container">
                <h4>About Us</h4>
                <li><a href="contact-us.php">Contact Us</a></li>
                <li><a href="about-us.php">Our Background</a></li>
            </ul>
            <ul class="links-container">
                <h4>Quick Links</h4>
        <?php
                if(!empty($_SESSION['email'])){
                    echo '<li><a href="order-history.php">My Orders</a></li>';
                    echo '<li><a href="user-profile.php">Profile</a></li>';
                }
        ?>
                <li><a href="user-rating.php">Feedback To Us</a></li>
            </ul>
        </div>
      </div>
   </footer>

</body>
</html>