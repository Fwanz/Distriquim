<!DOCTYPE html>

<html lang="es">
    <head>
        <title><?php echo $page_title; ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="description" content="<?php echo $description; ?>" />
        <meta name="keywords" content="<?php echo $keywords; ?>" />
        <link rel="icon" type="image/png" href="images/icon.png">

        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

        <!-- Main CSS -->
        <link rel="stylesheet" type="text/css" href="./css/style.css?d=<?php echo time(); ?>" />
        <link rel="stylesheet" type="text/css" media='all and (max-width: 1599px)' href="./css/notebook.css?d=<?php echo time(); ?>" />
        <link rel="stylesheet" type="text/css" media='all and (max-width: 1024px)' href="./css/mobile.css?d=<?php echo time(); ?>" />

        <!-- Materialize 5-cols grid -->
        <link rel="stylesheet" type="text/css" href="./css/materialize.grid5.css" />

        <!-- Compiled and minified jQuery from Google Library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- Font Awesome CDN -->
        <script type="text/javascript" src="https://use.fontawesome.com/2d6d7ba8c5.js"></script>

        <!-- Compiled and minified JavaScript -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

        <!-- Compiled and minified jQuery from Google Library -->
        <script type="text/javascript" src="./lib/svg-fill.js"></script>

        <!-- Compiled and minified jQuery for the Contact Form -->
        <script type="text/javascript" src="./js/scripts.js?d=<?php echo time(); ?>"></script>

        <!-- Modernizr for Mobile Menu -->
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>

        <!-- Font from Google Library -->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>

        <script>
            $(document).ready(function () {
                /*$('#main-menu').dlmenu();*/

                $(".rotate").click(function () {
                    $(this).toggleClass("open");
                });

                $('.sub-menu').on('mouseover', function () {
                });
            });

            function showContact() {
                $('html,body').animate({
                 scrollTop: $("#footer").offset().top
                 },
                 'slow');
            }
        </script>