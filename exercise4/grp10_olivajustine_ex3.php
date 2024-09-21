<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
<style>
  * {
     margin: 0; 
     padding: 0; 
  }
  body {
    width: 100%;
    height: 100%;
    font-family: Arial;
    position: relative;
    background-color: #000;
    color: white;
  
  }
  .container {
    width: 600px;
    height: 600px;
    border: 1px solid;
    border-color: red;
    margin: auto;
    text-align: center;
    line-height: 50px;
    padding-top: 120px;
    margin-top: 150px;

    color: white;
  }

  /* GET css styling   */
  .get {
    padding: 5px;
    position: relative;
    right: 150px;
    margin: auto;
  }
  .get-firstname {
    display: block;
    bottom: 70px;
    position: absolute;
    padding: 5px;
    color: #99f0ca;
    margin-left: 15px;
  }
  .click-get {
    padding: 5px 8px 5px 8px;
    background-color: #99f0ca;
    transition: 0.3s ease all;
  }
  .click-get:hover {
    background-color: #53edaa;
    transform: translateY(-3px);
  }

  /* Post css sytle */

  .post {
    padding: 5px;
    position: relative;
    left: 150px;
    bottom: 160px;
    margin: auto;
    width: 400px;
  }
  .post-lastname {
    display: block;
    bottom: 30px;
    position: absolute;
    padding: 5px;
    color: #ff7844;
    margin-left: 15px;
    
  }
  .click-post {
    padding: 5px 8px 5px 8px;
    background-color: #ff7844;
    transition: 0.3s ease all;
  }
  .click-post:hover {
    background-color: #f0571d;
    transform: translateY(-3px);
  }

</style>

</head>
<body>



<div class = "container">
<?php

  echo file_exists("sample.txt"); // This is to check if a file is existing.
  echo "</br>"; //add a new line
  echo file_put_contents("sample.txt", "Hello World. Coding Fun!"); // This is to put a data (Hello World. Coding!) in sample.txt file.
  echo "</br>"; 
  echo file_get_contents("sample.txt"); // This is to render or display the data or text in sample.txt file.
  echo "</br>"; 
  print_r(file("sample.txt")); // It reads the sample.txt file and return it as an array
  echo "</br>"; 
  echo "</br>"; 

  ?>
<hr>
<br>


  <!-- GET Method -->

<form class="get" action="grp10_olivajustine_ex3.php" method="GET">
  <label>Enter your Firstname:</label><br>
  <input type="text" name="firstname"><br>
  <input class="click-get"type="submit" value="GET">
</form>

<span class="get-firstname">
  GET method result: <?php
    // This use $_GET method
  echo isset($_GET["firstname"]) ? htmlspecialchars($_GET["firstname"]) :" ";


  ?>
</span>


 <!-- POST Method -->

<form class="post" action="grp10_olivajustine_ex3.php" method="POST">
  <label>Enter your Lastname:</label><br>
  <input type="text" name="lastname"><br>
  <input class="click-post"type="submit" value="POST">
</form>

<span class="post-lastname">
  POST method result: <?php
    // This use $_POST method
    echo isset($_POST["lastname"]) ? htmlspecialchars($_POST["lastname"]) : ' ';

  ?>
</span>

</div>


</body>
</html>