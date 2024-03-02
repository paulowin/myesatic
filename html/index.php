<?php
session_start();


if (!isset($_SESSION['user_id'])  ||  $_SESSION["user_id"] !== true) {
    header("Location: auth-login-basic.php");
    exit();
}
?>

<!DOCTYPE html>

<!-- =========================================================
* Sneat - Bootstrap 5 HTML Admin Template - Pro | v1.0.0
==============================================================

* Product Page: https://themeselection.com/products/sneat-bootstrap-html-admin-template/
* Created by: ThemeSelection
* License: You must have a valid license purchased in order to legally use the theme for your project.
* Copyright ThemeSelection (https://themeselection.com)

=========================================================
 -->
<!-- beautify ignore:start -->
<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="../assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Dashboard - Analytics | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="../assets/img/favicon/favicon.ico" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Icons. Uncomment required icon fonts -->
    <link rel="stylesheet" href="../assets/vendor/fonts/boxicons.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="../assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="../assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="../assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />

    <link rel="stylesheet" href="../assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>

    <style>
    .content-wrapper {
      background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="#f8f9fa"/><circle cx="50" cy="50" r="30" fill="#6c757d"/></svg>');
      background-repeat: repeat;
      padding: 20px; /* Juste pour démonstration */
    }
    body {
  background-color: #f8f9fa;
}

.calculator {
  max-width: 300px;
  margin: 0 auto;
  margin-top: 50px;
  background-color: #f8f9fa;
  padding: 20px;
  border-radius: 15px; /* Ajout du rayon de bordure */
  border: 2px solid #ced4da; /* Ajout de la bordure */
  box-shadow: 0px 0px 10px 0px rgba(0,0,0,0.1);
}

.btn {
  font-size: 18px;
  margin: 5px;
}

.btn-primary, .btn-warning, .btn-success {
  font-weight: bold;
}

.btn-primary {
  background-color: #007bff;
  border-color: #007bff;
}

.btn-primary:hover {
  background-color: #0056b3;
  border-color: #0056b3;
}

.btn-warning {
  background-color: #ffc107;
  border-color: #ffc107;
}

.btn-warning:hover {
  background-color: #ffae00;
  border-color: #ffae00;
}

.btn-success {
  background-color: #28a745;
  border-color: #28a745;
}

.btn-success:hover {
  background-color: #218838;
  border-color: #218838;
}       body {
            margin: 0;
            font-family: var(--bs-body-font-family);
            font-size: var(--bs-body-font-size);
            font-weight: var(--bs-body-font-weight);
            line-height: var(--bs-body-line-height);
            color: var(--bs-body-color);
            text-align: var(--bs-body-text-align);
            background-image: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100"><rect width="100" height="100" fill="#f8f9fa"/><circle cx="50" cy="50" r="30" fill="#6c757d"/></svg>')!important;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: rgba(67, 89, 113, 0);
        }
  </style>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <?php	
	include_once('partials/navbar.php');
?>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
          <?php	
	include_once('partials/head.php');
?>
   

          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row">
                <div class="mb-4 order-0">
                  <div class="card">
                    <div class="d-flex align-items-end row">
                      <div class="col-sm-7">
                        <div class="card-body">
                          <h2 class="card-title" style="color: #0483c4;">Bienvenue Jean Yves ! 🎉</h2>
                          <p class="mb-4">
                            N'hesites pas à <span class="fw-bold">configurer</span> ton emploi du temps personnel afin d'être le plus productif possible
                          </p>

                          <a href="javascript:;" class="btn btn-sm" style="color: #0483c4;">Voir plus</a>
                        </div>
                      </div>
                      <div class="col-sm-5 text-center text-sm-left">
                        <div class="card-body pb-4 px-0 px-md-4">
                          <img
                            src="../assets/img/illustrations/3d-business-female-student-with-notebooks.png"
                            height="170"
                            alt="View Badge User"
                            data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                

                
                <div class="mb-5 order-0">
                  <div class="row">
                      <div class="card">
                        <div class="card-body">
                        <div class="table-responsive">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">Heures</th>
                          <th scope="col">Lundi</th>
                          <th scope="col">Mardi</th>
                          <th scope="col">Mercredi</th>
                          <th scope="col">Jeudi</th>
                          <th scope="col">Vendredi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <tbody>
      <tr>
        <th scope="row">7h30 - 10h00</th>
        <td>Cours de Mathématiques</td>
        <td>Cours de Français</td>
        <td></td>
        <td>Cours de Physique</td>
        <td>Cours d'Anglais</td>
      </tr>
      <tr>
        <th scope="row">Récreation</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">10h15 - 12h45</th>
        <td>Cours de Sciences</td>
        <td>Cours de Histoire</td>
        <td>Cours de Géographie</td>
        <td>Cours de SVT</td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">Après-midi</th>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <th scope="row">14h30 - 17h00</th>
        <td></td>
        <td>Cours de Musique</td>
        <td>Cours de Sport</td>
        <td>Cours de Chimie</td>
        <td></td>
      </tr>
      <!-- Ajoutez ici d'autres lignes pour d'autres plages horaires -->
    </tbody>
                      </tbody>
                    </table>
                    <div class="container">
                  <div class="calculator">
                    <input type="text" class="form-control mb-2" id="display" readonly>
                    <div class="row">
                      <button class="btn btn-primary col-3" onclick="clearDisplay()">C</button>
                      <button class="btn btn-primary col" onclick="appendValue('(')"> ( </button>
                      <button class="btn btn-primary col" onclick="appendValue(')')"> ) </button>
                      <button class="btn btn-warning col" onclick="appendValue('/')"> / </button>
                    </div>
                    <div class="row">
                      <button class="btn btn-light col" onclick="appendValue('7')">7</button>
                      <button class="btn btn-light col" onclick="appendValue('8')">8</button>
                      <button class="btn btn-light col" onclick="appendValue('9')">9</button>
                      <button class="btn btn-warning col" onclick="appendValue('*')"> *</button>
                    </div>
                    <div class="row">
                      <button class="btn btn-light col" onclick="appendValue('4')">4</button>
                      <button class="btn btn-light col" onclick="appendValue('5')">5</button>
                      <button class="btn btn-light col" onclick="appendValue('6')">6</button>
                      <button class="btn btn-warning col" onclick="appendValue('-')"> - </button>
                    </div>
                    <div class="row">
                      <button class="btn btn-light col" onclick="appendValue('1')">1</button>
                      <button class="btn btn-light col" onclick="appendValue('2')">2</button>
                      <button class="btn btn-light col" onclick="appendValue('3')">3</button>
                      <button class="btn btn-warning col" onclick="appendValue('+')"> + </button>
                    </div>
                    <div class="row">
                      <button class="btn btn-light col-6" onclick="appendValue('0')">0</button>
                      <button class="btn btn-light col">.</button>
                      <button class="btn btn-success col" onclick="calculate()">=</button>
                    </div>
                  </div>
                </div>
                  </div>
                </div>



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->
    <script>
  function appendValue(value) {
    document.getElementById('display').value += value;
  }

  function clearDisplay() {
    document.getElementById('display').value = '';
  }

  function calculate() {
    try {
      document.getElementById('display').value = eval(document.getElementById('display').value);
    } catch (error) {
      document.getElementById('display').value = 'Error';
    }
  }
</script>
    <!-- Vendors JS -->
    <script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="../assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
