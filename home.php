<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Goodies Bazaar : Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">


    <link rel="stylesheet" href="home.css">
</head>
<body>


    <div class="container">
        <div class="logo">
            <span id="log" style="color: white">GoodiesBazaar</span>
      
        </div>
      
        <div class="right_container">
            
            <div class="bottom">
              <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-top">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-lg-flex align-items-center">
                      <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="home.php">Home</a>
                      </li>
                      <a style="color: white;" class="nav-link dropdown-toggle" href="#" id="category_menu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Categories
                      </a>
                      <ul style="white" class="dropdown-menu" aria-labelledby="category_menu">

                        <?php
                        include('connection.php');

                        $categories = getCategories();


                        if ($categories->num_rows > 0) {
                          // output data of each row
                          while($row = $categories->fetch_assoc()) {

                            ?>
                          <li><a class="dropdown-item" href='categories.php?id=<?php echo $row['cat_id']; ?>'><?php echo $row['name'] ?></a></li>
                            <?php
                          }
                        } else {
                          ?>
                           <li><a class="dropdown-item" href="#">No Categories Found In DB</a></li>
                          <?php
                        }
                          ?>
                  
                        
                    
                      </ul>
                      <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Other Operations
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li class="nav-item">
                        <a class="nav-link" href="order/read.php">Manage Orders</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="display.php">Manage Items</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="rating.php">Rate Items</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="index.php">Chat</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="verification/display.php">Verification</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="delivery/index.php">Manage Deliveries</a>
                      </li>
          </ul>
        </li>

                     
                    </ul>


                </div>
              </div>
            </nav>
    
          </div>
      </div>
    </div>
        
        <br>
        <!--
  <div class="cat_container">

  <div class="card" style="width: 100%;">
  <ul class="list-group list-group-flush">
  <?php
                        

                        $categories = getCategories();


                        if ($categories->num_rows > 0) {
                          // output data of each row
                          while($row = $categories->fetch_assoc()) {

                            ?>
                          <li class="list-group-item"><a class="dropdown-item" href='categories.php?id=<?php echo $row['cat_id']; ?>'><?php echo $row['name'] ?></a></li>
                            <?php
                          }
                        } else {
                          ?>
                           <li class="list-group-item"><a class="dropdown-item" href="#">No Categories Found In DB</a></li>
                          <?php
                        }
                          ?>
</ul>
</div>
                      

  <br><br>
-->

  </div>

  <br><br><br><br><br><br>

<footer style="margin-left: 700px; margin-right: 700px;margin-top: 500px;text-align:center; background-color: orange;">
<span id="footer" style="font-color: black;">Delivering Products To Your Home With A Few Clicks</span>

  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

</body>
</html>