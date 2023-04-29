    <?php 
        include("head.php");
        include("header.php");
    ?>

    <form action="enviarConsulta.php" method="post" id="form">
        <div>
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" required>
        </div>

        <div>
            <label for="apellido">Apellido: </label>
            <input type="text" name="apellido" required>
        </div>

        <div>
            <label for="email">Correo: </label>
            <input type="email" name="email" required>
        </div>

        <div>
            <label for="mensaje">Ingrese su mensaje:</label>
            <textarea name="mensaje" id="" cols="30" rows="10" required></textarea>
        </div>

        <button type="submit">Enviar mensaje</button>

        <?php
            if(isset ($_GET['ok'])){
                echo "<h3>Su mensaje ha sido enviado con exito!</h3>";
            }
        ?>
    </form>


    
    <?php include("footer.php") ?>

</body>
</html>