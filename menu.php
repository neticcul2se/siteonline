<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style media="screen">
    .dropdown:hover .dropdown-content {
  display: block;

}
.navbar-dark .navbar-nav .nav-link{
  color:#fff !important;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.);
  z-index: 1;
}
    </style>
  </head>
  <body>
    <nav class="navbar navbar-expand-md  bg-primary navbar-dark">
      <a class="navbar-brand" href="#">Sitesystem</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="http://sitesystemsonline.com">HOME</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CHILLER DAILY
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="site_formmachine.php">insert Chiller daily</a>
              <a class="dropdown-item" href="site_viewmachine.php">View Chiller daily</a>
          </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             CHILLER INSPECTION 1
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="ch_form.php">insert inspection</a>
            <a class="dropdown-item" href="mt_ch_view.php">view inspection </a>

            </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             CHILLER INSPECTION 2
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="ch2_form.php">insert inspection</a>
            <a class="dropdown-item" href="ch2_view.php">view inspection </a>
              </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Visy 1-3
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="visy1_3_form.php">insert Visy 1-3</a>
            <a class="dropdown-item" href="visy1_3_view.php">view Visy 1-3 </a>
            <a class="dropdown-item" href="export_visy1_3.php">export Visy 1-3 </a>
              </div>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Visy 4-5
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="visy4_5_form.php">insert Visy 4-5</a>
            <a class="dropdown-item" href="visy4_5_view.php">view Visy 4-5 </a>
            <a class="dropdown-item" href="export_visy4_5.php">export Visy 4-5 </a>

              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Visy 6-7
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="visy6_7_form.php">insert Visy 6-7</a>
            <a class="dropdown-item" href="visy6_7_view.php">view Visy 6-7 </a>
            <a class="dropdown-item" href="export_visy6_7.php">export Visy 6-7 </a>

              </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             AHU 1-9
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="AHU1_9_form.php">insert AHU 1-9</a>
            <a class="dropdown-item" href="AHU1_9_view.php">view AHU 1-9 </a>
              </div>
          </li>

        </ul>
      </div>
    </nav>

  </body>
</html>
