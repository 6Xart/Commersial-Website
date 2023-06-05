<?php

include 'conn/connection.php'; 
$db_name = 'mysql:host=localhost;dbname=contact_db';
$username = 'root';
$password = '';

$conn = new PDO($db_name, $username, $password);

if(isset($_POST['send'])){

   $user_email = $_POST['user_email'];
   $user_email = filter_var($user_email, FILTER_SANITIZE_STRING);
   $user_password = $_POST['user_password'];
   $user_password = filter_var($user_password, FILTER_SANITIZE_STRING);
  

   $select_contact = $conn->prepare("SELECT * FROM `users` WHERE user_email = ?  AND user_password = ?");
   $select_contact->execute([$user_email, $user_password]);

   

}

?>

<!DOCTYPE html>
<html lang="en">
head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Complete Responsive Coffee Shop Website Design</title>
<

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>



<header class="header">

   <section class="flex">

      <a href="index.php" class="logo"><img src="images/logo.png" alt=""></a>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="index.php#about">about</a>
         <a href="index.php#menu">menu</a>
         <a href="index.php#gallery">gallery</a>
         <a href="index.php#team">team</a>
         <a href="index.php#contact">contact</a>
         <a href="loginpage.php">login</a>
         <a href="sign_up.php">SignUp</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>



<section  class="contact" id="contact">
<div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>Login</h3>
   </div>

   <div class="row">

   <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

		
		<form action="" method="post">
			
				
				<input type="email" name="user_email" class="box" placeholder="enter your email" value="<?php if(isset($_COOKIE["user_email"])) { echo $_COOKIE["user_email"]; } ?>" required>
			
				<input type="password" name="user_password" class="box" placeholder="enter your password"  value="<?php if(isset($_COOKIE["user_password"])) { echo $_COOKIE["user_password"]; } ?>" required>
			
			
		
		<input type="submit" name="login"  value="Login" class="btn"   >
			
		</form>
	
	</div>
</div>


</div>
</section>


<section class="footer">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>our email</h3>
         <p>Moathosaily@gmail.com</p>
         <p>Mi72h72@gmail.com</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3>
         <p>07:00am to 11:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>shop location</h3>
         <p>Karabuk, Turkyie - 78000</p>
      </div>

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>our number</h3>
         <p>+905539473220</p>
         <p>+905523226493</p>
      </div>

   </div>

   
</section>


<script src="js/script.js"></script>

</body>
</html>





