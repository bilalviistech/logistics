<!DOCTYPE html>
<html>

<head>
  <title><?php if (isset($page) && is_string($page)) {
            echo $page;
          } else {
            echo 'Herbert Logistics';
          } ?></title>
  <meta name="description" content=<?php if (isset($pageDesc) && is_string($pageDesc)) {
                                      echo $pageDesc;
                                    } else {
                                      echo 'desired description';
                                    } ?> />
  <meta name="keywords" content=<?php if (isset($pageTag) && is_string($pageTag)) {
                                  echo $pageTag;
                                } else {
                                  echo 'desired tag';
                                } ?> />
  <meta charset="UTF-8">
  <!-- <meta name="keywords" content="HTML, CSS, JavaScript"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
  <link href="css/bootstrap.min.css.map" rel="stylesheet" type="text/css">
  <link rel="icon" href="images/logo.png" type="image/png" sizes="114*114">
  <link href="css/custom.css" rel="stylesheet" type="text/css">
  <!-- link owl carasoul  -->
  <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css">
  <link href="css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
  <!-- link slick carasoul  -->
  <link href="css/slick.css" rel="stylesheet" type="text/css">
  <link href="css/slick-theme.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://code.jquery.com/jquery-3.6.0.min.js">

  <link href="https://site-assets.fontawesome.com/releases/v6.0.0/css/all.css" rel="stylesheet">
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.css" />
</head>

<body>

  <div class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.php"><img src="images/logo.png" width="70%" class="img-fluid" alt="img"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"><i class="fa-solid fa-bars"></i></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex">
            <div class="input-group">
              <input type="search" class="form-control" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">
                <i class="fa-solid fa-search"></i>
              </button>
            </div>
          </form>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link " aria-current="page" href="dashboard.php">DASHBOARD</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="creat.php">CREATE SHIPMENT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="load1.php">MY LOADS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="career1.php">CARRIER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">DOCUMENTS</a>
            </li>
          </ul>

        </div>
      </div>
    </nav>
  </div>