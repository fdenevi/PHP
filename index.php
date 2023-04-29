    <?php
        include("head.php");
        include("header.php");

        // constante
            const titulo = "El roperito de Noah";
            const nombre = "Dani";

        //variables
            $edad = 5;
    ?>

    <section id="unidad1">
        <h1 class="title">
            <?php echo titulo ?>
        </h1>

        <div>
            <p>👋 Hola! Soy <?php echo nombre ?>, tengo un hiijo de <?php echo $edad ?> años. Sin siquiera notarlo aún, él me llevó a iniciar con esta locura hermosa de llenar tu roperito 🤩.</p>

            <img src="img/pexels-photo-4869876.jpeg" alt="personal">
        </div>
    </section>

    <?php include("footer.php") ?>
</body>
</html>