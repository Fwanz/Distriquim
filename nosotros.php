<?php
//phpinfo();
//
//Set values for page
$page_title = "";
$current_page = "about";

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


        <main class="container v-flex" id="about">
            <div class="wrapper row">
                <section id="us" class="col s12">
                    <h1>¿QUIÉNES SOMOS?</h1>

                    <p>Distriqum C.A. es una empresa fundada en 1979,  dedicada a la comercialización y distribución de materias primas para la industria de recubrimientos, tintas de impresión, plásticos y resinas.<br><br>
                        Contamos con amplia  experiencia en el ramo, ofreciendo a nuestros clientes productos de excelente calidad, respaldado por un impecable servicio al cliente, tanto durante la venta como la post venta.<br><br>
                        Ofrecemos asesoramiento técnico directamente de nuestros proveedores internacionales en visitas periódicas a nuestro país, brindando apoyo a los clientes para lograr el uso adecuado de los productos que comercializamos.</p>
                </section>

                <section id="values" class="col s12 m6">
                    <h1>VALORES</h1>
                    
                    <p>Somos una organización de primera línea, conformado por un personal altamente calificado en cada área, fortalecidos por el trabajo en equipo.<br><br>
                        Valoramos el Respeto, la Cordialidad y la Amabilidad entre nosotros, así como, para con los clientes, nuestros proveedores y la comunidad.<br>
                        Contamos con excelente clima organizacional, con un equipo motivado al logro,  vocación de servicio y apego a sus funciones, siempre dispuestos a dar más, para cumplir nuestros valores y compromisos.<br><br>
                        En nuestra empresa, el recurso humano es el factor que nos diferencia del resto de la competencia</p>
                </section>

                <section id="vision" class="col s12 m6">
                    <h1>VISIÓN</h1>
                    
                    <p>Ser la primera opción para nuestros clientes como proveedores de sus materias primas, manteniéndonos como  una empresa  eficiente, sólida y que brinde un excelente servicio y el estándar de calidad en los productos que comercializamos, respaldados por los mejores fabricantes de materias primas a nivel mundial.</p>
                </section>
            </div>
        </main>

        <?php
        include_once('./assets/footer.php');
    }
    ?>
</body>
</html>