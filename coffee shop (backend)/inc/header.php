<?php 
session_start();
include("conn/connection.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head class="header">
  <title>Login Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <section class="flex">

      <a href="#home" class="logo"><img src="images/logo.png" alt=""></a>

      <nav class="navbar">
         <a href="index.php">home</a>
         <a href="index.php#about">about</a>
         <a href="index.php#menu">menu</a>
         <a href="index.php#gallery">gallery</a>
         <a href="index.php#team">team</a>
         <a href="index.php#contact">contact</a>
         <a href="login.php">login</a>
      </nav>

      <div id="menu-btn" class="fas fa-bars"></div>

   </section>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <style type="text/css">
  	body{
  		background-color: skyblue;
  	}
  </style>
</head>
<body>

<div class="container">