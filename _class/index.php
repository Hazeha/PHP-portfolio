<?php
require_once ("freindsCatalog.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>



    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>



<div class="jumbotron jumbotron-fluid">
    <div class="container text-center">
        <h1 class="display-4">Contacts Book</h1>
        <p class="lead">Meet my friends and the friends of my friends</p>
    </div>
</div>



<!-- cards start here -->
<div class="container">
    <div class="row"><div class="col-12 mb-4 text-center"><h2>My Friends</h2></div> </div>
    <div class="row">



        <div class="col-3">
            <div class="card">
                <img class="card-img-top" style="width: 100px; height: 110px;" src="img/benny.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $friend1->getName(); ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $friend1->getTlf(); ?></li>
                    <li class="list-group-item"><?php echo $friend1->getAddress(); ?></li>
                    <li class="list-group-item"><?php echo $friend1->getHobby(); ?></li>
                </ul>
                <div class="card-body">
                    <a href="friends.php?id=<?php echo $friend1->getId(); ?>" class="btn btn-outline-primary"><?php echo $friend1->getName(); ?>'s Friends</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" style="width: 100px; height: 110px;" src="img/daniel.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $friend2->getName() ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $friend2->getTlf() ?></li>
                    <li class="list-group-item"><?php echo $friend2->getAddress() ?></li>
                    <li class="list-group-item"><?php echo $friend2->getHobby()?></li>
                </ul>
                <div class="card-body">
                    <a href="friends.php?id=<?php echo $friend2->getId(); ?>" class="btn btn-outline-primary"><?php echo $friend2->getName(); ?>'s Friends</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" style="width: 100px; height: 110px;" src="img/carol.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $friend3->getName() ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $friend3->getTlf() ?></li>
                    <li class="list-group-item"><?php echo $friend3->getAddress() ?></li>
                    <li class="list-group-item"><?php echo $friend3->getHobby()?></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-primary">My Friends</a>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="card">
                <img class="card-img-top" style="width: 100px; height: 110px;" src="img/daniel.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $friend4->getName() ?></h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><?php echo $friend4->getTlf() ?></li>
                    <li class="list-group-item"><?php echo $friend4->getAddress() ?></li>
                    <li class="list-group-item"><?php echo $friend4->getHobby()?></li>
                </ul>
                <div class="card-body">
                    <a href="#" class="btn btn-outline-primary">My Friends</a>



                </div>
            </div>
        </div>



    </div>
</div>
</body>
</html>
