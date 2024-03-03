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

    <title>Dashboard - Analytics | MyESATIC</title>

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




          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
          <div class="row">
          <h5 class="py-3 my-4">Résultats Académiques</h5>
                <div class="col">
                  <div class="nav-align-top mb-4">
                    <ul class="nav nav-pills mb-3 nav-fill" role="tablist">
                      <li class="nav-item">
                        <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-home" aria-controls="navs-pills-justified-home" aria-selected="true">
                          <i class="tf-icons bx bx-home"></i> Semestre 1 
                          <span class="badge rounded-pill badge-center h-px-20 w-px-20 bg-danger">3</span>
                        </button>
                      </li>
                      <li class="nav-item">
                        <button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-pills-justified-profile" aria-controls="navs-pills-justified-profile" aria-selected="false">
                          <i class="tf-icons bx bx-user"></i> Semestre 2
                        </button>
                      </li>
                    </ul>
                    <div class="tab-content">
                      <div class="tab-pane fade active show" id="navs-pills-justified-home" role="tabpanel">
                      <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Eléments constitutifs des Unités d'Enseignement (Partie 1)</th>
                            <th scope="col">Note 1</th>
                            <th scope="col">Note 2</th>
                            <th scope="col">Note 3</th>
                            <th scope="col">Note 4</th>
                            <th scope="col">Note 5</th>
                            <th scope="col">Moyenne</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Logique et raisonnements mathématiques</th>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Fonction à une variable réelle</th>
                            <td>16</td>
                            <td>17</td>
                            <td>16</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Optique géométrique</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Electrostatique-Magnétotatique</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Architecture des ordinateurs</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Anglais</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Introduction au droit</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <!-- Ajoutez ici d'autres lignes pour d'autres matières -->
                        </tbody>
                    </table>

                    <hr class="container-m-nx border-light mt-5">
                    
                      </div>

                      <table class="table">
                        <thead class="thead-dark">
                        <tr>
                            <th scope="col">Eléments constitutifs des Unités d'Enseignement (Partie 2)</th>
                            <th scope="col">Note 1</th>
                            <th scope="col">Note 2</th>
                            <th scope="col">Note 3</th>
                            <th scope="col">Note 4</th>
                            <th scope="col">Note 5</th>
                            <th scope="col">Moyenne</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">Structures algébriques</th>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Géométrie différentielle élémentaire</th>
                            <td>16</td>
                            <td>17</td>
                            <td>16</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Physique des dispositifs électroniques</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Electrocinétique</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Initiation en algorithmique</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Français</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <tr>
                            <th scope="row">Introduction au droit</th>
                            <td>14</td>
                            <td>13</td>
                            <td>15</td>
                            <td>15</td>
                            <td>14</td>
                            <td>16</td>
                        </tr>
                        <!-- Ajoutez ici d'autres lignes pour d'autres matières -->
                        </tbody>
                    </table>


                      <div class="tab-pane fade" id="navs-pills-justified-profile" role="tabpanel">
                        <p>
                          Donut dragée jelly pie halvah. Danish gingerbread bonbon cookie wafer candy oat cake ice
                          cream. Gummies halvah tootsie roll muffin biscuit icing dessert gingerbread. Pastry ice cream
                          cheesecake fruitcake.
                        </p>
                        <p class="mb-0">
                          Jelly-o jelly beans icing pastry cake cake lemon drops. Muffin muffin pie tiramisu halvah
                          cotton candy liquorice caramels.
                        </p>
                      </div>
                      <div class="tab-pane fade" id="navs-pills-justified-messages" role="tabpanel">
                        <p>
                          Oat cake chupa chups dragée donut toffee. Sweet cotton candy jelly beans macaroon gummies
                          cupcake gummi bears cake chocolate.
                        </p>
                        <p class="mb-0">
                          Cake chocolate bar cotton candy apple pie tootsie roll ice cream apple pie brownie cake. Sweet
                          roll icing sesame snaps caramels danish toffee. Brownie biscuit dessert dessert. Pudding jelly
                          jelly-o tart brownie jelly.
                        </p>
                      </div>
                    </div>
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
