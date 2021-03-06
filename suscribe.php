<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Contact - Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-casual.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
                <a class="navbar-brand" href="index.html">EBEC Supelec</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="logo_ebec_navbar">
                <a href="index.html"><img src="img/logo_ebec_saclay.png" width="150px"></a>
            </div>
            <div id="menu_navbar">
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="prop_menu">
                      <a href="suscribe.php">S'inscrire</a>
                    </li>
                    <li class="prop_menu">
                        <a href="lieu.html">Contact</a>
                    </li>
                    <li class="prop_menu">
                        <a href="best.html">L'association</a>
                    </li>
                </ul>
            </div>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <div class="container">

        <div class="row">
            <div class="box">
                <div class="col-lg-12">
                    <hr>
                    <h2 class="intro-text text-center">Inscription
                        <strong>EBEC SACLAY</strong>
                    </h2>
                    <hr>
                    <p>Les champs avec une astérisque sont obligatoires :</p>
                  
                    <form role="form" method="POST" action="contact_me.php">
                        <div class="row">
                            <div class="form-group col-lg-4">
                                <label>Nom de l'équipe<span class="asterisque"></span>
                                <input type="text" class="form-control" name="equipe">
                                </label>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Addresse Mail
                                <input type="email" class="form-control" name="email">
                                </label>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Nom et Prénom du participant 1
                                <input type="text" class="form-control" name="nomprenom1">
                                </label>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Nom et Prénom du participant 2
                                <input type="text" class="form-control" name="nomprenom2">
                                </label>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Nom et Prénom du participant 3
                                <input type="text" class="form-control"  name="nomprenom3">
                                </label>
                            </div>
                            <div class="form-group col-lg-4">
                                <label>Nom et Prénom du participant 4
                                <input type="text" class="form-control" name="nomprenom4">
                                </label>

                            </div>
                            <div class="form-group col-lg-4">
                                <label>Numéro de téléphone</label>
                                <input type="tel" class="form-control" name="telephone">
                            </div>
                            <div class="form-group col-lg-12">
                                <input type="hidden" name="save" value="contact">
                                <button type="submit" class="btn btn-default">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container -->

    
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
