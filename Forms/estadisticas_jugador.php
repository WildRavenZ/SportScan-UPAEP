<!DOCTYPE html>
<html>
<head>
<title>Estadísticas jugador</title>
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
        width: 900px;
        height: 450px;
        text-align: center;
        border-radius: 10px;
    }

    /* Estilos para los campos de entrada de email y contraseña */
    input[type="number"]
    {
        text-align: center;
        width: 100px; /*Largo*/
        padding: 12px; /*Ancho*/
        margin-bottom: 10px;
        border-radius: 6px;
    }


    input[type="time"]
    {
        text-align: center;
        width: 150px; /*Largo*/
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

 

</style>
</head>
<body >
    <div class="overlay">
        <table >
            <form action = "home.php" method = "GET">
            <tr>
                <td colspan="3">
                <h1>Estadísticas</h1>
                </td>
                <br>
                <br><br>
            </tr>
                <tr>
                
                    <td width=30% style="text-align:center;">
                        <img src="Imag/dw4.png" width="200px" >
                        <br><br>
                        <b>
                        Nombre de Jugador
                        </b>
                        <input id="file-upload" type="file" accept="image/*" style="display: none;" onchange="preview_image(event)">
                        <br><br>
                    </td>
                    
                    <td width=35%>
  
                        <h5> Minutos jugados:
                        <input type="number" id="minutos_jugados" name="minutos_jugados" required placeholder="-">
                        </h5>
                        <h5> Puntos anotados:
                        <input type="number" id="puntos_anotados" name="puntos_anotados" required placeholder="-">
                        </h5>
                        <h5> Faltas cometidas:
                        <input type="number" id="faltas_cometidas" name="faltas_cometidas" required placeholder="-">
                        </h5> 
                        
                        <br>
                        
                    </td> 

                    <td width= 35% style="text-align:center;">
                        <h5> Número de tiros:
                        <input type="number" id="numero_tiros" name="numero_tiros" required placeholder="-">
                        </h5>
                        <h5> Número de pases : 
                        <input type="number" id="numero_pases" name="numero_pases" required placeholder="-">
                        </h5>
                        <h5> Pérdidas de balón: 
                        <input type="number" id="perdidas_balon" name="perdidas_balon" required placeholder="-">
                        </h5>

                        <br>
                        
                    </td> 
                  
                </tr >
                <br>
                <br>
            
                    <td colspan="3">
                    <input type="submit" value="Enviar" onclick="return valida_envia()">
                    <br><br>
                    </td>
               
                
            </form>
        </table>
    </div>
</body> 
</html>
