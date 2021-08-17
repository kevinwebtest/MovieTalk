<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index-css.css">

    <title>MovieTalk</title>
  </head>
  <body id="submit-page">
  <!-- Navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-gradient">
    <!-- Jika HTML dipersempit -->
    <a class="navbar-brand font-italic" href="index.php">MovieTalk</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Selesai HTML dipersempit -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.php#about">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" data-toggle="dropdown">
          News
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.php#movienews">Movie</a>
          <a class="dropdown-item" href="index.php#tvnews">TV</a>
        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" data-toggle="dropdown">
          Reviews
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="moviereviews.php">Movie</a>
          <a class="dropdown-item" href="tvreviews.php">TV</a>
        </div>
      </li>
    </ul>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-white btn btn-sm btn-outline-secondary" href="subscribe.php">Subscribe to get the latest updates</a>
      </div>
    </div>
  </nav>



<section id="aftersubmit">

  <div class="container text-center">
    <p><?php
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];

    if (!empty($firstname) || !empty($email)) {
        $host = "sql213.epizy.com";
        $dbUsername = "epiz_28948162";
        $dbPassword = "gTlNRZTId04c44";
        $dbName = "epiz_28948162_movietalk";
        //create connection
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbName);
        if (mysqli_connect_error()) {
         die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
        } else {
         $SELECT = "SELECT email FROM subscribe WHERE email = ? Limit 1";
         $INSERT = "INSERT INTO subscribe (firstname, lastname, email) values(?, ?, ?)";
         //Prepare statement
         $stmt = $conn->prepare($SELECT);
         $stmt->bind_param("s", $email);
         $stmt->execute();
         $stmt->bind_result($email);
         $stmt->store_result();
         $stmt->store_result();
         $stmt->fetch();
         $rnum = $stmt->num_rows;
         if ($rnum==0) {
          $stmt->close();
          $stmt = $conn->prepare($INSERT);
          $stmt->bind_param("sss", $firstname, $lastname, $email);
          $stmt->execute();
          echo "You will receive MovieTalk updates in your email."?></p>
          <p><?php 
          echo "Thank you for subscribing."; 
         } else {
          echo "Email already registered."?></p> 
          <p><?php 
          echo "Please use another email address.";
         }
         $stmt->close();
         $conn->close();
        }
    } else {
     echo "All field are required";
     die();
    }
    ?></p>
  </div>


</section>


  <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

<!-- Akhir Javascript -->

  </body>
</html>