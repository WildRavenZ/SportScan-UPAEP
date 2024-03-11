<!DOCTYPE html>
<html>
<head>
<title>Sportscan</title>
<meta charset="UTF-8">
<script> 
function valida_envia(){
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

    // El formulario se envía
    alert("¡Bienvenido! Formulario enviado correctamente.");
    return true;
}
</script>
<style>
    body {
        margin: 0;
        padding: 0;
        background-image: url('Imag/dw2.jpg');
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
        width: 350px;
        text-align: center;
        border-radius: 10px;
    }

    /* Estilos para los campos de entrada de email y contraseña */
    input[type="email"],
    input[type="password"] {
        width: 250px; /*Largo*/
        padding: 12px; /*Ancho*/
        margin-bottom: 10px;
        border-radius: 6px;
    }

    /*Estilos para el botón "Ingresar"*/
    input[type="submit"] {
        background-color: #40435e; /*Color del boton*/
        color: white; /*Texto*/
        padding: 10px 20px;
        font-size: 16px; /*Tamaño de fuente*/
        border: none; /*Sin borde*/
        border-radius: 6px;
        width: 250px; /*Largo*/
        padding: 12px; /*Ancho*/
    }
  
</style>
</head>
<body>
    <div class="overlay">
        <form action = "home.php">
            <table>
                <tr>
                    <td>
                        <br>
                        <img src="Imag/dw1.png" width="200px">
                        <h2>Inicio de sesión</h2>
                        <input type="email" id="email" name="email" required placeholder="Correo electrónico" required>
                        <br>
                        <input type="password" id="password" name="password" required placeholder="Contraseña" required>
                        <br><br>
                        <input type="submit" value="Ingresar" onclick="return valida_envia()">
                        <br><br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body> 
</html>
