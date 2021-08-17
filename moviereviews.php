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
        <img src="img/ww.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/tenet.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="img/soul.jpeg" class="d-block w-100" alt="...">
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
              <a href="ww1984.php"><img src="img/ww_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="ww1984.php"><h5 class="card-title">Wonder Woman 1984</h5></a>
                <p class="card-text">Diana Prince lives quietly among mortals in the vibrant 1980s. This time Diana will have to muster all of her strength, wisdom and courage as she finds herself squaring off against Maxwell Lord and the Cheetah.</p>
                <p class="card-text"><small class="text-muted">Rating <b>5.8/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/soul_poster2.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Soul</h5></a>
                <p class="card-text">Joe is a middle-school band teacher whose life hasn't quite gone the way he expected. But when he travels to another realm to help someone find their passion, he soon discovers what it means to have soul.</p>
                <p class="card-text"><small class="text-yellow-900">Rating <b>8.2/10</b></small></p>
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
              <a href="#"><img src="img/tenet_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Tenet</h5></a>
                <p class="card-text">A secret agent is given a single word as his weapon and sent to prevent the onset of World War III. He must travel through time and bend the laws of nature in order to be successful in his mission.</p>
                <p class="card-text"><small class="text-muted">Rating <b>7.6/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/newmutants_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">The New Mutants</h5></a>
                <p class="card-text">Five teenage mutants undergo treatments at an institution that will cure them of their dangerous powers. Suddenly their stories soon turn into terrifying realities as they start to question why they're being held.</p>
                <p class="card-text"><small class="text-muted">Rating <b>5.3/10</b></small></p>
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
              <a href="#"><img src="img/mulan_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Mulan</h5></a>
                <p class="card-text">A girl disguises as a male warrior and joins the imperial army in order to prevent her sick father from being forced to enlist as he has no male heir.</p>
                <p class="card-text"><small class="text-muted">Rating <b>5.6/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/extraction_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Extraction</h5></a>
                <p class="card-text">A black-market mercenary who has nothing to lose is hired to rescue the kidnapped son of an imprisoned international crime lord.</p>
                <p class="card-text"><small class="text-muted">Rating <b>6.7/10</b></small></p>
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
              <a href="#"><img src="img/projectpower_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">Project Power</h5></a>
                <p class="card-text">A former soldier teams up with a cop to find the source behind a dangerous pill that provides temporary superpowers.</p>
                <p class="card-text"><small class="text-muted">Rating <b>6/10</b></small></p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-4">
              <a href="#"><img src="img/oldguard_poster.jpg" alt="..."></a>
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <a href="#"><h5 class="card-title">The Old Guard</h5></a>
                <p class="card-text">A group of mercenaries, all centuries-old immortals with the ablity to heal themselves, discover someone is onto their secret, and they must fight to protect their freedom.</p>
                <p class="card-text"><small class="text-muted">Rating <b>6.6/10</b></small></p>
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