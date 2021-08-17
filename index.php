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
    <a class="navbar-brand font-italic" href="#home">MovieTalk</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Selesai HTML dipersempit -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="#about">About</a>
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
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="reviews.php" id="navbarDropdown" data-toggle="dropdown">
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
  <!-- Akhir navbar -->
  <!-- Home -->
    <section id="home">
      <h1 class="text-center">M O V I E T A L K</h1>
    </section>
  <!--  Akhir Home -->
  <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <h2 class="text-center">About</h2><hr>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p>MovieTalk is a small website for all things related to Movies and TV show across the world. It is a website to let you know the updates and news happening in the movie and TV industries, to not miss out on the exciting things that might happen.</p>
          </div>
          <div class="col-sm-6">
            <p>Besides the insider news, we also provide movie and TV reviews for all the entertainment you might want to watch, so that you can decide based on the reviews if you want to watch it or not.</p>
          </div>
        </div>
      </div>
    </section>
<!-- Akhir About -->
<!-- Movie News -->
    <section id="movienews">
    <div class="container" id="c1">
          <div class="row">
            <div class="col-sm-12 text-center">
              <h2>Movie News</h2><hr>
              
            </div>
          </div>
<!-- Jumbotron -->
      <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">WB 2021 Movies going to HBO MAX</h1>
          <p class="lead my-3">Warner Bros. will release all of its new 2021 movies simultaneously on HBO Max</p>
          <p class="lead mb-0"><a href="https://www.theverge.com/2020/12/3/22150605/hbo-max-warner-bros-movies-2021-simultaneous-release-matrix-godzilla-suicide-squad-space-jam" class="text-white font-weight-bold">Continue reading</a></p>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Movie</strong>
                <h3 class="mb-0">Black Widow delayed AGAIN</h3>
                <p class="card-text mb-auto">Disney has pushed the theatrical release date of Black Widow back to 2021, Disney announced.</p>
                <a href="https://www.thewrap.com/disney-pushes-black-widow-back-to-2021/" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"/><image height="100%" xlink:href="https://www.thewrap.com/wp-content/uploads/2020/02/BlackWidowScarlettJohansson.jpg"/></svg>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">Movie</strong>
                <h3 class="mb-0">Alfred Molina is back as Doctor Octopus</h3>
                <p class="mb-auto">Alfred Molina is back on to reprise his role as the villainous Doctor Octopus in the newest Spiderman Sequel</p>
                <a href="https://www.hollywoodreporter.com/heat-vision/spider-man-3-alfred-molina-returning-as-doctor-octopus" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"/><image height="100%" xlink:href="https://static.comicvine.com/uploads/original/14/149973/6807252-dr%20ock.jpg"/></svg>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Akhir Jumbotron -->
      <br>
      <br>

      <div class="container" id="c2">
        <div class="row">
          <div class="col-sm-12 text-center"><h3>Solo: A Star Wars Story disappoints with $100m at the US box office</h3></div>
          <div class="col-sm-6">
            <p>Takings for the Han Solo prequel were up to a third below expectations – the franchise’s worst result for a live actioner since Attack of the Clones</p>
            <img src="img/solo.jpg" width="100%">
          </div>
          <div class="col-sm-6">
            <p>Solo: A Star Wars Story has performed disappointingly on its box-office debut, recording much poorer results than the previous Star Wars standalone, Rogue One, and becoming the lowest-performing live-action Star Wars film at the US box office since Star Wars: Episode II – Attack of the Clones in 2002.</p>
            <p>After its US release on the Memorial day weekend, Solo, starring Alden Ehrenreich, took an estimated $83.3m (£63m) for its first three days, well short of Rogue One’s $155.1m for the same period. With an extra day’s results for the “four-day weekend”, Solo has reached an estimated $103m – but that is well down on the projected take of $130m -$150m. Solo’s figures are also well behind Episode III – Revenge of the Sith’s $158.4m in 2005, which also benefited from a four-day opening weekend.</p>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>

      <div class="container" id="c3">
        <div class="row">
          <div class="col-sm-12 text-center">
            <h3>James Bond may be delayed, but his wristwatches are available now</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <p>The release of the latest 007 movie, No Time to Die, already delayed to what would have been Wednesday, was pushed back yet again, to April 2021, a full year from its originally scheduled debut.</p>
            <p>But the merchandise is right on schedule. As any die-hard fan of the British secret agent knows, James Bond doesn’t give up and he never says never—especially in the midst of gifting season.</p>
          </div>
          <div class="col-sm-6">
            <p>No Time to Die stars Daniel Craig as 007 in his fifth, and supposedly last, outing as the fictional spy. We expect to see even more intense action scenes in this installment, more dramatic rescues and escapes, and plenty of steamy encounters—all served with the wit and charm of the MI6 agent.</p>
            <p>The tools that British Secret Service quartermaster “Q” will develop to help Bond on his missions will be typically surprising in style and function. Even the watch on Bond’s wrist will be an all-new Omega.</p>
          </div>
        </div>
      </div>

      <br>
      <br>
      <br>
      <br>
      <br>

    </section>

<!-- TV news -->
    <section id="tvnews">
    <div class="container" id="c4">
      <h2 class="text-center">TV News</h2><hr>
      <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
          <h1 class="display-4 font-italic">Loki Series Drops NEW Exclusive Clip</h1>
          <p class="lead my-3">Loki, an Original Series from Marvel Studios, is coming May 2021 to DisneyPlus.</p>
          <p class="lead mb-0"><a href="https://www.youtube.com/watch?v=G4JuopziR3Q" class="text-white font-weight-bold">Watch the trailer</a></p>
        </div>
      </div>
      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">TV</strong>
                <h3 class="mb-0">Attack on Titan season 4 finally launches</h3>
                <p class="card-text mb-auto">Attack on Titan season 4 is here. The first episode of the hit anime show has now landed on Crunchyroll.</p>
                <a href="https://www.techradar.com/news/attack-on-titan-season-4-finally-launches-on-crunchyroll-as-netflix-misses-out" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block imgwidth">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="https://photo.kontan.co.id/photo/2020/12/03/1560202055p.jpg"/></svg>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">TV</strong>
                <h3 class="mb-0">Hayden Christensen returns as Darth Vader</h3>
                <p class="mb-auto">Hayden Christensen will reprise his role as Darth Vader in the Disney Plus series Obi-Wan Kenobi.</p>
                <a href="https://www.theverge.com/2020/12/10/22168652/hayden-christensen-darth-vader-anakin-skywalker-ewan-mcgregor-obi-wan-kenobi-disney-plus" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block imgheight">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="https://cdn.vox-cdn.com/thumbor/ZnTyKUPKTcOyX863F5EFPzgGTSo=/0x0:580x326/920x613/filters:focal(160x114:252x206):format(webp)/cdn.vox-cdn.com/uploads/chorus_image/image/68493985/revenge_sith.0.jpeg"/></svg>
            </div>
          </div>
        </div>
      </div>

      <div class="row mb-2">
        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">TV</strong>
                <h3 class="mb-0">Obi Wan TV show details</h3>
                <p class="card-text mb-auto">A new Kenobi project had been rumoured for a while, but it was officially announced at Disney's D23.</p>
                <a href="https://www.digitalspy.com/tv/ustv/a30368470/obi-wan-kenobi-tv-air-date-cast-plot-trailer/" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block imgheight">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="https://cdn.vox-cdn.com/thumbor/KnYjrcxAozD5Q8pmr3QAXsJCwag=/1400x1400/filters:format(jpeg)/cdn.vox-cdn.com/uploads/chorus_asset/file/6434955/obi-wan.0.jpg"/></svg>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success">TV</strong>
                <h3 class="mb-0">Game of Thrones spinoff coming</h3>
                <p class="mb-auto">House of the Dragon HBO’s upcoming prequel to its wildly popular Game of Thrones fantasy series is coming.</p>
                <a href="https://www.indiewire.com/gallery/house-of-the-dragon-hbo-game-of-thrones-spinoff/hod2/" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block imgwidth">
                <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#55595c"/><image xlink:href="https://m.media-amazon.com/images/M/MV5BMTFmZjZjOWItOWY0NC00ZDA1LWFhN2ItMDI1ZGNmNGE2NGJmXkEyXkFqcGdeQXVyMTkxNjUyNQ@@._V1_.jpg"/></svg>
            </div>
          </div>
        </div>
      </div>

    </div>
    </section>
<!-- Akhir TV News -->

<!-- Javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<!-- Akhir Javascript -->

  </body>
</html>