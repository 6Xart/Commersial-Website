<?php

$db_name = 'mysql:host=localhost;dbname=contact_db';
$username = 'root';
$password = '';

$conn = new PDO($db_name, $username, $password);

if(isset($_POST['send'])){

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);
   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);
   $guests = $_POST['guests'];
   $guests = filter_var($guests, FILTER_SANITIZE_STRING);

   $select_contact = $conn->prepare("SELECT * FROM `contact_form` WHERE name = ? AND number = ? AND guests = ?");
   $select_contact->execute([$name, $number, $guests]);

   if($select_contact->rowCount() > 0){
      $message[] = 'message sent already!';
   }else{
      $insert_contact = $conn->prepare("INSERT INTO `contact_form`(name, number, guests) VALUES(?,?,?)");
      $insert_contact->execute([$name, $number, $guests]);
      $message[] = 'message sent successfully!';
   }

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

      <a href="#home" class="logo"><img src="images/logo.png" alt=""></a>

      <nav class="navbar">
         <a href="#home">home</a>
         <a href="#about">about</a>
         <a href="#menu">menu</a>
         <a href="#gallery">gallery</a>
         <a href="#team">team</a>
         <a href="#contact">contact</a>
         <a href="loginpage.php">login</a>
         <a href="sign_up.php">SignUp</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>

</header>



<div class="home-bg">

   <section class="home" id="home">

      <div class="content">
         <h3>Dollars Coffee </h3>
         <p> A cup of our coffee = A day of happiness.</p>
         <a href="#about" class="btn">about us</a>
      </div>

   </section>

</div>



<section class="about" id="about">

   <div class="image">
      <img src="images/about-img.svg" alt="">
   </div>

   <div class="content">
      <h3>A cup of coffee can complete your day</h3>
      <p>Today's good mood is sponsored by coffee..</p>
      <a href="#menu" class="btn">our menu</a>
   </div>

</section>



<section class="facility">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our facility</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/icon-1.png" alt="">
         <h3>varieties of coffees</h3>
         <p>Three cups of coffee a day keeps the doctor away!</p>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>coffee beans</h3>
         <p>If you are not coffee, chocolate or bacon, I’m going to need you to go away.</p>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>breakfast and sweets</h3>
         <p>“Sometimes I go hours without drinking coffee…it’s called sleeping.</p>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>read to go coffee</h3>
         <p>Life without coffee is like something without something…sorry, I haven’t had any coffee yet.</p>
      </div>

   </div>

</section>



<section class="menu" id="menu">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>popular menu</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/menu-1.png" alt="">
         <h3>love you coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu-2.png" alt="">
         <h3>Cappuccino</h3>
      </div>

      <div class="box">
         <img src="images/menu-3.png" alt="">
         <h3>Mocha coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu-4.png" alt="">
         <h3>Frappuccino</h3>
      </div>

      <div class="box">
         <img src="images/menu-5.png" alt="">
         <h3>black coffee</h3>
      </div>

      <div class="box">
         <img src="images/menu-6.png" alt="">
         <h3>love heart coffee</h3>
      </div>

   </div>

</section>



<section class="gallery" id="gallery">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our gallery</h3>
   </div>

   <div class="box-container">
      <img src="images/gallery-1.webp" alt="">
      <img src="images/gallery-2.webp" alt="">
      <img src="images/gallery-3.webp" alt="">
      <img src="images/gallery-4.webp" alt="">
      <img src="images/gallery-5.webp" alt="">
      <img src="images/gallery-6.webp" alt="">
   </div>

</section>



<section class="team" id="team">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>our team</h3>
   </div>

   <div class="box-container">

      <div class="box">
         <img src="images/Moath1.jpeg" alt="">
         <h3>Moath Adel Mousa Osaily</h3>
      </div>
      <div class="box">
         <img src="images/Osamah.jpeg" alt="">
         <h3>Osamah Radman Ahmed Hamid</h3>
      </div>
      <div class="box">
         <img src="images/Omar.jpeg" alt="">
         <h3>Omar Jalal Yousef Ayyash</h3>
     

   </div>

</section>

<section class="contact" id="contact">

   <div class="heading">
      <img src="images/heading-img.png" alt="">
      <h3>contact us</h3>
   </div>

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>book a table</h3>
         <input type="text" name="name" required class="box" maxlength="20" placeholder="enter your name">
         <input type="number" name="number" required class="box" maxlength="20" placeholder="enter your number" min="0" max="9999999999" onkeypress="if(this.value.length == 10) return false">
         <input type="number" name="guests" required class="box" maxlength="20" placeholder="how many guests" min="0" max="99" onkeypress="if(this.value.length == 2) return false">
         <input type="submit" name="send" value="send message" class="btn">
      </form>

   </div>

</section>


<section class="footer">

   <div class="box-container">

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>our email</h3>
         <p>Moathosaily@gmail.com</p>
         <p>Mi72h72@gmail.com</p>
         <p>ooxart1@gmail.com</p>
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
         <p>+905551547998</p>
      </div>

   </div>

   
</section>

<script src="js/script.js"></script>

</body>
</html>