    <?php 
        include("head.php");
        include("header.php");

        $nombreForm = $_POST ['nombre'];
        $apellidoForm = $_POST ['apellido'];
        $correoForm = $_POST ['email'];
        $mensajeForm = $_POST ['mensaje'];
    
        $cuerpoMail =   "Nombre: ".$nombreForm. "\r\n".
                        "Apellido: ".$apellidoForm. "\r\n".
                        "Correo electronico: ".$correoForm. "\r\n".
                        "Mensaje: ".$mensajeForm;
    
        mail(
            "fdenevi@hotmail.com",
            "enviado desde web",
            $cuerpoMail
        );
    ?>
    
        <section id="sendForm">
            <h1>Gracias <?php print $nombreForm ?>, su mensaje se ha enviado con éxito!</h1>
    
            <button><a href="index.php">Volver a Home</a></button>
        </section>

        <?php include("footer.php") ?>
        
</body>
</html>
