<!DOCTYPE html>
<html>
<head>
<title>Sportscan</title>
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

    
    input[type="number"] {
        width: 250px; 
        padding: 12px; 
        margin-bottom: 10px;
        border-radius: 6px;
        margin-right: 15px
    }

    .text {
        width: 270px; 
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
                    <td colspan="2" align="center">
                        <br>
                        <img src="Imag/dw1.png" width="200px">
                        <h2>Agregar Equipo</h2>
                    </td>
                </tr>
                <tr>
                    <td>
                        Rama del equipo:
                    </td>
                    <td> 
                        <select name="rama" id="rama" class="text">
                            <option value="default">Seleccionar rama</option>
                            <option value="Varonil">Varonil</option>
                            <option value="Femenil 2">Femenil</option>
                        </select>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Id del entrenador/a:
                    </td>
                    <td>
                        <input type="number" id="input" name="id_entrnador" required placeholder="Ingresa el ID del entrenador" required>
                        <br>
                    </td>
                </tr>
                <tr>
                    <td>
                        Id del equipo:
                    </td>
                    <td>
                        <input type="number" id="input" name="id_universidad" required placeholder="Ingresa el ID del equipo" required>
                        <br><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Ingresar" onclick="return valida_envia()">
                        <br><br>
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body> 
</html>
