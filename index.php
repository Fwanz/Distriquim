<?php
//phpinfo();
//
//Set values for page
$page_title = "";
$current_page = "home";

//Load Mobile Flag
include_once('./assets/m.flag.php');
$detect = new Mobile_Detect;

//Load codes
include_once('./assets/resources.php');
?>
</head>

<body>
    <?php
    //Load Google Analytics
    include_once('./assets/analyticstracking.php');
    ?>

    <?php
    //Load header
    if ($detect->isMobile()) {
        include_once('./assets/m.header.php');
        include_once('./m.main.php');
        include_once('./assets/m.footer.php');
    } else {
        include_once('./assets/header.php');
        include_once('./main.php');
        include_once('./assets/footer.php');
    }
    ?>
</body>
</html>