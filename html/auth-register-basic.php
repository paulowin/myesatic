<?php $message_retour = null; ?>

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
  class="light-style customizer-hide"
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

    <title>Register Basic - Pages | Sneat - Bootstrap 5 HTML Admin Template - Pro</title>

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
    <!-- Page -->
    <link rel="stylesheet" href="../assets/vendor/css/pages/page-auth.css" />
    <!-- Helpers -->
    <script src="../assets/vendor/js/helpers.js"></script>

    <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
    <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
    <script src="../assets/js/config.js"></script>
  </head>

  <body>
    <!-- Content -->

    <div class="container-xxl">
      <div class="authentication-wrapper authentication-basic container-p-y">
        <div class="authentication-inner">
          <!-- Register Card -->
          <div class="card">
            <div class="card-body">
              <!-- Logo -->
              <div class="app-brand justify-content-center">
                <a href="index.php" class="app-brand-link gap-2">
                  <span class="app-brand-logo demo">
                    <svg
                      width="25"
                      viewBox="0 0 25 42"
                      version="1.1"
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                    >
                      <defs>
                        <path
                          d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z"
                          id="path-1"
                        ></path>
                        <path
                          d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z"
                          id="path-3"
                        ></path>
                        <path
                          d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z"
                          id="path-4"
                        ></path>
                        <path
                          d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z"
                          id="path-5"
                        ></path>
                      </defs>
                      <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                          <g id="Icon" transform="translate(27.000000, 15.000000)">
                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                              <mask id="mask-2" fill="white">
                                <use xlink:href="#path-1"></use>
                              </mask>
                              <use fill="#0483c4" xlink:href="#path-1"></use>
                              <g id="Path-3" mask="url(#mask-2)">
                                <use fill="#0483c4" xlink:href="#path-3"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                              </g>
                              <g id="Path-4" mask="url(#mask-2)">
                                <use fill="#0483c4" xlink:href="#path-4"></use>
                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                              </g>
                            </g>
                            <g
                              id="Triangle"
                              transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) "
                            >
                              <use fill="#0483c4" xlink:href="#path-5"></use>
                              <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                  </span>
                  <span class="app-brand-text demo text-body fw-bolder">Sneat</span>
                </a>
              </div>
              <!-- /Logo -->
              <h4 class="mb-2">Adventure starts here 🚀</h4>
              <p class="mb-4">Make your app management easy and fun!</p>

              <form id="formAuthentication" class="mb-3" action="" method="POST">
                <div class="mb-3">
                  <label for="nom" class="form-label">Votre nom :</label>
                  <input
                    type="text"
                    class="form-control"
                    id="nom"
                    name="nom"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>

                <div class="mb-3">
                  <label for="prenoms" class="form-label">Votre prenoms :</label>
                  <input
                    type="text"
                    class="form-control"
                    id="prenoms"
                    name="prenoms"
                    placeholder="Enter your prenoms"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="birth" class="form-label">Birth :</label>
                  <input
                    type="text"
                    class="form-control"
                    id="birth"
                    name="birth"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="matricule" class="form-label">Votre matricule:</label>
                  <input
                    type="text"
                    class="form-control"
                    id="matricule"
                    name="matricule"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="niveau_etude" class="form-label">Votre niveau_etude :</label>
                  <input
                    type="text"
                    class="form-control"
                    id="niveau_etude"
                    name="niveau_etude"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="filiere" class="form-label">Votre filiere :</label>
                  <input
                    type="text"
                    class="form-control"
                    id="filiere"
                    name="filiere"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>
                <div class="mb-3">
                  <label for="classe" class="form-label">Votre classe :</label>
                  <input
                    type="text"
                    class="form-control"
                    id="classe"
                    name="classe"
                    placeholder="Enter your username"
                    autofocus
                  />
                </div>


                <div class="mb-3">
                  <label for="mail" class="form-label">Votre adresse email :</label>
                  <input type="text" class="form-control" id="mail" name="mail" placeholder="Enter your email" />
                </div>
                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="mdp">Password</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="mdp"
                      class="password"
                      name="mdp"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3 form-password-toggle">
                  <label class="form-label" for="confirmation">confirmation</label>
                  <div class="input-group input-group-merge">
                    <input
                      type="password"
                      id="confirmation"
                      class="password"
                      name="confirmation"
                      placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                      aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                  </div>
                </div>

                <div class="mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
                    <label class="form-check-label" for="terms-conditions">
                      I agree to
                      <a href="javascript:void(0);">privacy policy & terms</a>
                    </label>
                  </div>
                </div>
                <button class="btn btn-primary d-grid w-100" type="submit" name="submit" id="submit" value="Valider votre inscription"  >Valider votre inscription</button>
              </form>

              <?php
    try {
        $bdd = new PDO('mysql:host=localhost;dbname=myesatic;chartset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } catch(Exception $e) {
        die('Erreur :' . $e->getMessage());
    }

    if (!empty($_POST['submit'])) { 
        if ( (!empty($_POST['nom'])) AND (!empty($_POST['prenoms'])) AND (!empty($_POST['birth'])) AND (!empty($_POST['matricule'])) AND (!empty($_POST['niveau_etude'])) AND (!empty($_POST['filiere'])) AND (!empty($_POST['classe']))  AND  (!empty($_POST['mail'])) AND (!empty($_POST['mdp'])) AND (!empty($_POST['confirmation'])) ) {
            $nom = htmlspecialchars($_POST['nom']);
            $prenoms = htmlspecialchars($_POST['prenoms']);
            $birth = htmlspecialchars($_POST['birth']);
            $matricule = htmlspecialchars($_POST['matricule']);
            $niveau_etude = htmlspecialchars($_POST['niveau_etude']);
            $filiere = htmlspecialchars($_POST['filiere']);
            $classe = htmlspecialchars($_POST['classe']);
            $mail = htmlspecialchars($_POST['mail']);
            // tester la disponibilité du mail
            $req_mail = $bdd-> prepare('SELECT COUNT(mail) AS occurence_mail FROM user WHERE mail = ?');
            $req_mail -> execute(array($mail));
            $data_mail = $req_mail->fetch();
            // tester la disponibilité du matricule
            $req_matricule = $bdd-> prepare('SELECT COUNT(matricule) AS occurence_matricule FROM user WHERE matricule = ?');
            $req_matricule -> execute(array($matricule));
            $data_matricule = $req_matricule->fetch();
            if ($data_matricule['occurence_matricule'] == 0) {
                // vérifier la valitié du mail
                if (preg_match("#^[a-z0-9_.-]+@[a-z0-9_.-]{2,}\.[a-z]{2,4}$#", $mail)) {
                 // vérifier la disponibilité du mail
                    if ($data_mail['occurence_mail'] == 0) {
                       // vérifier la validité du mdp
                     // if (preg_match("#[0-9a-zA-Z$@%*+_?!-]{4}[0-9]+[a-z]+[A-Z]+[$@%*+_?!-]+#",$_POST['mdp'])) {
                        // vérifier la correspondance entre mdp et confirmation
                        if ($_POST['mdp'] == $_POST['confirmation']) {
                            // vérifier si doublon mail dans table membres
                            $req_mail = $bdd-> prepare('SELECT COUNT(mail) AS occurence_mail FROM user WHERE mail = ?');
                            $req_mail -> execute(array($mail));
                            $data_mail = $req_mail->fetch();
                            if ($data_mail['occurence_mail'] == 0) {
                                // Insérer dans la table membres
                                $req = $bdd->prepare('INSERT INTO user (nom, prenoms, birth, matricule, niveau_etude, filiere, classe, mail, mdp) VALUES (:nom, :prenoms, :birth, :matricule, :niveau_etude, :filiere, :classe, :mail, :mdp)');
                                $req->execute(array(
                                    'nom' => $nom,
                                    'prenoms' => $prenoms,
                                    'birth' => $birth,
                                    'matricule' => $matricule,
                                    'niveau_etude' => $niveau_etude,
                                    'filiere' => $filiere,
                                    'classe' => $classe,
                                    'mail'=> $mail,
                                    'mdp' => password_hash($_POST['mdp'], PASSWORD_DEFAULT)
                                ));
                                $req->closeCursor();
                                $message_retour = '<strong>Inscription réussie ! Bienvenue dans l\'équipe !</strong>';
                            // sinon renvoyer un message de doublon sur le mail
                            } else {
                                $message_retour = '<strong>Un compte existe déjà pour cette adresse.</strong>';
                            }
                        // renvoyer un message d'erreur sur la correspondance entre mdp et confirmation
                        } else {
                            $message_retour = '<strong>Les mots de passe ne correspondent pas.</strong>';
                        }
                        // renvoyer une erreur de mot de passe non valide
                        // } else {
                        //     $message_retour = '<strong>Le mot de passe n\'est pas valide.</strong>';
                        // }
                        // renvoyer un message de mail non valide
                      } else {
                       $message_retour = '<strong>L\'adresse mail n\'est pas disponible.</strong>';
                      }
                        // renvoyer un message de non disponibilité du nom
                } else {
                    $message_retour = '<strong>L\'adresse mail n\'est pas valide.</strong>';
                }
            // renvoyer un message de non disponibilité du nom
        } else {
            $message_retour = '<strong>Ce matricule n\'est pas disponible.</strong>';
              }
        // renvoyer un message d'informations manquantes
    } else {
        $message_retour = '<strong>Information manquante, toutes les informations doivent être saisies.</strong>';
    }
    }
    
//    unset ($_POST['submit'], $_POST['nom'], $_POST['mail'], $_POST['mdp'], $_POST['confirmation']);
$_POST['submit'] = null;
$_POST['nom'] = null;
$_POST['prenoms'] = null;
$_POST['birth'] = null;
$_POST['matricule'] = null;
$_POST['niveau_etude'] = null;
$_POST['filiere'] = null;
$_POST['classe'] = null;
$_POST['mail'] = null;
$_POST['mdp'] = null;
$_POST['confirmation'] = null;
$_POST['message_retour'] = null;


?>


<p id='message-retour'><strong><?php echo $message_retour; ?></strong></p>


<p class="text-center">
                <span>Already have an account?</span>
                <a href="auth-login-basic.php">
                  <span>Sign in instead</span>
                </a>
              </p>

              <a href="index.php">Retour à la page de connexion</a>
            </div>
          </div>



          <!-- Register Card -->
        </div>
      </div>
    </div>

    <!-- / Content -->

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

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
