<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Bank System</title>

    
  </head>

  <body style="background-color:white;">
  <header>
  <?php
  include 'navbar.php';
  ?></header>
<main>
  <style>
  body{
    background-image: url('img/bank1.jpg');
    
    background-size:100%;
   
    background-repeat:no-repeat;
    background-attachment:fixed;
    width: 100%;
    background-position:center;
  }
  


</style>

<div class="twophoto">
    <a href="transfermoney.php">
       <img src="img/payfast.png" style="position: absolute; width: 200px; right: 50px; bottom:50px; background-color:lightgray;border-radius: 50%;" />
     </a>

    <a href="transactionhistory.php" >     
       <img src="img/payment.png" style="position: absolute; width: 200px; right: 50px; top:120px;"  background-color: white;border-radius:50%; />
    </a>
</div>


    </main>
  </body>
</html>