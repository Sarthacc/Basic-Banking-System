
  
  
<!-- <div class="container-fluid px-0">
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/bank.jpg" class="d-block" alt="..." height="650rem">
      
      <div class="carousel-caption d-none d-md-block">
        
      </div>
    </div>
    
  </div>
  
</div> -->

      <!-- Activity section -->
            <!-- <div class="row activity text-center">
              <div class="col-md act">
                <img src="img/user1.jpg" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color : Black;">Create a User</button></a>
              </div>
              <div class="col-md act">
                <img src="img/transfer1.jpg" class="img-fluid">
                <br>
                <a href="transfermoney.php"><button style="background-color : Black;">Make a Transaction</button></a>
              </div>
              <div class="col-md act">
                <img src="img/transaction1.jpg" class="img-fluid">
                <br>
                <a href="transactionhistory.php"><button style="background-color : Black;">Transaction History</button></a>
              </div>
            </div> -->
            
      <!-- </div>
      <div class="card-container1">
              <section class="card1">
                <a href="#" class="link1">History</a>
              </section>
              <section class="card1">
                <a href="#" class="link1">Make Transaction</a>
              </section>
              <section class="card1">
                <a href="#" class="link1">View Customer</a>
              </section>
            </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2021. Made by <b>Aryan Vidyarthi</b> <br>The Sparks Foundation</p>
      </footer>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  </body>
</html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/styleNew.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>

   
</head>

<body style="background-color: #e9a341;">
    <?php
    include 'navbar.php';
    ?>
    <div>
        <img src="img/nexusbank2.jpg"  height="720rem">

    </div>
        
    <div class="card-container">
        <section class="func_card">
            <a href="transactionhistory.php" class="func_link">
              <!-- <img src="img/history.png" > -->
              History
            </a>
        </section>
 
        <section class="func_card">
            <a href="transfermoney.php" class="func_link">Make Transaction</a>
        </section>
 
        <section class="func_card">
            <a href="createuser.php" class="func_link">Create Account</a>
        </section>
    </div>
    <footer class="text-center mt-5 py-2" style="background-color: #e9a341; color:black;">
        <p>&copy 2021. Made by <b>Sarthak Shinde</b> <br>The Sparks Foundation</p>
      </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>
</html>