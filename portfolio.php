<?php
    include("head.php");
    include("header.php");
?>

    <section>
        <h1>PORTFOLIO</h1>

        <div>
            <ul>
                <li><a href="portfolio.php?curso=html">Desarrollo Web</a></li>
                <li><a href="portfolio.php?curso=js">JavaScript</a></li>
                <li><a href="portfolio.php?curso=react">ReactJs</a></li>
            </ul>
        </div>

        <?php
            if (isset($_GET['curso'])){
                switch($_GET['curso']){
                    case 'html':
                        $curso = 'Desarrollo Web';
                        $lugar = 'CoderHouse';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        break;

                    case 'js':
                        $curso = 'JavaScript';
                        $lugar = 'CoderHouse';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        break;

                    case 'react':
                        $curso = 'ReactJs';
                        $lugar = 'CoderHouse';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        break;
                }
            }
        ?>

        <div>
            <h2> <?php echo $curso ?> </h2>
            <h3> <?php echo $lugar ?> </h3>
            <p> <?php echo $descripcion ?> </p>
        </div>
        
    </section>

    <?php include("footer.php") ?>
</body>
</html>