<!-- *****ALTA DE UN JUGADOR -->
<form method="post" style="width: 500px; height:auto;" onsubmit="return validar()" action="modulos/mdl_regJugador.php" id="frm_regJugadores" >
  <table border="0" style="color:#FFFFFF
  ; font-weight: 600; font-size: 17px;">
  <tr>
    <td width="50%" style="text-align: right;">
      <p><label>CURP:</label></p>
    </td>
    <td>
      <p><input name="id" type="text" placeholder="Ingresar id" id ="id"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Nombre:</label></p>
    </td>
    <td>
      <p><input name="nombre" type="text" placeholder="Ingresar Nombre" id ="nombre"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Apellidos:</label></p>
    </td>
    <td>
      <p><input name="apellidos" type="text" placeholder="Ingresar Apellidos" id ="apellidos"></p>
    </td>
  </tr>

  <tr>
    <td style="text-align: right;">
      <p><label>Localidad:</label></p>
    </td>
    <td>
      <p><input name="localidad" type="text" placeholder="Ingresar localidad donde vive" id ="localidad"></p>
    </td>
  </tr>

  <tr>
    <td style="text-align: right;">
      <p><label>Año de nacimiento:</label></p>
    </td>
    <td>
      <p><input name="nacimiento" type="text" placeholder="Ingresar el año en que nacio a cuatro digitos." id ="nacimiento"></p>
    </td>
  </tr>

   <tr>
    <td style="text-align: right;">
      <p><label>Estatus:</label></p>
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
          <p><label>Equipo:</label></p>
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
        echo " <p>No hay equipos registrados en la base de datos</p>";
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
