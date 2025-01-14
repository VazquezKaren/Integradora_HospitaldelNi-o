<?php 
// BARRA DE NAVEACION Y MENU DE INTERACCION ENTRE SECCIONES, MODIFICAR EN CASO DE CAMBIAR RUTAS DE LOCALIZACION DE LOS ARCHIVOS DEL PROYECTO
include('cabecera.php'); 
?>

    <section>
        <div class="content-grid">
            <div class="contentbox">
                <h2>Perfil de Usuario</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Campo</th>
                            <th>Dato</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Nombre:</td>
                            <td><?php echo $_SESSION['nombreEmpleado']; ?></td>
                        </tr>
                        <tr>
                            <td>Apellidos:</td>
                            <td> <?php echo $_SESSION['apellidoPaternoEmpleado'] . ' ' . $_SESSION['apellidoMaternoEmpleado'];?></td>
                        </tr>
                        <tr>
                            <td>Correo Electrónico:</td>
                            <td><?php echo $_SESSION['emailEmpleado']; ?></td>
                        </tr>
                        <tr>
                            <td>Teléfono:</td>
                            <td><?php echo $_SESSION['telefonoEmpleado']; ?></td>
                        </tr>
                        <tr>
                            <td>Rol:</td>
                            <td><?php echo $_SESSION['rol']; ?></td>
                        </tr>
                        
                    </tbody>
                    
                </table>
                <form action="formulario_cambiar_contrasena.php" method="GET">
                    <button id="cambiar-contrasena" type="submit">Cambiar Contraseña</button>
                    <a href="../controladores/CerrarSesion.php" class="cerrar-sesion" style="background-color: #ff4d4d;"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>

                </form>

            </div>
        </div>
    </section>
</body>

</html>
