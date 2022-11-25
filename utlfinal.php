<?php
include 'db_connection.php';

if(isset($_POST['submit'])){
 $email=$_POST['email'];
 $phone=$_POST['phone'];
 $name=$_POST['name'];
 $message=$_POST['message'];
 
 $query = "INSERT INTO `messages`( `name`,`phone`,`email`, `message`) VALUES ('$name','$phone','$email','$message')";
 $result = mysqli_query($conn, $query);
 if($result){
   echo "<script> alert('Your details has been recorded successfully')</script> ";
 }else{
    echo "<script> alert('something went wrong')</script> ";
 }
}
?> 
<!DOCTYPE html>
<html>
<title> Uniface Text Labs </title>
<body>
<nav class="navbar background">
<ul class ="nav-list">
<div class="logo"><img src="C:\Users\ashme\Desktop\DSW_PROJECT\WhatsApp Image 2022-11-14 at 23.40.42.jpg"></div>
<li><a href="/" > Home</a></li>
<li><a href="certificate_new.php"> Certificates </a></li>
<li><a href="partner_with_us.php"> Partner With Us </a></li>
<li><a href="login_register.php" > <?php !empty($_SESSION['is_logged'])?'':'Login' ; ?> </a></li>
</ul>

</nav>

<section class="background firstsection">
<div class="box-main">
<div class="firsthalf">
<br>
<br>
<br>
<p class= "text-big">Make Your Product Market leader</p>
<p class= "text-small">In the era of rising entrepreneurship, there is a rat race happening between various rising startups and other
developing companies who are urging to get their new products certified as soon as possible. In order to fulfill their urge and demand,
we are here to solve your problem by providing you the best certification from the top leading certifying organizations at minimal rates and with best discounts.</p>
<div class="buttons">
<button class="btn" onclick="window.location.href='https://www.youtube.com/watch?v=Ti6fUkIbnUU&t=20s';">Subscribe</button><img src="https://pngimg.com/uploads/subscribe/subscribe_PNG52.png"  width="90" height="35"><br>
<button class="btn" onclick="window.location.href='https://www.youtube.com/watch?v=Ti6fUkIbnUU&t=20s';">Watch Video</button><img src="https://s3-ap-south-1.amazonaws.com/saniservice/wp-content/uploads/2019/01/29122533/play2.png" width="90" height="35"><br>
<button class="btn" onclick="window.location.href='https://www.instagram.com';">Follow Us</button><img src="https://i.pinimg.com/originals/d6/31/5f/d6315f37f2262496228462ef732e83b1.jpg" width="90" height="35">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<p class= "text-big">About Us</p>
<p class= "text-sm">UTL (Uniface Test Lab) is a rapidly growig start-up company, which coordinate between company and certifier organisations, to provide best 
deals on required certifications for a client. It is a idea developed by Ananya Mittal, Ashmeet Kur, Juhi Sharma and Manya Jain, who are the students of Second year-B9 Batch
of Jaypee Institute of Information and Technology. We made this project, to provide best deals to our customers and hassel free certifications and provides many choices as per ther requirement.</p>
</div>
</div>
</section>

<section class="secright">
<p class ="text-big"> Top Certification Partners Are:</p>
</section>
<div class="pics">
<img src="https://media-exp1.licdn.com/dms/image/C4D0BAQE8bqUDvzOdTw/company-logo_200_200/0?e=2159024400&v=beta&t=hpNIly4f4Rql1KojXlrOLVwzaQ6ux9fJAjwDjupmrBY" >
<img src="https://th.bing.com/th/id/OIP.I5KQTgLRTfxbMBFKAbkCUwHaIQ?pid=ImgDet&rs=1">
<img src="https://d2q79iu7y748jz.cloudfront.net/s/_squarelogo/44d926bd68b13084a1ee67c36ac59b7e">
<img src="https://www.kwk-resistors.in/wp-content/themes/storeone/images/UL-Certification.jpg">
<img src="https://th.bing.com/th/id/OIP.YTRWK2bkDk6CJKRLHy_R5wAAAA?pid=ImgDet&rs=1">
<img src="https://1.bp.blogspot.com/-VxS83y6xO9A/YRIjw5wutYI/AAAAAAAABRg/3eXdC48l83kabpCQcHFkIZIHQskGwpErACLcBGAsYHQ/s312/download%2B%252815%2529.png"><br>
<img src="https://www.wowo.com/wp-content/uploads/2016/07/EcolabLogo.jpg">
<img src="https://th.bing.com/th/id/R.2a3c8d2de9e76a7b01d5babca3e20473?rik=PAslYhjikVFnMA&riu=http%3a%2f%2fwww.labgo.in%2fupload%2flab-logo%2facquia_marina_logo1.jpg&ehk=9vKX58xBwd%2bDx8qO4bnBlDZmEHmJx4PBdLKi9FoU4tI%3d&risl=&pid=ImgRaw&r=0"  width="150" height="60">
<img src="https://mms.businesswire.com/media/20181125005167/en/692081/23/EUROFINS_jpg_square.jpg">
<img src="https://yt3.ggpht.com/a/AATXAJwiGRq3Tt6ZAH0Ep_9KfbORb-BYODEq3lUhhpEl=s900-c-k-c0xffffffff-no-rj-mo">
<img src="https://opennetworking.org/wp-content/uploads/2017/10/cnlabs-logo.jpg">
<img src="https://www.sdmmag.com/ext/resources/Scally/MKS-2016/icsa-labs.jpg?1464295799">
</div>
<br>
<br>
<br>
<section class="contact">
<h1 class="text-center">&nbsp;&nbsp;Contact Us</h1><br>
<div class="form">
<form action="" method="post">
<input class="form-input" type="text" name="name" id="name" placeholder="Enter your name">
<input class="form-input" type="text" name="phone" id="phone" placeholder="Enter your phone">
<input class="form-input" type="email" name="email" id="email" placeholder="Enter your email">
<textarea class="form-input" type="text" name="message" id="text" cols="30" rows="10" placeholder="Elaborate your concern"></textarea>
<input type="submit" name="submit" value="submit">
</form>
</div>
<p><img src="https://cdn0.iconfinder.com/data/icons/activity-2/32/116-512.png" width="25" height="30">&nbsp;&nbsp;23-G, AKG Marg, <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;connaught place, Centeral Delhi </p>
<p><img src="https://image.shutterstock.com/image-vector/ringing-phone-icon-retro-symbol-260nw-1607603791.jpg" width="25" height="30">&nbsp;&nbsp;011-22322456, 678, 890, 453</p>
<p><img src="https://th.bing.com/th/id/OIP.nnlofhJ162kYnLTTCC-pegAAAA?pid=ImgDet&w=190&h=190&rs=1" width="25" height="30">&nbsp;&nbsp;UTL@gmail.com</p>
</section>
<footer style="background-color:#BFC9CA;">
<h3>&nbsp;&nbsp;Follow Us On</h3>
<p>&nbsp;&nbsp;&nbsp;<img src="https://i.pinimg.com/originals/d6/31/5f/d6315f37f2262496228462ef732e83b1.jpg" width="35" height="40">&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://i7.pngguru.com/preview/882/923/718/youtube-logo-you-tube-logo-png-image.jpg" width="35" height="40">&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://e7.pngegg.com/pngimages/892/42/png-clipart-computer-icons-desktop-social-media-logo-twitter-internet-logos.png" width="35" height="40">&nbsp;&nbsp;&nbsp;&nbsp;
<img src="https://cdn.imgbin.com/1/22/10/imgbin-telegram-logo-computer-icons-telegram-white-paper-plane-illustration-Nb0xZ0j5gBDXLVHq4rUyPiXkM.jpg" width="35" height="40">
</p>
</footer>
<footer style="background-color:#BFC9CA;">
<br>
Copyright &copy;2027 - All rights reserved
</footer>
</section>

<style> 
*{
margin:0;
padding:0;
}
.logo{
width:15%;
display:flex;
justify-content:center;
align-items:center;
}
.logo img{
width:50%;
border:1px solid black;
}
.navbar{
display:flex;
align-items: center;
justify-content: center;
position: sticky;
top: 0;
cursor: pointer;
}
.nav-list{
background-color:#9fa8da;
width:70%;
display:flex;
align_items:center;}
.nav-list li{
list-style:none;
padding: 26px 30px;
}
.nav-list li a{
text-decoration: none;
color:white;
}
.nav-list li a:hover{
color:green;
}
.rightNav{
background-color:#9fa8da;
width:30%;
height: 70px;
text-align:center;
}
#search{
padding:5px;
font-size:17px;
border: 2px solid grey;
border-radius:9px;
margin-top: 20px;
}
.background{
background-image :url("https://smarthrmsolutions.com/wp-content/uploads/2021/03/img1-04-768x777.png"), url("https://www.schemecolor.com/wallpaper?i=42140&og");
background-size: cover;
background-repeat: no-repeat, repeat;
background-blend-mode: darken;
}
.box-main{
display:flex;
justify-content:center;
align-items:center;
color:black;
font-family: "Segoe UI",Tahona,Geneva,Verdana,sans-serif;
max-width:70%;
margin:auto;
height : 60%;
}
.firstsection{
height:200vh;
}
.firsthalf{
width:75%;
flex-direction:column;
justify-content;
}
.text-big{
font-size: 50px;
}
.text-small{
font-size:25px;
color:#840678;
}
.text-sm{
font-size:25px;
color:#000000;
}

.btn{
padding: 9px 20px;
margin: 3px 0;
border: 2px solid white;
border-radius:8px;
font-size:16px;
background-color: #AAA7B8;
}
.secright{
height: 200px;
display: flex;
align-items: center;
justify-content:center;
max-width:80%;
margin: auto;
}
.pics img{
width: 15%;
height:5%;
border: 2px solid white;
border-radius:8px;
height: 200px;
align-items: center;
justify-content:center;
max-width:80%;
margin: auto;
}
.contact{
background-color: #5D6D7E;
height:733px;
}
.text-center{
text-align:center;
padding:30px;
font-size: 40px;
font-family:'Ubuntu',sans-serif;
}
.form{
max-width:500px;
margin:20px auto;
}
.form-input{
margin:10px 0;
padding 5px 3px;
width:100%;
font-size:18px;
border:2px solid grey;
border-radius:6px;
}
</style>

</body>
</html>