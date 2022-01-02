<?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">
  <a class="navbar-brand" href="#">iDiscuss</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="/phpt/forum/index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/phpt/forum/about.php">About</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Categories
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
          <li><a class="dropdown-item" href="#">HTML</a></li>
          <li><a class="dropdown-item" href="#">CSS</a></li>
          <li><a class="dropdown-item" href="#">JAVA SCRIPT</a></li>
          <li><a class="dropdown-item" href="#">PHP</a></li>
          <li><a class="dropdown-item" href="#">SQL</a></li>
          <li><a class="dropdown-item" href="#">PYTHON</a></li>
          <li><a class="dropdown-item" href="#">C++</a></li>
          <li><hr class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="#">Choose any category here</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="/phpt/forum/contact.php">Contact</a>
      </li>
    </ul>
    
    <div class="row mx-2">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-success" type="submit">Search</button>
        <button type="button" class="btn btn-outline-success mx-1 " data-bs-toggle="modal" data-bs-target="#loginModal">LogIn</button>
        <button type="button" class="btn btn-outline-success mx-2" data-bs-toggle="modal" data-bs-target="#signupModal">Signup</button>
        </form>
    </div>
  </div>
</div>
</nav>';

include 'partials/_loginModal.php';
include 'partials/_signupModal.php';
?>