<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="Views/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="Views/assets/css/main.css" rel="stylesheet">
    <link href="Views/assets/css/responsive.css" rel="stylesheet">
    <link href='Views/assets/css/all.min.css' rel='stylesheet'>
    <link href="Views/assets/css/datepicker.css">
    <link href="Views/assets/fileuploader/font/font-fileuploader.css" rel="stylesheet">
    <link href="Views/assets/fileuploader/jquery.fileuploader.min.css" media="all" rel="stylesheet">
    <link href="Views/assets/fileuploader/jquery.fileuploader-theme-thumbnails.css" media="all" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,400i,500,600,700,800&display=swap"
      rel="stylesheet">
    </head>
    <body class="dashboard-body">
      <div class="d-flex" id="wrapper">
        <?php include("sidebar.php")?>
        <div id="page-content-wrapper">
          <!-- Navbar -->
          <nav class="navbar box-shadow">
            <div class="container-fluid justify-content-end">
              <ul class="nav text-right">
                <li class="nav-item dropdown mt-2 ml-auto">
                  <!-- <a class="nav-link dropdown-toggle text-black-50" href="#" id="lagnuages" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="Views/assets/images/sek.svg" alt="user_img" class="img-fluid icon-svg ml-1 mr-1">
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="lagnuages">
                    <button id="en" class="translate dropdown-item"><img src="Views/assets/images/usd.svg" alt="user_img"
                    class="img-fluid icon-svg ml-1 mr-1">English</button>
                    <button id="sw" class="translate dropdown-item"> <img src="Views/assets/images/sek.svg" alt="user_img"
                    class="img-fluid icon-svg ml-1 mr-1">Sweden</button>
                  </div> -->
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
                </li>
                <!-- Business navbar links -->
                <li class="nav-item dropdown ml-auto">
                  <a class="nav-link dropdown-toggle text-black-50" href="#" id="navbarDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="Views/assets/images/user123.png" alt="user_img" class="img-fluid user_img ml-1 mr-1">
                    Filani
                  </a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <div class="show-mobile d-block d-md-none">
                      <a class="dropdown-item" href="profile">Min profil</a>
                      <a class="dropdown-item" href="index">Mina bilar</a>
                      <a class="dropdown-item" href="add-car">Lägg till bil</a>
                      <a class="dropdown-item" href="add-autopart">Lägg till autopart</a>
                    </div>
                    <a class="dropdown-item" href="logout">logga ut</a>
                  </div>
                </li>
                <!-- //Business navbar links -->
              </ul>
            </div>
          </nav>
          <!-- //Navbar -->