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
        ?>


        <?php
        include_once('./assets/m.footer.php');
    } else {
        include_once('./assets/header.php');
        ?>

        <main role="main" class="container" id="products">
            <section class="row wrapper">
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/kronos.png" />
                        <figcaption>Dióxido de Titanio</figcaption>
                    </div>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/byk.png" />
                        <figcaption>Aditivos para Recubrimientos, Tintas y Plásticos</figcaption>
                    </div>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/eckart.png" />
                        <figcaption>Pigmentos Metálicos</figcaption>
                    </div>
                </figure>
            </section>

            <section class="row wrapper">
                <div>
                    <figure class="col s12 m4 v-flex">
                        <div>
                            <img src="images/logos/chromaflo.png" />
                            <figcaption>Dispersiones Acuosas de Pigmentos</figcaption>
                        </div>
                    </figure>
                    <figure class="col s12 m4 v-flex">
                        <div>
                            <img src="images/logos/reverte.png" />
                            <figcaption>Oxo-biodegradables</figcaption>
                        </div>
                    </figure>
                    <figure class="col s12 m4 v-flex">
                        <div>
                            <img src="images/logos/yillong.png" />
                            <figcaption>Hidroxietilcelulosa</figcaption>
                        </div>
                    </figure>
            </section>

            <section class="row wrapper">
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/sili.png" />
                        <figcaption>Perlas de Vidrio para Molinos</figcaption>
                    </div>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/potters.png" />
                        <figcaption>Microesferas Huecas de Borosilicato de Sodio</figcaption>
                    </div>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/perstorp.png" />
                        <figcaption>Agente Coalescente</figcaption>
                    </div>
                </figure>
            </section>
        </main>

        <?php
        include_once('./assets/footer.php');
    }
    ?>
</body>
</html>