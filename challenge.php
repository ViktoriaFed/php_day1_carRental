<!DOCTYPE html>
<?php

$cars = array (
    "Jeep" => array(
        "Model" => " Jeep Patriot",
        "Color" => "Black",
        "Price" => 120,
        "Availability" => true,
        "Image" => "https://cdn.pixabay.com/photo/2018/05/02/09/29/auto-3368094_1280.jpg"
    ),
    "Opel" => array(
        "Model" => "Opel Costra",
        "Color" => "Silver",
        "Price" => 90,
        "Availability" => true,
        "Image" => "https://cdn.pixabay.com/photo/2016/09/11/10/02/renault-juvaquatre-1661009_1280.jpg"
    ),
    "Wolkswagen" => array(
        "Model" => "Wolkswagen Polo",
        "Color" => "Black",
        "Price" => 100,
        "Availability" => false,
        "Image" => "https://cdn.pixabay.com/photo/2019/08/08/23/33/car-4393990_1280.jpg"
    ),
    "Kia" => array(
        "Model" => "Kia Rio",
        "Color" => "Blue",
        "Price" => 90,
        "Availability" => false,
        "Image" => "https://cdn.pixabay.com/photo/2016/03/27/19/44/car-1283947_1280.jpg"
    ),
    "Audi" => array(
        "Model" => "Audi A5",
        "Color" => "Green",
        "Price" => 110,
        "Availability" => true,
        "Image" => "https://cdn.pixabay.com/photo/2017/03/27/14/37/asia-2179107_1280.jpg"
    )
    );

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="challenge.css">
    <title>Car Rental</title>
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
  <img class="navbar-brand px-1 pe-2" width="80" height="80" src="https://img.icons8.com/matisse/100/car.png" alt="car"/>
    <a class="navbar-brand" href="#">Car Rental</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active text-danger fs-5" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger fs-5" href="#">Cars</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-danger fs-5" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-danger fs-5" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Locations
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Hartford</a></li>
            <li><a class="dropdown-item" href="#">Stars Hollow</a></li>
            <li><a class="dropdown-item" href="#">Yale</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- php page content -->

<div class="container p-4">
    <div class="row justify-content-center gap-3">
        <?php
    
    $keys = array_keys($cars);
    for ($i = 0; $i < count($cars); $i++) {
        echo "<div class=\"col-md-3\">";
        echo "<div class=\"card\" style=\"width: 18rem;\">";
        echo "<img src=\"" . $cars[$keys[$i]]['Image'] . "\" class=\"card-img-top\" alt=\"car\">";
        echo "<div class=\"card-body d-flex flex-column justify-content-center\">";
        echo "<h5 class=\"card-title fw-bold fs-4\">" . $keys[$i] . "<br></h5>";
        echo "<p class=\"card-text fs-5\">";
        foreach ($cars[$keys[$i]] as $key => $value) {
            if ($key != "Image" && $key != "Availability") {
            echo $key . " : " . $value . "<br>";
            }
                if ($key == "Availability" && $value == false) {
                    echo "<span class=\"text-primary-emphasis fw-medium\">This car is not available</span>";
                    echo "<br></p>";
                    echo "<a href=\"#\" class=\"btn btn-dark align-items-center\">Book for later</a>";
                } 
                if ($key == "Availability" && $value == true) {
                    echo "<span class=\"text-primary fw-medium\">Available for rent!</span>";
                    echo "<br></p>";
                    echo "<a href=\"#\" class=\"btn btn-danger align-items-center\">Rent this car</a>";
                } 
            }
       
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
        ?>
    </div>
</div>


<!--  end php page content -->

<footer>
<div class="content" id="result">
    <img width="48" height="48" src="https://img.icons8.com/color/48/facebook-new.png" alt="facebook-new"/>
    <img width="48" height="48" src="https://img.icons8.com/color/48/instagram-new--v1.png" alt="instagram-new--v1"/>
    <img width="48" height="48" src="https://img.icons8.com/color/48/whatsapp--v1.png" alt="whatsapp--v1"/>
</div>
</footer>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>