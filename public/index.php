<?php
    // require_once '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>blagues</title>
</head>
<body>
<!-- nav bar -->
<nav class=" navbar navbar-dark navbar-expand-lg bg-dark mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Home</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="#">Liste</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Ajouter</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-info" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div class="container">
    <div class="d-flex justify-content-between mb-4">
        <input type="text" name="blague-input" class="w-100 me-3" id="blague-input">
        <button class="btn btn-primary">Ajouter</button>
    </div>
    <div class="d-flex flex-wrap gap-4 justify-content-center">
        <div class="card-container d-flex flex-wrap gap-4 justify-content-start">
          <div class="card flex-shrink-1 flex-grow-1" style="width: 18rem;">
              <!-- afichages des blagues ici -->
              <div class="card-body">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
          </div>  
        </div>
    </div>
    
</div>




</body>
</html>