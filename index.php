<?php
if(!empty($_POST)) {
  extract($_POST);
  $valid = true;
  if(empty($nom)){  $valid=false; $erreurnom="Nom et prenom obligatoire";}
  if(!preg_match("/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i",$email))
   {
    $valid=false;
    $erreurmail ="votre mail n'est pas valide";
   }
  if(empty($email)){  $valid=false; $erreurmail="mail obligatoire";}
  if(empty($phone)){  $valid=false; $erreurphone="Numéro de téléphone obligatoire";}
  if(empty($texte)){  $valid=false; $erreurtexte="message obligatoire"; }
  if($valid){ 
     $to = "linae83@gmail.com";
    //=====Définition du sujet.
    $subject = $nom. " a contacté le site";
    //=========
    //=====Création du header de l'e-mail.
    $header = "From: $nom <$email>";
    //==========
    //=====Création du message.
    $message = "\n";
    $message.= "Content-Type: multipart/alternative;";
    $message.= "\n";
    //=====Ajout du message au format texte.
    $message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"";
    $message.= "Content-Transfer-Encoding: 8bit";
    $message.= "\n";
    $message = "Nom Prenom: $nom \nEmail: $email - Numéro de téléphone: $phone\n\n$texte"; 
    //========== 
    $nom = stripslashes($nom);
    $email= stripcslashes($email);
    $phone= stripcslashes($phone);
    $texte= stripcslashes($texte);

    if(mail($to,$subject,$message,$header)){
      $erreur = "Votre message nous est bien parvenu";
      unset($nom);
      unset($email);
      unset($phone);
      unset($texte);
    }
    else{
      $erreur = "Une erreur est survenue";
    }
  }
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Porfolio de Joannie 'Linae' RICHARD ">
    <meta name="keywords" content="portfolio, infographiste, illustratrice, linae, joannie richard, graphiste, pau, région paloise, book, graphisme, carte de visite, logo, flyer, plaquette">
    <meta name="author" content="Joannie Richard">
    <title>Linae - Infographiste - Illustratrice</title>

    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Favicon : Icone afficher sur l'onglet de la page -->
    <link rel="shortcut icon" href="favicon.ico" />
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <link rel="icon" type="image/png" href="favicon.png" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
    <link href="css/zoombox.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 col-md-2 ">
                <div class="navbar navbar-default navbar-fixed-top" role="navigation">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>

                    </div>
                    <img src="img/logo.jpg" alt="Logo" id="logo" class="img-responsive" />

                    <div class="navbar-collapse collapse">
                        <ul class="nav nav-sidebar" id="main-menu">
                            <li class=""><a href="#section-graphics">Graphisme</a>
                            </li>
                            <li class=""><a href="#section-illustration">Illustration</a>
                            </li>
                            <li class=""><a href="#section-about">A propos</a>
                            </li>
                            <li class=""><a href="#section-contact">Contact</a>
                            </li>
                        </ul>
                    </div>
                    <a href="http://linaegraphisme.tumblr.com/" target="_blank"><i class="fa fa-tumblr fa-2x" id="logo_tumblr"></i></a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9 col-md-10">
                <!-- Graphisme -->
                <div class="row" id="section-graphics">
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery1 column" href="img/Graphisme/Originals/1a.jpg">
                            <img src="img/Graphisme/1.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Identité visuelle pour un autoentrepreneur spécialisé dans la création de vêtements "faits main" pour enfants.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery1" href="img/Graphisme/Originals/1b.jpg"></a>
                        <a class=" zoombox zgallery1" href="img/Graphisme/Originals/1c.jpg"></a>
                        <a class=" zoombox zgallery1" href="img/Graphisme/Originals/1d.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery2 column" href="img/Graphisme/Originals/2a.jpg">
                            <img src="img/Graphisme/2.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Logo pour un pâtissier spécialiste de la confection de macarons hauts de gamme.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery2" href="img/Graphisme/Originals/2b.jpg"></a>
                        <a class=" zoombox zgallery2" href="img/Graphisme/Originals/2c.jpg"></a>
                        <a class=" zoombox zgallery2" href="img/Graphisme/Originals/2d.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery3 column" href="img/Graphisme/Originals/3a.jpg">
                            <img src="img/Graphisme/3.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Carte de visite et dépliant pour un ingénieur en environnement.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery3" href="img/Graphisme/Originals/3b.jpg"></a>
                        <a class=" zoombox zgallery3" href="img/Graphisme/Originals/3c.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery4 column" href="img/Graphisme/Originals/4a.jpg">
                            <img src="img/Graphisme/4.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Logo, cartes de visites et de correspondance ainsi que pochettes pour Per'Actis, un indépendant coach de vie.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery4" href="img/Graphisme/Originals/4b.jpg"></a>
                        <a class=" zoombox zgallery4" href="img/Graphisme/Originals/4c.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery5 column" href="img/Graphisme/Originals/5a.jpg">
                            <img src="img/Graphisme/5.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Rapport Développement Durable annuel pour SCLE SFE, une grande société pionnière de solutions énergétiques durables.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery5" href="img/Graphisme/Originals/5b.png"></a>
                        <a class=" zoombox zgallery5" href="img/Graphisme/Originals/5c.png"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery6 column" href="img/Graphisme/Originals/6a.jpg">
                            <img src="img/Graphisme/6.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Logo déclinable pour SP2A, entreprise oeuvrant dans l'énergie et l'eau sur le continent africain.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery6" href="img/Graphisme/Originals/6b.jpg"></a>
                        <a class=" zoombox zgallery6" href="img/Graphisme/Originals/6c.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery7 column" href="img/Graphisme/Originals/7a.jpg">
                            <img src="img/Graphisme/7.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Logo pour un architecte urbain.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery7" href="img/Graphisme/Originals/7b.jpg"></a>
                        <a class=" zoombox zgallery7" href="img/Graphisme/Originals/7c.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery8 column" href="img/Graphisme/Originals/8a.jpg">
                            <img src="img/Graphisme/8.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Logo et dépliant pour une animalerie de centre-ville spécialisée dans la vente de reptiles et d'animaux aquatiques.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery8" href="img/Graphisme/Originals/8b.jpg"></a>
                        <a class=" zoombox zgallery8" href="img/Graphisme/Originals/8c.jpg"></a>
                        <a class=" zoombox zgallery8" href="img/Graphisme/Originals/8d.jpg"></a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery9 column" href="img/Graphisme/Originals/9a.png">
                            <img src="img/Graphisme/9.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Visuels pour la promotion d'Aeromorning, un site internet sur l'actualité aéronautique.</p>
                            </div>
                        </a>
                        <a class=" zoombox zgallery9" href="img/Graphisme/Originals/9b.png"></a>
                    </div>
                </div>
                <!-- Illustration -->
                <div class="row" id="section-illustration">
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery11 column" href="img/illustrations/originals/1.jpg">
                            <img src="img/illustrations/1.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Dessin digital à la tablette graphique sur le thème du Petit Chaperon Rouge</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery12 column" href="img/illustrations/originals/2.jpg">
                            <img src="img/illustrations/2.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Aquarelle et crayons de couleur.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery13 column" href="img/illustrations/originals/3.jpg">
                            <img src="img/illustrations/3.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Dessin digital à la tablette graphique. Adaptation inspirée d'un personnage existant.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery14 column" href="img/illustrations/originals/4.jpg">
                            <img src="img/illustrations/4.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Sanguine, fusain et crayons de couleur.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery15 column" href="img/illustrations/originals/5.jpg">
                            <img src="img/illustrations/5.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Peinture acrylique sur toile.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery16 column" href="img/illustrations/originals/6.jpg">
                            <img src="img/illustrations/6.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Sanguine, crayons de couleur aquarellables et pastels secs.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery17 column" href="img/illustrations/originals/7.jpg">
                            <img src="img/illustrations/7.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Dessin au crayon gris puis scanné pour colorisation digitale sur le thème d'Alice au Pays des Merveilles.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery18 column" href="img/illustrations/originals/8.jpg">
                            <img src="img/illustrations/8.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Peinture digitale imitation acrylique et pinceaux secs.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery19 column" href="img/illustrations/originals/9.jpg">
                            <img src="img/illustrations/9.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Lavis sur format raisin représentant un Gryphon.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery20 column" href="img/illustrations/originals/10.jpg">
                            <img src="img/illustrations/10.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Dessin digital par tablette graphique.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery21 column" href="img/illustrations/originals/11.jpg">
                            <img src="img/illustrations/11.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Aquarelle et crayons de couleur.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery22 column" href="img/illustrations/originals/12.jpg">
                            <img src="img/illustrations/12.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Peinture acrylique sur papier spécial acrylique.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery23 column" href="img/illustrations/originals/13.jpg">
                            <img src="img/illustrations/13.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Aquarelle sur papier spécial aquarelle.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery24 column" href="img/illustrations/originals/14.jpg">
                            <img src="img/illustrations/14.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Dessin digital à la tablette graphique.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-xs-12 col-sm-4 col-md-4 offset-0">
                        <a class=" zoombox zgallery25 column" href="img/illustrations/originals/15.jpg">
                            <img src="img/illustrations/15.jpg" alt="" />
                            <div class="portfolio-hover-content">
                                <p>Stylo bille noir et colorisation digitale.</p>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- A propos -->
                <div class="row" id="section-about">
                    <h1>A Propos</h1>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <p>Jeune graphiste indépendante, créative et passionnée, je réalise les maquettes de vos supports destinés à l'impression. </p>
                        <p>
                            Crayon à la main, je trouve les solutions de communication optimales et sur-mesure pour votre entreprise.
                        </p>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-6">
                        <p><strong>Vous avez un projet ? N'hésitez pas à venir m'en parler. Ensemble, nous imaginerons LA réponse adaptée à vos besoins et à votre budget !</strong></p>
                    </div>
                </div>
                <div class="row" id="section-contact">
                    <h1 id="contact-title">Contact</h1>
                    <span class="error"><?php if(isset($erreur)) echo $erreur;?></span>
                    <form action="index.php" method="post">
                        <div class="col-xs-12 col-md-3">
                            <span class="error-message"><?php if(isset($erreurnom)) echo $erreurnom; ?></span>
                            <input type="text" placeholder="Nom Prénom" name="nom" id="nom" value="<?php if(isset($nom)) echo $nom; ?>">
                            <span class="error-message"><?php if (isset($erreurmail)) echo $erreurmail; ?></span>
                            <input type="email" placeholder="Mail" name="email" id="email" value="<?php if(isset($email)) echo $email; ?>">
                            <span class="error-message"><?php if (isset($erreurphone)) echo $erreurphone; ?></span>
                            <input type="tel" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" placeholder="Téléphone" name="phone" id="phone" value="<?php if(isset($phone)) echo $phone; ?>">
                        </div>
                        <div class="col-xs-12 col-md-6">
                            <textarea name="texte" id="texte" rows="9"><?php if(isset($texte)) echo $texte; ?></textarea>
                            <span class="error-message"><?php if (isset($erreurtexte)) echo $erreurtexte; ?></span>
                            <button name="send" type="submit">Envoyer</button>
                        </div>
                        <div class="col-xs-12 col-md-3">
                            <div class="row">
                                <p>Joannie RICHARD <br/> 21 rue de la plaine <br/> 64140 BILLERE</p>
                                    <img src="img/icon_place.png" alt="" class="icon" id="address" />
                            </div>

                            <div class="row">
                                <p>06 24 74 54 17
                                    <img src="img/icon_phone.png" alt="" class="icon" id="tel"/>

                                </p>
                            </div>


                            <div class="row">
                               
                                <p>
                                <a href="mailto:contact@linae.org">contact@linae.org</a>
                                <img src="img/icon_send.png" alt="" class="icon" id="mail"/>
                                
                                </p>
                            </div>
                        </div>
                    </form>

                </div>

            </div>
            <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>

            <script src="js/main.js"></script>
            <!-- Include all compiled plugins (below), or include individual files as needed -->
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
            <script type="text/javascript" src="js/zoombox.js"></script>
            <script type="text/javascript">
                //<![CDATA[
                $(function () {
                    $('a.zoombox').zoombox();
                    /*
                    //* Or You can also use specific options
                    $('a.zoombox').zoombox({
                        theme: 'zoombox', //available themes : zoombox,lightbox, prettyphoto, darkprettyphoto, simple
                        opacity: 0.8, // Black overlay opacity
                        duration: 800, // Animation duration
                        animation: true, // Do we have to animate the box ?
                        width: 600, // Default width
                        height: 400, // Default height
                        gallery: true, // Allow gallery thumb view
                        autoplay: false // Autoplay for video
                    });
                    */
                });
                //]]>
            </script>
        </div>
    </div>
</body>

</html>