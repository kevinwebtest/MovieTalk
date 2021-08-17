<?php
  include_once('connection.php'); 
  $query1="select * from moviereview where title='Soul'";
  $query2="select * from moviereviewer where title='Soul'";
  $result=mysql_query($query1);
  $resul2=mysql_query($query2);
?>

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
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Selesai HTML dipersempit -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link text-white" href="index.html">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="index.html#about">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" data-toggle="dropdown">
          News
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="index.html#movienews">Movie</a>
          <a class="dropdown-item" href="index.html#tvnews">TV</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="#">Discussion Forum</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" data-toggle="dropdown">
          Reviews
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="moviereviews.html">Movie</a>
          <a class="dropdown-item" href="tvreviews.html">TV</a>
        </div>
      </li>
    </ul>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-white" href="#" aria-label="Search">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </nav>


<!-- Card -->

<div id="screen"><img  src="img/ww1984.jpg" class="card-img-top" alt="..."></div>


<section id="card">
  <div class="container">
    <div class="card">
      <div class="card-header">
        Released:
        <?php
          while($rows=mysql_fetch_assoc($result1))
          {
            echo $rows['imageheader'];
            echo $rows['releasedate'];
            echo $rows['title'];
            echo $rows['descrip'];
          }
        ?>
      </div>
      <div class="card-body">
        <h5 class="card-title">Wonder Woman 1994</h5>
        <p class="card-text">Diana Prince lives quietly among mortals in the vibrant, sleek 1980s -- an era of excess driven by the pursuit of having it all. Though she's come into her full powers, she maintains a low profile by curating ancient artifacts, and only performing heroic acts incognito. But soon, Diana will have to muster all of her strength, wisdom and courage as she finds herself squaring off against Maxwell Lord and the Cheetah, a villainess who possesses superhuman strength and agility.</p>
        
      </div>
    </div>
    <br>
    <div class="row mb-2">
      <div class="col-sm-6">
            <div class="card ">
              <div class="card-header text-white bg-success">
                Recommend
              </div>
              <div class="card-body">
                <blockquote class="blockquote mb-0">
                  <p>Love, compassion, acceptance, truth and courage to do the right thing can help heal broken souls and light the world around us. The right movie at the right time, Wonder Woman 1984, is Wonder Woman-personified.</p>
                  <footer class="blockquote-footer">Nathalia Aryani from <cite title="Source Title">The MovieMaven</cite></footer>
                  <a href="https://sdmoviemaven.blogspot.com/2020/12/wonder-woman-1984.html">See full review</a>
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
                  <p>Overall, I felt disconnected from the movie except for moments that focused on human-scale situations. It struggles to be relevant and serious, but in a superficial, cartoony way. It drones on for two and a half hours but it hasn't got a lot to say</p>
                  <footer class="blockquote-footer">Leonard Maltin from <cite title="Source Title">leonardmaltin.com</cite></footer>
                  <a href="https://leonardmaltin.com/ww84-wonder-woman-1984/">See full review</a>
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
                  <p>In the end, this movie never makes the case for why Wonder Woman is back in action beyond the obvious commercial imperatives.</p>
                  <footer class="blockquote-footer">Manohla Dargis from <cite title="Source Title">New York Times</cite></footer>
                  <a href="https://www.nytimes.com/2020/12/24/movies/wonder-woman-1984-review.html">See full review</a>
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
                  <p>With strong action set pieces and Kristen Wiig turning in a welcomingly restrained performance as Cheetah, It has it's moments of promise. But Pascal's Maxwell Lord is just a lot to handle, and it isn't fun or interesting.</p>
                  <footer class="blockquote-footer">Lee McCoy from <cite title="Source Title">DrumDums</cite></footer>
                  <a href="https://www.youtube.com/watch?v=2Qu_fAA9rPM&t=181s">See full review</a>
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
                  <p>Merely escapist entertainment.</p>
                  <footer class="blockquote-footer">Dennis Schwartz from <cite title="Source Title">Dennis Schwartz Movie Reviews</cite></footer>
                  <a href="https://dennisschwartzreviews.com/wonder-woman-1984/">See full review</a>
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
                  <p>[T]hough it tries, Wonder Woman 1984 (WW84) struggles to speak to this moment and deliver a coherent message.</p>
                  <footer class="blockquote-footer">Rebecca Long from <cite title="Source Title">Bitch Media</cite></footer>
                  <a href="https://www.bitchmedia.org/article/wonder-woman-1984-review">See full review</a>
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
    <script src="js/index-js.js"></script>
    

<!-- Akhir Javascript -->

  </body>
</html>