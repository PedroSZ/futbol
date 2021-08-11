<!-- *****ALTA DE UN JUGADOR -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Registrar jugador</title>
    </head>
    <body>

<form method="post" style="width: 500px; height:auto;" onsubmit="return validar()" action="modulos/mdl_regJugador.php" id="frm_regJugadores" >
  <table border="0" style="font-weight: 600; font-size: 17px;">
  <tr>
    <td width="50%" style="text-align: right;">
      <label>CURP:</label>
    </td>
    <td>
      <p><input name="id" type="text" placeholder="Ingresar id" id ="id"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <label>Nombre:</label>
    </td>
    <td>
      <p><input name="nombre" type="text" placeholder="Ingresar Nombre" id ="nombre"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <label>Apellidos:</label>
    </td>
    <td>
      <p><input name="apellidos" type="text" placeholder="Ingresar Apellidos" id ="apellidos"></p>
    </td>
  </tr>

  <tr>
    <td style="text-align: right;">
      <label>Foto:</label>
    </td>
    <td style="text-align: right;">
      <img id="imagenPrevisualizacion">
      <script src="Scripts/fotoPreview.js"></script>
    </td>
  </tr>
  <tr>
    <td></td>
    <td>
      <p><input type="file" accept="image/*" class="form-control" name="foto" value="" id="foto"></p>
    </td>
  </tr>


  <tr>
    <td style="text-align: right;">
      <label>Localidad:</label>
    </td>
    <td>
      <p><input name="localidad" type="text" placeholder="Ingresar localidad donde vive" id ="localidad"></p>
    </td>
  </tr>

  <tr>
    <td style="text-align: right;">
      <label>Año de nacimiento:</label>
    </td>
    <td>
      <p><input name="nacimiento" type="text" placeholder="Ingresar el año en que nacio a cuatro digitos." id ="nacimiento"></p>
    </td>
  </tr>

   <tr>
    <td style="text-align: right;">
      <label>Estatus:</label>
    </td>
    <td>
      <p>
      <select name="Estatus" type="text" id ="estatus">
        <option>LOCAL</option>
        <option>FORANEO</option>
      </select>
      </p>

    </td>
  </tr>


   <?php
   include_once 'clases/equipo.php';
   $eq = new Equipo();
   $equipos = $eq->listar();
   if($equipos){
     echo '
      <tr>
        <td style="text-align: right;">
          <label>Equipo:</label>
        </td>
        <td>
           <p>select name="equipo" type="text" id ="grado">
        <option>Seleccione:</option>
        <option>Sin equipo</option>';
        foreach ($jugadores as $jugador) {
          echo $equipo['nombre'];
        }
        echo "</select>
      </p>
    </td>
  </tr>";
      }
      else{
        echo ' <tr>
          <td style="text-align: right;">
            <label>Equipo:</label>
          </td>
          <td>
            <p>No hay equipos registrados</p>
          </td>
        </tr>';
      }
    ?>
  <tr>
    <td colspan="2" style="text-align: center;">
      <BR>
      <input type="submit" value="Registrar">
      <input type="button" value="Cancelar" onclick="limpiar()">
      <input type="button" onclick="location='menuAdmin.php'" value="Regresar" />
    </td>
  </tr>
  </table>
</form>
</body>
</html>
