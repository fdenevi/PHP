<?php
    include("head.php");
    include("header.php");

    //constantes
    const bodies = 3;
    const buzo = 1;
    const camisa = 1;

    //variables
    $totalProductos = bodies + buzo + camisa;
?>

    <section id="productos">
        <h1>PRODUCTOS</h1>

        <div class="productos">
            <ul>
                <li><a href="productos.php?producto=bodies">BODIES</a></li>
                <li><a href="productos.php?producto=buzo">BUZO</a></li>
                <li><a href="productos.php?producto=camisa">CAMISA</a></li>
            </ul>
        </div>

        <div class="totalProductos">
            <ul>
                <li>Total bodies: <?php echo bodies ?></li>
                <li>Total buzos: <?php echo buzo ?></li>
                <li>Total camisas: <?php echo camisa ?></li>
                <li>TOTAL DE PRODUCTOS: <?php echo $totalProductos ?></li>
            </ul>
        </div>

        <?php
            if (isset($_GET['producto'])){
                switch($_GET['producto']){
                    case 'bodies':
                        $imagen = './img/body1.png';
                        $producto = 'Body';
                        $marca = 'Mimmo';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        break;

                    case 'buzo':
                        $imagen = './img/buzo.png';
                        $producto = 'Buzo';
                        $marca = 'Cheeky';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        break;

                    case 'camisa':
                        $imagen = './img/camisa.png';
                        $producto = 'Camisa';
                        $marca = 'Grisino';
                        $descripcion = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis. Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam deserunt, nemo, nam exercitationem aliquam reiciendis voluptas sint, earum maxime atque illum. Quam facilis vero ipsum eaque ab nostrum dolorum nobis.';
                        break;
                }
            }
        ?>

        <div class="info">
            <div>
                <img src=<?php echo $imagen ?> alt=<?php echo $producto ?>>
            </div>
            <div>
                <h2> <?php echo $producto ?> </h2>
                <h3> <?php echo $marca ?> </h3>
                <p> <?php echo $descripcion ?> </p>
            </div>
        </div>
    </section>

    <?php include("footer.php") ?>
</body>
</html>