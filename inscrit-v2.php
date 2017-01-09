<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inscription Validée</title>

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


<?php
// Emails form data to you and the person submitting the form and adds it to a database

// Test for db
$db = new mysqli("DB_HOST","DB_USER","DB_PASSWORD","DB_NAME");
$sql = "SELECT id FROM form_submissions";
$result = $db->query($sql);
if (empty($result)) {
    $sql = "CREATE TABLE `form_submissions` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `name` text COLLATE utf8_unicode_ci,
        `phone` text COLLATE utf8_unicode_ci,
         `email` int(11) DEFAULT NULL,
         `message` text COLLATE utf8_unicode_ci,
         `submitted` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
         PRIMARY KEY (`id`)
         ) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci";
        $result = $db->query($sql);
}


// Set your email below
$myemail = "amable.wernert@gmail.com"; // Replace with your email

// Receive and sanitize input
$team = mysqli_real_escape_string($db, $_POST['equipe']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$nomprenom1 = mysqli_real_escape_string($db, $_POST['nomprenom1']);
$nomprenom2 = mysqli_real_escape_string($db, $_POST['nomprenom2']);
$nomprenom3 = mysqli_real_escape_string($db, $_POST['nomprenom3']);
$nomprenom4 = mysqli_real_escape_string($db, $_POST['nomprenom4']);
$phone = mysqli_real_escape_string($db, $_POST['telephone']);
$message = mysqli_real_escape_string($db, $_POST['message']);

// write to db
$sql = "INSERT INTO form_submissions (name,phone,email,message) VALUES ('$name','$phone','$email','$message')";
$result = $db->query($sql);

// set up email
$msg = "New contact form submission!\nName: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nEmail: " . $email;
$msg = wordwrap($msg,70);
mail($myemail,"New Form Submission",$msg);
//mail($email,"Thank you for your form submission",$msg);
?>

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
                <a class="navbar-brand" href="index.html">Business Casual</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="logo_ebec_navbar">
                <a href="index.php"><img src="img/logo_ebec_saclay.png" width="150px"></a>
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
                    <p> Ton inscription a bien été enregistrée! <br>
                    Tu seras tenu informé des modalités de l'épreuve par mail et sur notre site internet.
                    
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
