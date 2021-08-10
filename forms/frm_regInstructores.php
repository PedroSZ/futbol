<?php 
function comprobar_email($email){ 
   	$mail_correcto = 0; 
   	//compruebo unas cosas primeras 
   	if ((strlen($email) >= 6) && (substr_count($email,"@") == 1) && (substr($email,0,1) != "@") && (substr($email,strlen($email)-1,1) != "@")){ 
      	if ((!strstr($email,"'")) && (!strstr($email,"\"")) && (!strstr($email,"\\")) && (!strstr($email,"\$")) && (!strstr($email," "))) { 
         	//miro si tiene caracter . 
         	if (substr_count($email,".")>= 1){ 
            	//obtengo la terminacion del dominio 
            	$term_dom = substr(strrchr ($email, '.'),1); 
            	//compruebo que la terminación del dominio sea correcta 
            	if (strlen($term_dom)>1 && strlen($term_dom)<5 && (!strstr($term_dom,"@")) ){ 
               	//compruebo que lo de antes del dominio sea correcto 
               	$antes_dom = substr($email,0,strlen($email) - strlen($term_dom) - 1); 
               	$caracter_ult = substr($antes_dom,strlen($antes_dom)-1,1); 
               	if ($caracter_ult != "@" && $caracter_ult != "."){ 
                  	$mail_correcto = 1; 
               	} 
            	} 
         	} 
      	} 
   	} 
   	if ($mail_correcto) 
      	return 1; 
   	else 
      	return 0; 
}

?>

<?php
if (isset($_POST['enviar'])) {
   if (comprobar_email($_POST['email']))
      echo 'El email introducido es correcto!';
   else
      echo 'El email introducido NO es correcto!';
}
?>
<!-- *****ALTA USUARIO ESTUDIANTE (RF-07) -->
<form method="post" style="width: 500px; height:auto;" onsubmit="return validar()" action="modulos/mdl_regInstructores.php" id="frm_regInstructores" >
  <table border="0" style="color:#FFFFFF
  ; font-weight: 600; font-size: 17px;"> 
  <tr>
    <td width="50%" style="text-align: right;">
      <p><label>Clave:</label></p>
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
      <p><input name="email"  type="text" value="<?php echo $_POST['email']; ?>" placeholder="Ingresar  Email" id ="carrera"></p>
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
