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

        <main role="main" class="container" id="product">
            <section class="row wrapper">
                <?php
                //Load Google Analytics
                include_once('./assets/sub-menu.php');
                ?>

                <nav id="product-menu">
                    <ul class="v-flex">
                        <li><a href="">Pinturas y Recubrimientos</a></li>
                        <li><a href="">Tintas</a></li>
                        <li><a href="">Plásticos</a></li>
                        <li><a href="">Alimentos y Fármacos</a></li>
                        <li><a href="">Otras Aplicaciones</a></li>
                    </ul>
                </nav>

                <table>
                    <thead>
                        <tr class="table100-head">
                            <th class="column1">Producto</th>
                            <th class="column2">Tipo</th>
                            <th class="column3">Hoja Técnica</th>
                            <th class="column4">Hoja de Seguridad</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="column1">KRONOS 2360</td>
                            <td class="column2">Pinturas y Recubrimientos</td>
                            <td class="column3"><a href="">TDS</a></td>
                            <td class="column4"><a href="">TDS</a></td>
                        </tr>
                        <tr>
                            <td class="column1">KRONOS 2360</td>
                            <td class="column2">Pinturas y Recubrimientos</td>
                            <td class="column3"><a href="">TDS</a></td>
                            <td class="column4"><a href="">TDS</a></td>
                        </tr>
                    </tbody>
                </table>

            </section>
        </main>

        <?php
        include_once('./assets/footer.php');
    }
    ?>
</body>
</html>