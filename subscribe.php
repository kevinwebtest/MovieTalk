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
  <body id="subscribe-page">
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





<section id=email>
  <h1 class="text-center">M O V I E T A L K</h1>
  <p class="text-center">You won't miss any movie or TV related updates</p>
  <div class="container">
    <form action="submit.php" method="POST">

        <div class="mb-3">  
          <label for="exampleInputEmail1" class="form-label">Your Name</label>
          <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="First name" aria-label="First name" name="firstname" required>
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="lastname" placeholder="Last name" aria-label="Last name">
            </div>
          </div>
        </div>

        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">Your Email</label>
          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email address" aria-describedby="emailHelp" name="email" required>
        </div>
        <br>
        <button type="submit" class="form-control btn btn-primary">Submit</button>
    </form>
  </div>


</section>


  <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    

<!-- Akhir Javascript -->

  </body>
</html>