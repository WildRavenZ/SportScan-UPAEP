<!DOCTYPE html>
<html>
<head>
<title>Agregar temporada</title>
<meta charset="UTF-8">
<script> 
function valida_envia(){
            // Validar rama
            var rama = document.getElementById("rama").value;
            if(rama == "default"){
                alert("Debe ingresar una rama del equipo.");
                return false;
            }

            //Validar id_entrnador
            var user = document.getElementById("id_entrnador").value;
            if(user.length == 0){
                alert("Debe ingresar un nombre de usuario.");
                return false;
            }
            //Validar id_universidad
            var user = document.getElementById("id_universidad").value;
            if(user.length == 0){
                alert("Debe ingresar un nombre de usuario.");
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
        background-image: url('');
        background-size: 100% 100vh; 
        background-repeat: no-repeat;
        font-family: Arial, sans-serif
    } 

    .overlay {
        background-color: rgba(255, 0, 0, 0.70); 
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
        background-color: white; 
        color: gray;
        width: 350px;
        text-align: center;
        border-radius: 10px;
    }

    
    input[type="text"],
    input[type="date"]
     {
        width: 150px; 
        padding: 12px; 
        margin-bottom: 10px;
        border-radius: 6px;
        margin-right: 15px

    }


    
    input[type="submit"] {
        background-color: #40435e; 
        color: white; 
        padding: 10px 20px;
        font-size: 16px; 
        border: none; 
        border-radius: 6px;
        width: 250px; 
        padding: 12px; 
        
    }
  
</style>
</head>
<body>
    <div class="overlay">
        <form action = "home.php" method = "GET">
            <table>
                <tr>
                    <td colspan="2">
                    <br>
                        <img src="Imag/dw1.png" width="200px">
                        <h2>Agregar Temporada</h2>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Nombre:
                    </td>
                    <td>
                        <input type="text" id="input" name="nombre" required placeholder="Nombre de la temporada" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Fecha de inicio:
                    </td>
                    <td>
                        <input type="date" id="input" name="fecha_inicio" required placeholder="Selecciona la fecha de inicio de la temporada" required>
                    </td>
                </tr>
                <tr>
                    <td>
                        Fecha de fin:
                    </td>
                    <td>
                        <input type="date" id="input" name="fecha_fin" required placeholder="Selecciona fecha de finalizacion de la temorada" >
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Ingresar" onclick="return valida_envia()">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body> 
</html>
