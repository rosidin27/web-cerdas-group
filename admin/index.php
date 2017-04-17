<?php
    include "../config/koneksi.php";
    session_start();
    if(!isset($_SESSION['username'])){
        echo "<meta http-equiv='refresh' content='0,../?cmd=login'>";
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="Flatfy Free Flat and Responsive HTML5 Template ">
    <meta name="author" content="">

    <title>Cerdas Group</title>

    <!-- Bootstrap core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
 
    <!-- Custom Google Web Font -->
    <link href="../font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arvo:400,700' rel='stylesheet' type='text/css'>
    
    <!-- Custom CSS-->
    <link href="../css/general.css" rel="stylesheet">

     <!-- Owl-Carousel -->
    <link href="../css/custom.css" rel="stylesheet">
    <link href="../css/owl.carousel.css" rel="stylesheet">
    <link href="../css/owl.theme.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">
    <link href="../css/animate.css" rel="stylesheet">
    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="../css/magnific-popup.css"> 
    
    <script src="../js/modernizr-2.8.3.min.js"></script>  <!-- Modernizr /-->
    <!--[if IE 9]>
        <script src="js/PIE_IE9.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
        <script src="js/PIE_IE678.js"></script>
    <![endif]-->

    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->
    <style type="text/css">
        .devider{
            height: 1px;
            margin: 9px 0;
            overflow: hidden;
            background-color: #e5e5e5;
        }
    </style>
</head>

<body id="page-top" class="index">
    
    <?php
        include "include/navigation.php"; 
    ?>
    <div class="container">
    <?php    
        if(isset($_GET['data'])){
            $data = $_GET['data'];
            switch ($data) {
                case 'profil':
                    include "data-profil/profil.php";
                    break;
                case 'galeri':
                    include "data-galeri/galeri-redirect.php";
                    break;
                case 'kontak':
                    include "data-kontak/kontak.php";
                    break;
                case 'user':
                    include "data-user/user.php";
                    break;
                default:
                    include "data-profil/profil.php";
                    break;
            }
        }else{
            echo "<meta http-equiv='refresh' content='0,?data=profil&aksi=edit'>";
        }


    ?>
    </div>
    <!-- JavaScript -->
    <script src="../js/jquery-1.10.2.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/owl.carousel.js"></script>
    <script src="../js/script.js"></script>
    <!-- StikyMenu -->
    <script src="../js/stickUp.min.js"></script>
    <script type="text/javascript">
      jQuery(function($) {
        $(document).ready( function() {
          $('.navbar-default').stickUp();
          
        });
      });
    
    </script>
    <!-- Smoothscroll -->
    <script type="text/javascript" src="../js/jquery.corner.js"></script> 
    <script src="../js/wow.min.js"></script>
    <script>
     new WOW().init();
    </script>
    <script src="../js/classie.js"></script>
    <script src="../js/uiMorphingButton_inflow.js"></script>
    <!-- Magnific Popup core JS file -->
    <script src="../js/jquery.magnific-popup.js"></script> 
