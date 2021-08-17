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


<!-- Card -->

<div id="screen2"><img  src="img/TV/mandalorian2.jpg" class="card-img-top" alt="..."></div>


<section id="card">
  <div class="container">
    <div class="card">
      <div class="card-header">
        Released: 2020
      </div>
      <div class="card-body">
        <h5 class="card-title">The Mandalorian</h5>
        <p class="card-text">After the defeat of the Empire at the hands of Rebel forces, a lone bounty hunter operating in the Outer Rim, away from the dominion of the New Republic, goes on many surprising and risky adventures.</p>
        
      </div>
    </div>
    <br>
    <div class="row mb-2">
      <div class="col-sm-6">
            <div class="card">
              <div class="card-header text-white bg-success">
                Recommend
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>It's no small feat to create a character who is well-rounded and sympathetic, while mostly hidden behind an expressionless mask. But all the credit goes to Pascal for imbuing the man, also known as Din Djarin, with layers of ever-present depth.</p>
                  <footer class="blockquote-footer">Zaki Hasan from <cite title="Source Title">San Francisco Chronicle</cite></footer>
                  <a href="https://datebook.sfchronicle.com/movies-tv/the-mandalorian-closes-season-two-on-a-creative-high-with-an-epic-star-wars-cameo">See full review</a>
                </blockquote>
              </div>
            </div>
      </div>
      <div class="col-sm-6">
            <div class="card">
              <div class="card-header text-white bg-success">
                Recommend
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>It has elements of the original trilogy and the prequel trilogy -- as well as the prequel lore -- that I love. It takes the best of both of those worlds.</p>
                  <footer class="blockquote-footer">Chris Stuckmann from <cite title="Source Title">ChrisStuckmann.com</cite></footer>
                  <a href="https://www.youtube.com/watch?v=xd2sh6yjtcg">See full review</a>
                </blockquote>
              </div>
            </div>
      </div>
    </div>

    <br>
    <div class="row mb-2">
      <div class="col-sm-6">
            <div class="card">
              <div class="card-header text-white bg-success">
                Recommend
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>"This is the Way" is a fitting catch phrase, because The Mandalorian really is the way Star Wars should excite you, surprise you, and keep you wanting more.</p>
                  <footer class="blockquote-footer">Kent Garrison from <cite title="Source Title">Mad About Movies Podcast</cite></footer>
                  <a href="http://madaboutmoviespodcast.com/episodes/2020/12/19/rants-amp-raves-the-mandalorian-season-2">See full review</a>
                </blockquote>
              </div>
            </div>
      </div>
      <div class="col-sm-6">
            <div class="card">
              <div class="card-header text-white bg-success">
                Recommend
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>The Mandalorian's second season is not as plot oriented as its predecessor, this is more a "monster of the week" kind of season. Lots of fun anyway and wonderfully shot as well.</p>
                  <footer class="blockquote-footer">Alejandro Turdo from <cite title="Source Title">Hoy Sale Cine</cite></footer>
                  <a href="https://www.youtube.com/watch?v=B-arHxHcNx8">See full review</a>
                </blockquote>
              </div>
            </div>
      </div>
    </div>

    <br>
    <div class="row mb-2">
      <div class="col-sm-6">
            <div class="card">
              <div class="card-header text-white bg-danger">
                Not Recommend
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Any attempt to create new characters like Werner Herzog's mysterious Client or Taika Waititi's IG-11 droid are thrown out of the window, with the makers taking the lazier step of filling the world with existing characters.</p>
                  <footer class="blockquote-footer">Samuel Spencer from <cite title="Source Title">Newsweek</cite></footer>
                  <a href="https://www.newsweek.com/mandalorian-season-2-finale-spin-offs-fan-service-star-wars-1555882">See full review</a>
                </blockquote>
              </div>
            </div>
      </div>
      <div class="col-sm-6">
            <div class="card">
              <div class="card-header text-white bg-danger">
                Not Recommend
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Seeing something you love get such a well crafted, scripted, directed and acted show made it impossible to wipe a smile from my face for hours after watching every episode...</p>
                  <footer class="blockquote-footer">David Hogan from <cite title="Source Title">hoganreviews.co.uk</cite></footer>
                  <a href="https://hoganreviews.co.uk/2020/12/21/the-mandalorian-season-2-review/">See full review</a>
                </blockquote>
              </div>
            </div>
      </div>
    </div>

  </div>


</section>
<!-- End Card -->



  <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    

<!-- Akhir Javascript -->

  </body>
</html>