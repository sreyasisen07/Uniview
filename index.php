<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="mystyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<div class="header">
  <a href="#default" class="logo">UniView</a>
  <div class="header-right">
    <a class="active" href="#home">Home</a>
    <a  href="gallery.html">Gallery</a>
    <a href="contact.html">Contact</a>
    <a href="about.html">About us</a>
    <button onclick="document.location='login.html'" class="btn login">log in</button>
<button onclick="document.location='signup.html'"  class="btn signup">sign up</button>

<div class="wrap">
  <div class="search">
     <input type="text" class="searchTerm" placeholder="What are you looking for?">
     <button type="submit" class="searchButton">
       <i class="fa fa-search"></i>
    </button>
  </div>
</div>
</div>


     
  </div>


<div class="padd" >
  
 
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <p>Some text some text some text some text..</p>
  <a href="logout.php">Logout</a>
  
</div>

<div class="footer">
  <p>Footer</p>
</div>

</body>
</html>
