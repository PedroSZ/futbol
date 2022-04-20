<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registrar Jugadores</title>
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
    <?php include_once 'modulos/mdl_header.php'; ?>
  <body>
    <form class="row g-3" method="post" enctype="multipart/form-data" action="modulos/mdl_regJugador.php" id="frm_regJugadores">
  <div class="col-md-6">
    <label for="inputId" class="form-label">Id</label>
    <input type="text" class="form-control" placeholder="Ingresar id" id="id">
  </div>
  <div class="col-md-6">
    <label for="inputNombre" class="form-label">Nombre</label>
    <input name="nombre" type="text" class="form-control" placeholder="Ingresar Nombre" id ="nombre">
  </div>
  <div class="col-12">
    <label for="inputApellidos" class="form-label">Apellidos</label>
    <input name="apellidos" type="text" class="form-control" placeholder="Ingresar Apellidos" id ="apellidos">
  </div>
  <div class="col-12">
    <label for="inputfoto" class="form-label">Foto</label>
    <input  name="imgFoto" type="file" class="form-control" accept="image/*" id="foto"  onclick="verFoto()">
    <p id="status"></p>
    <div id="preview">
      <img id="output">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Localidad</label>
    <input name="localidad" type="text" class="form-control" placeholder="Ingresar localidad donde vive" id ="localidad">
  </div>
  <div class="col-md-6">
    <label for="inputCity" class="form-label">Nacimiento</label>
    <input name="nacimiento" type="text" class="form-control" placeholder="Ingresar el año en que nacio a cuatro digitos." id ="nacimiento">
  </div>
  <div class="col-md-2">
    <label for="inputState" class="form-label">Estatus</label>
    <select  id ="estatus" class="form-select">
      <option value="0">LOCAL</option>
      <option value="1">FORANEO</option>

    </select>
  </div>
  <div class="col-md-2">
    <label for="inputState" class="form-label">Equipo</label>
    <select name="supervisor" class="form-select" type="text" id ="supervisor" required>
     <?php
     include_once 'clases/equipo.php';
     $eq = new Equipo();
     $equipos = $eq->listar();
        if($equipos){
        echo "<option value='' disabled selected>Seleccione:</option>";
          foreach ($equipos as $equipo) {
            echo "<option value='".$equipo['id_equ']."'>".$equipo['nombre_eq']." </option>";
          }}else{ echo "No ha registrado Equipos";}
      ?>
</select>
  </div>
    <BR>
  <div class="col-12">

    <button type="submit" class="btn btn-primary" value="Registrar">Registrar</button>
    <button type="button" class="btn btn-primary" value="Cancelar" onclick="limpiar()">Limpiar</button>
    <button type="button" class="btn btn-primary" onclick="location='menuAdmin.php'" value="Regresar">Cancelar</button>
  </div>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
