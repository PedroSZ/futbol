<!-- *****ALTA USUARIO ESTUDIANTE (RF-07) -->
<form method="post" style="width: 500px; height:auto;" onsubmit="return validar()" action="modulos/mdl_regSupervisores.php" id="frm_regSupervisores" >
  <table border="0" style="color:#FFFFFF
  ; font-weight: 600; font-size: 17px;"> 
  <tr>
    <td width="50%" style="text-align: right;">
      <p><label>RFC:</label></p>
    </td>
    <td>
      <p><input name="codigo" type="text" placeholder="Ingresar Clave" id ="codigo"></p>
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
      <p><input name="apellidos" type="text" placeholder="Ingresr Apellidos" id ="apellidos"></p>
    </td>
  </tr>
   <tr>
    <td style="text-align: right;">
      <p><label>Email:</label></p>
    </td>
    <td>
      <p><input name="email" type="text" placeholder="Ingresar  Email" id ="carrera"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Telefono:</label></p>
    </td>
    <td>
      <p><input name="telefono" type="text" placeholder="Ingresar Telefono" id ="grado"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Contraseña:</label></p>
    </td>
    <td>
      <p><input name="psw1" type="password" placeholder="Ingresar Contraseña"  id ="psw1"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Confirmar Contraseña:</label></p>
    </td>
    <td>
      <p><input name="psw2" type="password" placeholder="Vuelve a escribir la Contraseña"  id ="psw2"></p>
    </td>
  </tr>
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
