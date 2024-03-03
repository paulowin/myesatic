<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: auth-login-basic.php");
    exit();
}

$conn = new PDO('mysql:host=localhost; dbname=myesatic', 'root', '');

$id_utilisateur = $_SESSION['user_id'];

$requete_info_utilisateur = $conn->prepare("SELECT * FROM user WHERE user_id = :user_id");
$requete_info_utilisateur->bindParam(':user_id', $id_utilisateur);
$requete_info_utilisateur->execute();
$info_utilisateur = $requete_info_utilisateur->fetch(PDO::FETCH_ASSOC);

if ($info_utilisateur) {

    
    // Ajoutez d'autres colonnes selon votre schéma de base de données

?>
<!-- Ajoutez ce lien où vous le souhaitez sur votre page -->


<!DOCTYPE html>

<!-- =========================================================
* MyESATIC | v1.0.0
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

    <title>MyESATIC</title>

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
                          <h2 class="card-title" style="color: #0483c4;">Bienvenue 
                          <?php  echo $info_utilisateur['nom'] ?>🎉</h2>
                          <p class="mb-4">
                            N'hésitez pas à <span class="fw-bold">configurer</span> ton emploi du temps personnel afin d'être le plus productif possible
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
                        <h2 class="card-title" style="color: #0483c4;"> SEMESTRE 1 - PREMIERE PARTIE </h2>
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
        <td>ELECTROSTATIQUE</td>
        <td>ANGLAIS</td>
        <td></td>
        <td>ADO</td>
        <td>LOGIQUE</td>
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
        <td>LOGIQUE</td>
        <td>FRANCAIS</td>
        <td>ALGORITHME</td>
        <td>TP</td>
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
        <td>LOGIQUE</td>
        <td>DROIT</td>
        <td>DROIT</td>
        <td></td>
      </tr>
      <!-- Ajoutez ici d'autres lignes pour d'autres plages horaires -->
    </tbody>
                      </tbody>
                    </table>
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
<?php
} else {
  die("Erreur lors de la récupération des informations de l'utilisateur");
}

?>