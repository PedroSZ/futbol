<!-- *****ALTA USUARIO ESTUDIANTE (RF-07) -->
<form method="post" style="width: 500px; height:auto;" onsubmit="return validar()" action="modulos/mdl_regEstudiantes.php" id="frm_regEstudiantes" >
  <table border="0" style="color:#FFFFFF
  ; font-weight: 600; font-size: 17px;"> 
  <tr>
    <td width="50%" style="text-align: right;">
      <p><label>CURP:</label></p>
    </td>
    <td>
      <p><input name="codigo" type="text" placeholder="Ingresar CURP" id ="codigo"></p>
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
      <p><label>Carrera:</label></p>
    </td>
    <td>
      <p>
      <select name="carrera" type="text" id ="carrera">
        <option>Seleccione:</option>
        
        <option>Contabilidad</option>
        
        <option>Programación</option>
        
        <option>Ofimatica</option>
        
        <option>Electrónica</option>
        
        <option>Mecánica</option>
        
        </select>
      </p>
      
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Grado:</label></p>
    </td>
    <td>
       <p>
      <select name="grado" type="text" id ="grado">
        <option>Seleccione:</option>
        
        <option>1ro.</option>
        
        <option>2do.</option>
        
        <option>3ro.</option>
        
        <option>4to.</option>
        
        <option>5to.</option>
        
        <option>6to.</option>
        
        </select>
      </p>
    </td>
  </tr>
  
  <tr>
    <td style="text-align: right;">
      <p><label>Grupo:</label></p>
    </td>
    <td>
      
       <select name="grupo" type="text" id ="grupo">
        <option>Seleccione:</option>
        
        <option>A</option>
        
        <option>B</option>
        
        <option>C</option>
        
        <option>D</option>
  
        </select>
      
      
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
