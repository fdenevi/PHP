<?php
    include("head.php");
    include("header.php");

    //constantes
    const html = 38;
    const js = 34;
    const reactJs = 28;

    //variables
    $horasCursadas = html + js + reactJs;
?>

    <section id="portfolio">
        <h1>PORTFOLIO</h1>

        <div class="cursos">
            <ul>
                <li><a href="portfolio.php?curso=html">DESARROLLO WEB</a></li>
                <li><a href="portfolio.php?curso=js">JAVASCRIPT</a></li>
                <li><a href="portfolio.php?curso=react">REACT JS</a></li>
            </ul>
        </div>

        <div class="horasCursos">
            <ul>
                <li>Horas cursadas en HTML Y CSS: <?php echo html ?></li>
                <li>Horas cursadas en JavaScript: <?php echo js ?></li>
                <li>Horas cursadas en ReactJs: <?php echo reactJs ?></li>
                <li>TOTAL DE HORAS CURSADAS: <?php echo $horasCursadas ?></li>
            </ul>
        </div>

        <?php
            if (isset($_GET['curso'])){
                switch($_GET['curso']){
                    case 'html':
                        $imagen = './img/web.png';
                        $curso = 'DESARROLLO WEB';
                        $lugar = 'CoderHouse';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        $repo = '<a href="https://github.com/fdenevi/HTMLproyectoFinalDenevi.git" target="_blank">REPO</a>';
                        $demo = '<a href="https://estudiopatronus.netlify.app/" target="_blank">DEMO</a>';
                        break;

                    case 'js':
                        $imagen = './img/js.png';
                        $curso = 'JAVASCRIPT';
                        $lugar = 'CoderHouse';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        $repo = '<a href="https://github.com/fdenevi/JSproyectoFinal.git" target="_blank">REPO</a>';
                        $demo = '<a href="https://flowgrow.netlify.app/" target="_blank">DEMO</a>';
                        break;

                    case 'react':
                        $imagen = './img/react.png';
                        $curso = 'REACT JS';
                        $lugar = 'CoderHouse';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        $repo = '<a href="https://github.com/fdenevi/ReactJs_proyecto-final.git" target="_blank">REPO</a>';
                        $demo = '<a href="https://libra-shoes.netlify.app/" target="_blank">DEMO</a>';
                        break;
                }
            }
        ?>

        <div class="info">
            <div>
                <img src="<?php echo $imagen ?>" alt="<?php echo $curso ?>">
            </div>
            <div>
                <h2> <?php echo $curso ?> </h2>
                <h3> <?php echo $lugar ?> </h3>
                <p> <?php echo $descripcion ?> </p>
                <div class="links">
                    <?php echo $repo ?>
                    <?php echo $demo ?>
                </div>
            </div>
        </div>
    </section>

    <?php include("footer.php") ?>
</body>
</html>