<?php
require('fpdf/fpdf.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les notes
    $note1 = $_POST['note1'];
    $note2 = $_POST['note2'];
    $note3 = $_POST['note3'];
    $note4 = $_POST['note4'];
    $note5 = $_POST['note5'];
    $note6 = $_POST['note6'];
    $note7 = $_POST['note7'];
    $note8 = $_POST['note8'];
    $note9 = $_POST['note9'];
    $note10 = $_POST['note10'];

   
    // Calculer les moyennes
    $moyenne = ($note1 + $note2 + $note3 + $note4 + $note5 + $note6 + $note7 + $note8 + $note9 + $note10) / 10;
    $moyelectro =($note1 + $note2) / 2;
    $moycin = ($note3 + $note4) / 2;
    $moyado = ($note5 + $note6) / 2;
    $moyalgo = ($note7 + $note8) / 2;
    $moydroit = ($note9 + $note10) / 2;
    $mue_1 = ($moyelectro * 2 + $moycin * 3) / 5;
    $mue_2 = ($moyado * 1 + $moyalgo * 3) / 4;
    $mue_3 = $moydroit;
    $mue_min = $mue_3;
    $mue_maj = ($mue_1 * 5 + $mue_2 * 4) / 9;
    $moy = ($mue_maj * 9 + $mue_min * 2) / 11; 

    // Créer un nouvel objet FPDF
    $pdf = new FPDF('L', 'mm', 'A3');
  
    // Ajouter une page
    $pdf->AddPage();
    
    // Définir la police
    $pdf->SetFont('Arial','B',16);
    
    
    // Titre
    
    $pdf->Cell(0,10,'Bulletin de notes',0,1,'C');
    
  // Créer un tableau
$pdf->SetFont('Arial', 'B', 12);
$pdf->Cell(50, 20, 'UE Majeures', 1, 0, 'C');
$pdf->Cell(100, 20, 'Elements constitutifs', 1, 0, 'C');
$pdf->Cell(30, 20, 'NOTE 1', 1, 0, 'C');
$pdf->Cell(30, 20, 'NOTE 2', 1, 0, 'C');
$pdf->Cell(30, 20, 'M. CLASSE', 1, 0, 'C');
$pdf->Cell(30, 20, 'M. UE', 1, 0, 'C');
$pdf->Cell(30, 20, 'CREDIT', 1, 0, 'C');
$pdf->Cell(30, 20, 'M. UE Maj', 1, 0, 'C');
$pdf->Cell(30, 20, 'MOYENNE', 1, 1, 'C');

$pdf->Cell(50, 40, 'ELECTRICITE', 1, 0, 'C');
$pdf->Cell(100, 20, 'Electrostatique', 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note1 , 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note2, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$moyelectro, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$mue_1, 1, 0, 'C');
$pdf->Cell(30, 20, '2', 1, 0, 'C');
$pdf->Cell(30, 20, ''. number_format($mue_maj, 2, '.', ''),1, 0, 'C');
$pdf->Cell(30, 20, ''. number_format($moy, 2, '.', ''),1, 1, 'C');
// $pdf->Cell(50, 20, 'ELECTROSTAT', 1, 0, 'C');


$pdf->Cell(50, 0, '', 0, 0, 'C');
$pdf->Cell(100, 20, 'Electrocinetique', 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note3, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note4, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$moycin, 1, 0, 'C');
$pdf->Cell(30, 20, '', 1, 0, 'C');
$pdf->Cell(30, 20, '3', 1, 0, 'C');
$pdf->Cell(30, 20, '', 0, 0, 'C');
$pdf->Cell(30, 20, '', 0, 1, 'C');

// Ajouter des données dans le tableau
$pdf->Cell(50, 40, 'INFORMATIQUE', 1, 0, 'C');
$pdf->Cell(100, 20, 'Architecture des ordinateurs', 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note5, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note6, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$moyado, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$mue_2, 1, 0, 'C');
$pdf->Cell(30, 20, '1', 1, 0, 'C');
$pdf->Cell(30, 20, '', 0, 0, 'C');
$pdf->Cell(30, 20, '', 0, 1, 'C');

$pdf->Cell(50, 0, '', 0, 0, 'C');
$pdf->Cell(100, 20, 'Initiation en algorithmique', 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note7, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note8, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$moyalgo, 1, 0, 'C');
$pdf->Cell(30, 20, '', 1, 0, 'C');
$pdf->Cell(30, 20, '3', 1, 0, 'C');
$pdf->Cell(30, 20, '', 0, 0, 'C');
$pdf->Cell(30, 20, '', 0, 1, 'C');

// UE Mineures
$pdf->Cell(50, 20, 'UE Mineures', 1, 0, 'C');
$pdf->Cell(100, 20, 'Elements constitutifs', 1, 0, 'C');
$pdf->Cell(30, 20, 'NOTE 1', 1, 0, 'C');
$pdf->Cell(30, 20, 'NOTE 2', 1, 0, 'C');
$pdf->Cell(30, 20, 'M. CLASSE', 1, 0, 'C');
$pdf->Cell(30, 20, 'M. UE', 1, 0, 'C');
$pdf->Cell(30, 20, 'CREDIT', 1, 0, 'C');
$pdf->Cell(30, 20, 'M. UE Min', 1, 0, 'C');
$pdf->Cell(30, 20, '', 0, 1, 'C');

$pdf->Cell(50, 20, 'Droit', 1, 0, 'C');
$pdf->Cell(100, 20, 'Introduction au Droit', 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note9, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$note10, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$moydroit, 1, 0, 'C');
$pdf->Cell(30, 20, ''.$mue_3, 1, 0, 'C');
$pdf->Cell(30, 20, '1', 1, 0, 'C');
$pdf->Cell(30, 20, ''.$mue_min, 1, 0, 'C');
$pdf->Cell(30, 20, '', 0, 1, 'C');

// Et ainsi de suite pour les autres éléments constitutifs...

    
    // Nom du fichier PDF de sortie
    $file_name = 'bulletin_de_notes.pdf';
    
    // Sortie du PDF en téléchargement
    $pdf->Output($file_name, 'D');
    exit;
}
?>

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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 60%;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            font-weight: bold;
            margin-bottom: 10px;
        }

        input[type="text"] {
            padding: 10px;
            width: 200px;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 20px;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #0483c4;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
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
          <h1 class="py-3 my-4">Résultats Académiques</h1>
          <div class="container">
        <h3>Entrez les notes pour générer le bulletin de notes</h3>
        
        <form method="post">

            
             
            <label for="uem">UE MAJEUR:</label>

            <label for="">Electricité:</label>

            <label for="">Electrostatique:</label>
            <label for="note1">Note 1 :</label>
            <input type="text" name="note1" id="note1" />
            
            <label for="note2">Note 2 :</label>
            <input type="text" name="note2" id="note2" />
            
            <label for="">Electrocinétique:</label> 

            <label for="note3">Note 1 :</label>
            <input type="text" name="note3" id="note3" />

            <label for="note4">Note 2 :</label>
            <input type="text" name="note4" id="note4" />

            <label for="">INFORMATIQUE :</label>

            <label for="">Ado:</label>
            <label for="note5">Note 1 :</label>
            <input type="text" name="note5" id="note5" />
            
            <label for="note6">Note 2 :</label>
            <input type="text" name="note6" id="note6" />
            
            <label for="">Algo:</label> 

            <label for="note7">Note 1 :</label>
            <input type="text" name="note7" id="note7" />

            <label for="note8">Note 2 :</label>
            <input type="text" name="note8" id="note8" />


            <label for="uem">UE MINEUR:</label>
            <label for="">Droit:</label> 
            
            <label for="note9">Note 1 :</label>
            <input type="text" name="note9" id="note9" />
            
            <label for="note10">Note 2 :</label>
            <input type="text" name="note10" id="note10" />

            
            <input type="submit" value="Générer Bulletin de Notes en PDF">
        </form>
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
