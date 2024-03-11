<!DOCTYPE html>
<html>
<head>
<title>Registro de usuario</title>
<meta charset="UTF-8">
<script>
    //Funcion para recoger una imagen del dispositivo
    function preview_image(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('preview');
            output.src = reader.result;
        }
        reader.readAsDataURL(event.target.files[0]);
    }
    
    function valida_envia(){
        // Validar nombre
        var name = document.getElementById("nombre").value;
        if(name.length == 0){
            alert("Debe ingresar su nombre completo.");
            return false;
        }

        //Validar nombre de usuario
        var user = document.getElementById("user").value;
        if(user.length == 0){
            alert("Debe ingresar un nombre de usuario.");
            return false;
        }
        
        // Validar correo electrónico
        var email = document.getElementById("email").value;
        if(email.length == 0 || !email.includes("@")){
            alert("Debe ingresar un correo electrónico válido.");
            return false;
        }

        // Validar contraseña
        var password = document.getElementById("password").value;
        if(password.length == 0){
            alert("Debe ingresar una contraseña.");
            return false;
        }

        // Validar la confirmasion de la contraseña
        var password_conf = document.getElementById("password_conf").value;
        if (password !== password_conf) {
            alert("La confirmación de la contraseña no es correcta. \nVerifica la contraseña proporcionada.");
            return false;
        }

        // El formulario se envía
        alert("¡Bienvenido! Formulario enviado correctamente.");
        return true;
    }
    
</script>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url('Imag/dw3.jpg');
        background-size: 100% 100vh; /* Para cubrir todo el fondo */
        background-repeat: no-repeat;/* Para que no se repita la imagen */
        font-family: Arial, sans-serif
    }
    .overlay {
        background-color: rgba(255, 0, 0, 0.70); /* Color rojo con 50% de transparencia */
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    table {
        background-color: white; /*Fondo blanco para la tablini*/
        color: gray;
        width: 700px;
        height: 420px;
        text-align: center;
        border-radius: 10px;
    }

    /* Estilos para los campos de entrada de email y contraseña */
    input[type="text"],
    input[type="email"],
    input[type="password"],
    input[type="password_conf"]{
        width: 300px; /*Largo*/
        padding: 12px; /*Ancho*/
        margin-bottom: 10px;
        border-radius: 6px;
    }

    /*Estilo para el botón "Enviar"*/
    input[type="submit"] {
        background-color: #40435e; /*Color del boton*/
        color: white; /*Color del texto*/
        padding: 10px 20px;
        font-size: 16px; /*Tamaño de fuente*/
        border: none;
        border-radius: 6px;
        width: 150px; /*Largo*/
    }

    /* Estilo para el botón de subir foto */
    .upload-button {
        background-color: #40435e; /*Color del boton*/
        color: white; /*Color del texto*/
        padding: 8px 20px;
        font-size: 12px; /*Tamaño de fuente*/
        border: none;
        border-radius: 4px; /* Tamaño de fuente */
        cursor: pointer; /* Cursor de puntero */
    }

</style>
</head>
<body >
    <div class="overlay">
        <table >
            <form action = "home.php" method = "GET">
                <tr>
                    <td style="width: 168; text-align:left;">
                        <img src="Imag/dw4.png" width="200px" style="margin-left: 80px;">
                        <br><br>
                        <label for="file-upload" style="margin-left: 122px" class="upload-button">Subir una foto</label>
                        <input id="file-upload" type="file" accept="image/*" style="display: none;" onchange="preview_image(event)">
                        <br><br>
                    </td>
                    <td>
                        <h2>Registro</h2>
                        <input type="text" id="nombre" name="nombre" required placeholder="Nombre Completo">
                        <br>
                        <input type="text" id="user" name="user" required placeholder="Username">
                        <br>
                        <input type="email" id="email" name="email" required placeholder="Correo Electrónico">
                        <br>
                        <input type="password" id="password" name="password" required placeholder="Contraseña">
                        <br>
                        <input type="password" id="password_conf" name="password_conf" required placeholder="Confirmacion de contraseña">
                        <br><br>
                        <input type="submit" value="Enviar" onclick="return valida_envia()">
                        <br><br>
                    </td>
                </tr>
            </form>
        </table>
    </div>
</body> 
</html>
