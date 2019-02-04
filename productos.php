<?php
//phpinfo();
//
//Set values for page
$page_title = "";
$current_page = "products";

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
                    <a href="producto?marca=kronos&categoria=pinturas%20y%20recubrimientos"></a>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/byk.png" />
                        <figcaption>Aditivos para Recubrimientos, Tintas y Plásticos</figcaption>
                    </div>
                    <a href="producto?marca=byk&categoria=desairante"></a>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/eckart.png" />
                        <figcaption>Pigmentos Metálicos</figcaption>
                    </div>
                    <a href="producto?marca=eckart&categoria=bronce%20en%20polvo"></a>
                </figure>
            </section>

            <section class="row wrapper">
                <div>
                    <figure class="col s12 m4 v-flex">
                        <div>
                            <img src="images/logos/chromaflo.png" />
                            <figcaption>Dispersiones Acuosas de Pigmentos</figcaption>
                        </div>
                        <a href="producto?marca=chromaflo&categoria=dispersiones%20acuosas%20de%20pigmentos"></a>
                    </figure>
                    <figure class="col s12 m4 v-flex">
                        <div>
                            <img src="images/logos/reverte.png" />
                            <figcaption>Oxo-biodegradables</figcaption>
                        </div>
                        <a href="producto?marca=reverte&categoria=oxo-biodegradables"></a>
                    </figure>
                    <figure class="col s12 m4 v-flex">
                        <div>
                            <img src="images/logos/yillong.png" />
                            <figcaption>Hidroxietilcelulosa</figcaption>
                        </div>
                        <a href="producto?marca=yil%20long&categoria=espesante%20celulosico"></a>
                    </figure>
            </section>

            <section class="row wrapper">
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/sili.png" />
                        <figcaption>Perlas de Vidrio para Molinos</figcaption>
                    </div>
                    <a href="producto?marca=sigmund%20linder&categoria=perlas%20de%20circonio"></a>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/potters.png" />
                        <figcaption>Microesferas Huecas de Borosilicato de Sodio</figcaption>
                    </div>
                    <a href="producto?marca=potters&categoria=microesferas%20huecas"></a>
                </figure>
                <figure class="col s12 m4 v-flex">
                    <div>
                        <img src="images/logos/perstorp.png" />
                        <figcaption>Agente Coalescente</figcaption>
                    </div>
                    <a href="producto?marca=perstorp&categoria=agente%20coalescente"></a>
                </figure>
            </section>
        </main>

        <?php
        include_once('./assets/footer.php');
    }
    ?>
</body>
</html>