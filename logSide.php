<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log</title>
    <link rel="stylesheet" href="style/style.css">
</head>
<body id="logBody">
    <section class="form-view">
        <div class="form-container">
            <form action="./app/Models/Login.php" method="POST">
                <div class="form-text">
                    <span>¿Ya Tienes una Cuenta?</span>
                    <h2>
                        INGRESA AQUÍ
                    </h2>
                </div>
                <div class="form-inf-long-size">
                    <input class="input-icon" type="text" name="log_email" id="log_email" placeholder="Usuario">
                </div>
                <div class="form-inf-long-size">
                    <input class="input-icon" type="password" name="password" id="log_password" placeholder="Contraseña">
                </div>
                <div class="ancla">
                    <a href="#">Olvido su Contraseña</a>
                </div>
                <button class="send">Enviar</button>
            </form>
        </div>
        <div class="form-container">
            <form action="./app/Models/Logup.php" method="POST">
                <div class="form-text">
                    <span>¿Deseas Registrarte?</span>
                    <h2>
                        ENVIANOS TUS DATOS
                    </h2>
                </div>
                <div class="form-inf">
                    <input class="input-icon" type="text" name="full_name" id="full_name" placeholder="Nombre Completo">
                </div>
                <div class="form-inf">
                    <input class="input-icon" type="text" name="email" id="email" placeholder="Correo Electronico">
                </div>
                <div class="form-inf">
                    <input type="text" name="cedula" id="cedula" placeholder="Cedula de Identidad">
                </div>
                <div class="form-inf">
                    <input type="text" name="phone_number" id="phone_number" placeholder="Número de telefono">
                </div>
                <div class="form-inf">
                    <input type="text" name="country" id="country" placeholder="País">
                </div>
                <div class="form-inf">
                    <input type="text" name="city" id="city" placeholder="Ciudad">
                </div>
                <div class="form-inf-long-size">
                    <input class="input-icon" type="text" name="dist_code" id="dist_code" placeholder="Codigo de Distribuidor de no poseer escriba 0">
                </div>
                <div class="ancla">
                    <input type="checkbox" name="condiciones" id="condiciones" value="false"><a href="#">Haga clic aquí para leer el acuerdo con las condiciones del sitio</a>
                </div>
                <button class="send">Enviar Datos</button>
            </form>
        </div>
    </section>
</body>
</html>