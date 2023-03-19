    <?php
        include("head.php");
        include("header.php");

        // constante
            const titulo = "Desarrollo Web con PHP y Worpress";
            const nombre = "Florencia Denevi";
            const html = 38;
            const js = 34;
            const reactJs = 28;

        //variables
            $edad = 31;
            $horasCursadas = html + js + reactJs;
    ?>

    <section id="unidad1">
        <h1 class="title">
            <?php echo titulo ?>
        </h1>

        <p>Soy <?php echo nombre ?> tengo <?php echo $edad ?> años, soy de Villa Ballester, Bs As. Realicé los cursos de HTMl, CSS, JavaScript y ReactJs</p>

        <?php
            echo "<p>Mi expectativa del curso es adquirir nuevos conocimientos.</p>";
        ?>

        <ul>
            <li>Horas cursadas en HTML Y CSS: <?php echo html ?></li>
            <li>Horas cursadas en JavaScript: <?php echo js ?></li>
            <li>Horas cursadas en ReactJs: <?php echo reactJs ?></li>
            <li>TOTAL DE HORAS CURSADAS: <?php echo $horasCursadas ?></li>
        </ul>
    </section>

    <?php include("footer.php") ?>
</body>
</html>