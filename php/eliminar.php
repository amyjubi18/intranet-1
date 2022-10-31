

    <?php
    include 'conexion.php';
    EliminarUsuario($_GET['id']);
function EliminarUsuario($id_usuario){
    include 'conexion.php';
$sentencia = "DELETE FROM user WHERE id ='".$id_usuario."' ";
$con->query($sentencia) or die ("Error al eliminar".mysqli_error($con));

}

?>
<script>
    alert("Datos eliminados correctamente");
    window.location = "modificar.php"
    </script>