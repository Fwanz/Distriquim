<header id="header">
    <div class="wrapper">
        <figure id="logo">
            <a href="./"><img class="svg" src="images/logo.svg" /></a>
        </figure>

        <nav id="main-menu">
            <ul>
                <li><a <?php if ($current_page == "home") { ?> class="active" <?php } ?> href="./">Inicio</a></li>
                <li><a <?php if ($current_page == "products") { ?> class="active" <?php } ?> href="productos">Productos</a></li>
                <li><a <?php if ($current_page == "about") { ?> class="active" <?php } ?> href="nosotros">Sobre Nosotros</a></li>
                <li><a <?php if ($current_page == "contact") { ?> class="active" <?php } ?> onclick="showContact();">Contáctenos</a></li>
            </ul>
        </nav>
    </div>
</header>