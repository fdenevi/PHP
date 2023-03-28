    <?php
        include("head.php");
        include("header.php");

        // constante
            const titulo = "Desarrollo Web con PHP y WordPress";
            const nombre = "Florencia Denevi";

        //variables
            $edad = 31;
    ?>

    <section id="unidad1">
        <h1 class="title">
            <?php echo titulo ?>
        </h1>

        <p>👋 Hola! Soy <?php echo nombre ?> tengo <?php echo $edad ?> años, y vivo en la localidad de Villa Ballester.</p>

        <?php
            echo "<p>👩‍🎓 Finalicé mis estudios secundarios en el Colegio Nuestra Señora de la Misericordia en San Fernando, con orientación en Economía y Gestión de las Organizaciones. Como a muchos, me costó encontrar qué era lo que realmente me apasionaba, por lo que inicié diferentes carreras tales como la de formación docente y Cine y Televisión. También realicé el curso de liquidación de sueldos, fotografía y maquillaje... lo sé, nada que ver una cosa con la otra. Pero finalmente, este largo camino adquiriendo diferentes habilidades, me llevo hasta donde estoy hoy.</p>";
        ?>

        <?php
            echo "<p>💻 Con algunos miedos, y sin saber a donde me llevarían estos nuevos conocimientos, inicié el curso de Desarrollo Web (HTML + CSS) en CoderHouse, y luego continué en el mismo establecimiento aprendiendo JavaScript y ReactJs.</p>"
        ?>

        <?php
            echo "<p>✨ Soy muy responsable y avocada a mis tareas. Se que tengo un largo camino por aprender, pero sin dudas puedo decir que no tengo miedo de atravesarlo.</p>"
        ?>
    </section>

    <?php include("footer.php") ?>
</body>
</html>