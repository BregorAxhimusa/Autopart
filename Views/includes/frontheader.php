<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <meta name="description" content="">
  <meta name="author" content="Otreks">
  <link href="Views/assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="Views/assets/css/main.css" rel="stylesheet">
  <link href="Views/assets/css/responsive.css" rel="stylesheet">
  <link rel='stylesheet' href='Views/assets/css/all.min.css'>
  <link href="https://fonts.googleapis.com/css?family=Cabin:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="Views/assets/css/lightslider.css" />
</head>

<body class="bg-green">
  <header id="header">
    <!-- Navbar -->
    <nav class="navbar pt-1 pb-2">
      <div class="container">
        <a class="navbar-brand" href="home">
          <img src="Views/assets/images/logo.png" alt="RentaCar" class="img-fluid">
        </a>
        <ul class="nav text-right">
          <li class="nav-item dropdown mt-2 d-flex">
            <a class="nav-link  text-black-50" href="#" id="lagnuages" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Språk
            </a>
            <select onchange="doGTranslate(this);" class="form-control translate-input py-2 mr-2">
              <option value="">Välj ditt språk</option>
              <option value="sv|sq">Albanian</option>
              <option value="sv|da">Danish</option>
              <option value="sv|en">English</option>
              <option value="sv|fi">Finnish</option>
              <option value="sv|de">German</option>
              <option value="sv|no">Norwegian</option>
              <option value="sv|sv">Swedish</option>
            </select>
            <div id="google_translate_element2"></div>
          </li>
          <li class="nav-item">
            <a href="login" class="mt-2  btn custom-sw btn-round">Logga in / Bli Medlem</a>
          </li>
          <!-- Business navbar links -->
          <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-black-50" href="#" id="navbarDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="Views/assets/images/user123.png" alt="user_img" class="img-fluid user_img ml-1 mr-1">
            Filani
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="profili.php"> Profili</a>
            <a class=" dropdown-item" href="veturat.php"> Veturat</a>
            <a class="dropdown-item" href="statistikat.php"> Statistikat </a>
            <a class="dropdown-item" href="#"></i> Logout</a>
          </div>
        </li> -->
          <!-- //Business navbar links -->
        </ul>
      </div>
    </nav>
    <!-- //Navbar -->
  </header>
  <script>
  </script>