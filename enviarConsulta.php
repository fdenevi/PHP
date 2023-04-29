<?php 
        $nombreForm = $_POST ['nombre'];
        $apellidoForm = $_POST ['apellido'];
        $correoForm = $_POST ['email'];
        $mensajeForm = $_POST ['mensaje'];
    
        $cuerpoMail =   "Nombre: ".$nombreForm. "\r\n".
                        "Apellido: ".$apellidoForm. "\r\n".
                        "Correo electronico: ".$correoForm. "\r\n".
                        "Mensaje: ".$mensajeForm;
    
        mail("fdenevi@hotmail.com",
            "enviado desde web",
            $cuerpoMail
        );

        $conexion = mysqli_connect("localhost","id20674773_datos","EXst|Yp$+uZd8Yx^","id20674773_php_wordpress") or exit ("No se puedo establecer la conexión");
        mysqli_query($conexion, "INSERT INTO consultas VALUES(DEFAULT, '$nombreForm','$apellidoForm', '$correoForm', '$mensajeForm')");
        mysqli_close($conexion);

        header("Location:contactForm.php?ok");