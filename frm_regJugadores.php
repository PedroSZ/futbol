<!-- *****ALTA DE UN JUGADOR -->
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <title>Registrar jugador</title>
        <link rel="stylesheet" href="css/main.css"/>
        <link rel="stylesheet" href="css/forms.css">
        <style type="text/css">
          #preview {
            border:1px solid #ddd;
            width: 150px;
            height: 200px;
            padding:5px;
            border-radius:2px;
            background:#fff;
            max-width:200px;
          }


          #preview img {width:100%;display:block;}
        </style>
        <script language='javascript'>
        function verFoto(){
        const status = document.getElementById('status');
        const output = document.getElementById('output');
        if (window.FileList && window.File && window.FileReader) {
          document.getElementById('foto').addEventListener('change', event => {
            output.src = '';
            status.textContent = '';
            const file = event.target.files[0];
            if (!file.type) {
              status.textContent = 'Error: The File.type property does not appear to be supported on this browser.';
              return;
            }
            if (!file.type.match('image.*')) {
              status.textContent = 'Error: The selected file does not appear to be an image.'
              return;
            }
            const reader = new FileReader();
            reader.addEventListener('load', event => {
              output.src = event.target.result;
            });
            reader.readAsDataURL(file);
          });
        }
      }
      </script>
    </head>

    <body>
        <div id="contenedor">
      <!-- Encabezado de la pagina-->
          <?php include_once 'modulos/mdl_header.php'; ?>
      <!-- contenido principal -->
  <section style="text-align: center; margin: 0 auto;">


<div class="datagrid">
<form method="post" enctype="multipart/form-data" style="width: 500px; height:auto;"  action="modulos/mdl_regJugador.php" id="frm_regJugadores" >
  <table border="0" style="font-weight: 600; font-size: 17px;">
  <tr>
    <td width="50%" style="text-align: right;">
      <label>ID:</label>
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
      <input name="imgFoto" type="file" accept="image/*" id="foto"  onclick="verFoto()" >
      <p id="status"></p>
      <div id="preview">
        <img id="output">
      </div>
    </td>
  </tr>
  <tr>
    <td></td>
    <td>

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
      <select name="estatus" type="text" id ="estatus">
        <option value="0">LOCAL</option>
        <option value="1">FORANEO</option>
      </select>
      </p>

    </td>
  </tr>

   <tr>
    <td style="text-align: right;">
    <label>Equipo:</label>
    </td>
    <td>
  <p><select name="supervisor" type="text" id ="supervisor" required>

   <?php
   include_once 'clases/equipo.php';
   $eq = new Equipo();
   $equipos = $eq->listar();
      if($equipos){
      echo "<option value='' disabled selected>Seleccione:</option>";
        foreach ($equipos as $equipo) {
          echo "<option value='".$equipo['id_equ']."'>".$equipo['nombre_eq']." </option>";

        }
      	}
     	 else{
       		 echo "No ha registrado Equipos";
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
</div>
</section>
<!-- Pie de pagina-->
    <?php include_once 'modulos/mdl_footer.php'; ?>
      </div>
</body>
</html>
