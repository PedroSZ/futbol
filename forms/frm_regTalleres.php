<!-- *****ALTA USUARIO ESTUDIANTE (RF-07) -->
<form method="post" style="width: 500px; height:auto;" onsubmit="return validar()" action="modulos/mdl_regTalleres.php" id="frm_regTalleres" >
  <table border="0" style="color:#FFFFFF
  ; font-weight: 600; font-size: 17px;"> 
  <tr>
    <td width="50%" style="text-align: right;">
      <p><label>Id:</label></p>
    </td>
    <td>
      <p><input name="id" type="text" placeholder="Ingresar Id Taller" id ="id"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Nombre:</label></p>
    </td>
    <td>
      <p><input name="nombre" type="text" placeholder="Ingresar Taller" id ="nombre"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Area:</label></p>
    </td>
    <td>
      <p><input name="area" type="text" placeholder="Ingresr lugar" id ="area"></p>
    </td>
  </tr>
   <tr>
    <td style="text-align: right;">
      <p><label>Horario:</label></p>
    </td>
    <td>
      <p><input name="horario" type="text" placeholder="Ingresar  horario" id ="horario"></p>
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Instructor:</label></p>
    </td>
    <td>
       <p><select name="instructor" type="text" id ="instructor"> 
     <option value="listarInstructor()">Seleccione:</option>
     
     
     <?php 
  include_once 'clases/instructor.php';
  $doc = new Instructor();
  $instructores = $doc->listar();
  if($instructores){ 
    foreach ($instructores as $instructor) {
      echo "<option value='".$instructor['clave']."'>".$instructor['nombre']." ".$instructor['apellidos']."</option>";
	  
    }
  	}
 	 else{
   		 echo "No ha registrado Supervisores";
  		}
	?>
     
     
     
     
     </p>
      
      
    </td>
  </tr>
  <tr>
    <td style="text-align: right;">
      <p><label>Supervisor:</label></p>
    </td>
    <td>
     
      <p><select name="supervisor" type="text" id ="supervisor"> 
     <option value="listarSupervisor()">Seleccione:</option>
     
     
      <?php 
  include_once 'clases/supervisor.php';
  $doc = new Supervisor();
  $supervisores = $doc->listar();
  if($supervisores){ 
    foreach ($supervisores as $supervisor) {
      echo "<option value='".$supervisor['rfc']."'>".$supervisor['nombre']." ".$supervisor['apellidos']."</option>";
	  
    }
  	}
 	 else{
   		 echo "No ha registrado Supervisores";
  		}
	?>
     
     
     
     
     </p>
      
      
      
      
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
