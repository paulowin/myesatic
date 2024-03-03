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

<?php
$conn=new PDO('mysql:host=localhost; dbname=myesatic', 'root', '') or die(mysql_error());
if(isset($_POST['submit'])!=""){
  $name=$_FILES['file']['name'];
  $size=$_FILES['file']['size'];
  $type=$_FILES['file']['type'];
  $temp=$_FILES['file']['tmp_name'];
  // $caption1=$_POST['caption'];
  // $link=$_POST['link'];
  $fname = date("YmdHis").'_'.$name;
  $chk = $conn->query("SELECT * FROM  upload where name = '$name' ")->rowCount();
  if($chk){
    $i = 1;
    $c = 0;
	while($c == 0){
    	$i++;
    	$reversedParts = explode('.', strrev($name), 2);
    	$tname = (strrev($reversedParts[1]))."_".($i).'.'.(strrev($reversedParts[0]));
    // var_dump($tname);exit;
    	$chk2 = $conn->query("SELECT * FROM  manuel where name = '$tname' ")->rowCount();
    	if($chk2 == 0){
    		$c = 1;
    		$name = $tname;
    	}
    }
}
 $move =  move_uploaded_file($temp,"../storage/manuel/".$fname);
 if($move){
 	$query=$conn->query("insert into manuel(name,fname)values('$name','$fname')");
	if($query){
	header("pages-account-settings-notifications.php");
	}
	else{
	die(mysql_error());
	}
 }
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

    <title>Basic Inputs - Forms | MyESATIC</title>

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

    <!-- Page CSS -->

    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body style="    background-color: #e7ebf0 !important;">
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
              <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Documents /</span> Manuels et références</h4>

              <div class="row">
                <div class="col-md-6">
                 
                </div>
                <div class="col-md-6">
                
                </div>

             
 <!-- File input -->
 <!-- <div class="row">
                <div class="col-md-6">
 <div class="card">
                    <h5 class="card-header">File input</h5>
                    <div class="card-body">
                      <div class="mb-3">

				  <form action="/upload" class="dropzone needsclick" id="dropzone-multi">
  <div class="dz-message needsclick">
    Drop files here or click to upload
    <span class="note needsclick">(This is just a demo dropzone. Selected files are <span class="fw-medium">not</span> actually uploaded.)</span>
  </div>
  <div class="fallback">
    <input name="file" type="file" />
  </div>
</form>
<script>
const dropzoneMulti = new Dropzone('#dropzone-multi', {
  previewTemplate: previewTemplate,
  parallelUploads: 1,
  maxFilesize: 5,
  addRemoveLinks: true
});
</script>
</div>
</div>
</div>
</div>
</div> -->
         

                  <!-- File input -->
                  <div class="card">
                    <h3 class="card-header"><span>Ajouter un fichier comme support du cours</span></h3>
                    <div class="card-body">
                      <!-- <div class="mb-3">
                        <label for="formFile" class="form-label">Default file input example</label>
                        <input class="form-control" type="file" id="formFile" />
                      </div> -->
                      <div class="mb-3">
					  <form enctype="multipart/form-data" action="" name="form" method="post">
                  <div class="alert alert-primary" role="alert">Vous avez une limite de 50 fichiers
                  </div>
                        <input class="form-control" name="file" type="file" id="file" multiple />
						</div>
						<div class="d-grid gap-2 col-6 mx-auto">
						<button class="btn btn-lg" style="color: #fff;
    background-color: #0483c4;
    border-color: #0483c4;
    box-shadow: 0 0.125rem 0.25rem 0 rgb(4,131,196);
" type="submit" name="submit" id="submit" value="Submit">Valider</button>
						</div>
					</form>
                    
					  
                      <!-- <div>
                        <label for="formFileDisabled" class="form-label">Disabled file input example</label>
                        <input class="form-control" type="file" id="formFileDisabled" disabled />
                      </div> -->
       

  <div class="row-fluid">
	        <div class="span12">
	            <div class="container">
		<br />
	
		<br />
		<br />
    <div class="card">
		<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
			<thead>
				<tr>
					<th width="90%" align="center">Fichiers</th>
					<th align="center">Action</th>	
				</tr>
			</thead>
			<?php
			$query=$conn->query("select * from manuel order by id desc");
			while($row=$query->fetch()){
				$name=$row['name'];
			?>
			<tr>
			
				<td>
					&nbsp;<?php echo $name ;?>
				</td>
				<td>
					<button class="btn" style="color: #fff; background-color: #0483c4; border-color: #0483c4; box-shadow: 0 0.125rem 0.25rem 0 rgb(4,131,196);"><a style="color: #ffffff;" href="dl-doc1.php?filename=<?php echo $name;?>&f=<?php echo $row['fname'] ?>">Télécharger</a></button>
				</td>
			</tr>
			<?php }?>
		</table>
	</div>
  </div>
	</div>
	</div>

            <!-- / Content -->

            <!-- Footer -->
           
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->

    <!-- -->

    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="../assets/vendor/libs/jquery/jquery.js"></script>
    <script src="../assets/vendor/libs/popper/popper.js"></script>
    <script src="../assets/vendor/js/bootstrap.js"></script>
    <script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="../assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->

    <!-- Main JS -->
    <script src="../assets/js/main.js"></script>

    <!-- Page JS -->

    <script src="../assets/js/form-basic-inputs.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
<?php
} else {
  die("Erreur lors de la récupération des informations de l'utilisateur");
}

?>