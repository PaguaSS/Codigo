<?php
  //require "../Data/DataSucursal.php";
  $dataSucursal = new Data();

  switch ($_GET['accion']) {

    case 'mostrar':
      $registros = mysqli_query($dataSucursal,"SELECT * FROM sucursal; ") or die("Error al cargar registros ".mysqli_error($conexion));
      include("view/administrador/sucursales.php");
      break;

    case 'formEditarSucursal':
      $sucursal = mysqli_query($dataSucursal,"SELECT * FROM sucursal WHERE id = '$_GET[codigo]'; ") or die("Error al cargar registros ".mysqli_error($conexion));
      include("view/administracion/editarSucursal.php");
      break;

    case 'editarSucursal':
      $sucursal = mysqli_query($dataSucursal,"UPDATE sucursal SET nombre='$_GET[nombre]', direccion='$_GET[direccion]', telefono='$_GET[telefono]' where id='$_GET[codigo]'; ") or die("Error al editar.");
      $registro = mysqli_query($dataSucursal,"SELECT * FROM sucursal; ") or die("Error al cargar registros.");
      include("view/administracion/sucursales.php");

      break;

    case 'addSucursal':
      $dataSucursal->insertarSucursal($_REQUEST["arrayDatos"]);
      break;

    default:
      echo "Peticion inexistente!";
      break;
  }
 ?>
