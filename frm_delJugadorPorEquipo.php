<?php/*
  include('db.php');
  $upload_dir = 'uploads/';

if(isset($_GET['delete'])){
  $id = $_GET['delete'];
  $sql = "select * from contacts where id = ".$id;
  $result = mysqli_query($conn, $sql);
  if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    $image = $row['image'];
    unlink($upload_dir.$image);
    $sql = "delete from contacts where id=".$id;
    if(mysqli_query($conn, $sql)){
      header('location:index.php');
    }
  }
}*/
?>

<?php
/******

LISTAR JUGADORES EN BASE A UN FILTRO CON EL NOMBRe DEL EQUIPO:

PREGUNTAR EQUIPO EN UN COMBOBOX
DEBE APARECER LA OPCION SIN EQUIPO EN LA CUALBEN LAS FILAS NO APARECE LA DE ELIMINAR SOLO LA DE TRANSFERIR.
LISTAR EN FILAS LOS JUGADORES DEL EQUIPO.
CADA FILA DEBE TENER DOS OPCIONES:
- ELIMINAR QUE BORRA EL CAMPO EQUIPO EN LA TABLA DE JUGADOR
- TRANASFERIR PRESENTA UN FROMULARIO CON UN COMBOBOX EN EL QUE SE INDICA EL NUEVO EQUIPO.

<a href="index.php?delete=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('Seguro que desea eliminar el jugador del equipo?')"><i class="fa fa-trash-alt"></i></a>

*/?>
