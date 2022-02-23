<?php

    // Incluye el header
    require 'includes/app.php';
    $db = conectarDB();

    // Autentica el usuario

    $errores = [];

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        
        // echo '<pre>';
        // var_dump($_POST);
        // echo '</pre>';

        $email = mysqli_real_escape_string($db ,filter_var($_POST['email'], FILTER_VALIDATE_EMAIL));
        $password = mysqli_real_escape_string($db, $_POST['password']);

        if (!$email) {
            $errores[] = "El email es obligatorio o no es valido";
        };
        if (!$password) {
            $errores[] = "El password es obligatorio o es incorrecto";
        };

        if (empty($errores)) {
            // Revisar si el ususario existe
            $query = "SELECT * FROM usuarios WHERE email = '${email}'";
            $resultado = mysqli_query($db, $query);
        
            if ($resultado -> num_rows) {
                // Revisar si el password es correcto
                $usuario = mysqli_fetch_assoc($resultado);

                // Verificar si el password es correcto o no
                $auth = password_verify($password,$usuario['password']);

                if ($auth) {
                    // El usuario esta autenticado
                    session_start();

                    // llenar el arreglo de la sesion
                    $_SESSION['usuario'] = $usuario['email'];
                    $_SESSION['login'] = true;

                    header('location: /admin');
                } else {
                    $errores[] = "El password es incorrecto";
                };
            } else {
                $errores[] = "El usuario no existe";
            };

        };

    };

    incluirTemplate('header');
 ?>
    <main class="contenedor seccion contenido-centrado">
        <h1>Iniciar Secion</h1>

        <?php foreach($errores as $error):?>
            <div class="alerta error">
                <?php echo $error;?>
            </div>
        <?php endforeach?>    

        <form action="" class="formulario" method="POST">
            <fieldset>
                <legend>Email y Password</legend>

                <label for="email">E-mail</label>
                <input required name="email" type="email" placeholder="Tu email" id="email">
 
                <label for="password">Password</label>
                <input required name="password" type="password" placeholder="Tu Password" id="password">

            </fieldset>

            <input type="submit" value="Iniciar Secion" class="boton boton-verde">
        </form>

    </main>


<?php
    incluirTemplate('footer');
?>