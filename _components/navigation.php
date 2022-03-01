<?php
    require_once "_class/links.php";

    $brand = new Link("Nikolaj Drejer", "Nikolaj Drejer", "#");
    $home = new Link("Forside", "Home", "#");
    $about = new Link("Om Mig", "About", "#");
    $projects = new Link("Projekter", "Projects", "#");
    $github = new Link("Github", "Github", "www.github.com");
    $linkedin = new Link("Linkedin", "Linkedin", "www.linkedin.com");

    $lang = false;

echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar">
  <div class="container-fluid">
    <a class="navbar-brand" href="'. $brand->getUrl() .'">'. $brand->getTitle($lang) .'</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <div class="navbar-nav me-auto d-flex mb-2 mb-lg-0">
        
      </div>
      <div class="d-flex">
        <ul class="navbar-nav me-auto d-flex mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="'. $home->getUrl() .'">'. $home->getTitle($lang) .'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'. $about->getUrl() .'">'. $about->getTitle($lang) .'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'. $projects->getUrl() .'">'. $projects->getTitle($lang) .'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'. $github->getUrl() .'">'. $github->getTitle($lang) .'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'. $linkedin->getUrl() .'">'. $linkedin->getTitle($lang) .'</a>
        </li>
      </ul>
      </div>
    </div>
  </div>
</nav>


<header class="hero">
    <div class="cog-master">
        <i class="fa fa-cog bigcog1" aria-hidden="true"></i>
        <div class="cog-container">
            <i class="fa fa-cog c1" aria-hidden="true"></i>
            <i class="fa fa-cog c2" aria-hidden="true"></i>
            <i class="fa fa-cog c3" aria-hidden="true"></i>
            <i class="fa fa-cog c4" aria-hidden="true"></i>
            <i class="fa fa-cog c5" aria-hidden="true"></i>
        </div>
    </div>
  <div class="p-5 text-center bg-light">
    <img src="_assets/profile.jpg" alt="nikolaj drejer profile picture" class="profilePicture">
    <h1 class="mb-3">Nikolaj Drejer</h1>
    <h4 class="mb-3">Developer</h4>
   
    <ul class="navbar-nav d-flex flex-row bd-highlight mb-3 justify-content-around primary-text">
        <li class="nav-item">
          <a class="nav-link" href="'. $about->getUrl() .'">'. $about->getTitle($lang) .'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'. $projects->getUrl() .'">'. $projects->getTitle($lang) .'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'. $github->getUrl() .'">'. $github->getTitle($lang) .'</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="'. $linkedin->getUrl() .'">'. $linkedin->getTitle($lang) .'</a>
        </li>
      </ul>
      
  </div>
</header>
';
