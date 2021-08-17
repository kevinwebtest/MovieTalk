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
  <body>
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


<!-- Carousel -->
<section id="carousel1">

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/TV/mandalorian.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/TV/aot.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/TV/theboys.jpg" class="d-block w-100" alt="...">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</section>
<!-- Akhir Carousel -->



<section id=movieposter>

  <div class="container">

    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="mandalorian.php"><img src="img/TV/mandalorian_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="mandalorian.php"><h5 class="card-title">The Mandalorian</h5></a>
                <p class="card-text">After the defeat of the Empire at the hands of Rebel forces, a lone bounty hunter operating in the Outer Rim, away from the dominion of the New Republic, goes on many surprising and risky adventures.</p>
                <p class="card-text"><small class="text-muted">Rating <b>8.8/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/TV/queen'sgambit_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">The Queen's Gambit</h5></a>
                <p class="card-text">Set during the Cold War era, orphaned chess prodigy Beth Harmon struggles with addiction in a quest to become the greatest chess player in the world.</p>
                <p class="card-text"><small class="text-yellow-900">Rating <b>8.7/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/TV/theboys_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">The Boys</h5></a>
                <p class="card-text">Superheroes are often as popular as celebrities, as influential as politicians, and sometimes even as revered as gods. What happens when the heroes go rogue and start abusing their powers?</p>
                <p class="card-text"><small class="text-muted">Rating <b>8.7/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/TV/dark_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Dark</h5></a>
                <p class="card-text">Two children go missing in a small German town. The mystery-drama series introduces an intricate puzzle filled with twists that includes a web of characters, all of whom have a connection to the town's history.</p>
                <p class="card-text"><small class="text-muted">Rating <b>8.8/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/TV/aot_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Attact on Titan</h5></a>
                <p class="card-text">When man-eating Titans first appeared 100 years ago, humans found safety behind massive walls. But the safety they have had for so long is threatened when a colossal Titan smashes through the barriers.</p>
                <p class="card-text"><small class="text-muted">Rating <b>8.8/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/TV/umbrella_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Umbrella Academy</h5></a>
                <p class="card-text">In 1989, 43 infants are born to random women who showed no signs of pregnancy the day before. 7 of them are adopted and trained by a billionaire who creates the Umbrella Academy to save the world.</p>
                <p class="card-text"><small class="text-muted">Rating <b>8/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row mb-2">
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/TV/westworld_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Westworld</h5></a>
                <p class="card-text">In a futuristic Western-themed amusement park, Westworld, the visitors interact with automatons. However, all hell breaks loose when the robots begin malfunctioning.</p>
                <p class="card-text"><small class="text-muted">Rating <b>8.7/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/TV/moneyheist_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Money Heist</h5></a>
                <p class="card-text">A criminal mastermind who goes by "The Professor" has a plan to pull off the biggest heist in recorded history -- to print billions of euros in the Royal Mint of Spain.</p>
                <p class="card-text"><small class="text-muted">Rating <b>8.3/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>



</section>


  <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    

<!-- Akhir Javascript -->

  </body>
</html>