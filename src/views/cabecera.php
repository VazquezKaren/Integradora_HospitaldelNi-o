<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital del niño</title>
    <link rel="stylesheet" href="../../css/estilos.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/inicio.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="../../css/pacientes.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="../../JS/main.js?v=<?php echo time(); ?>"></script>
    <script src="../../JS/funciones.js?v=<?php echo time(); ?>"></script>
</head>

<?php

include('../controladores/sesion.php'); 

?>

<body>
	<div class="loader-container">
        <div class="loader"></div>
    </div>

    
<body>
    <header class="header">
        <div class="container">
            <div class="btn-menu">
                <label for="btn-menu"><i class="fa-solid fa-bars"></i></label>
            </div>
            <div class="logo">
                <a href="inicio.php" style="text-decoration: none; color: inherit;">
                    <h1>Hospital del niño</h1>
                </a>
            </div>
            <nav class="menu">
                <a href="historial.php" class="user-link">
                    Historial <i class="fa-solid fa-clipboard"></i>
                </a>
                <a href="empleado.php" class="user-link">
                <?php echo $_SESSION['nombreEmpleado']; ?> <i class="fas fa-user"></i>
                </a>    
            </nav>
        </div>
    </header>

    <div class="capa"></div>
    <input type="checkbox" id="btn-menu" checked>
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="empleado.php" class="empleado"><i class="fas fa-user"></i> <?php echo $_SESSION['nombreEmpleado'] . ' ' . $_SESSION['apellidoPaternoEmpleado']; ?></a>
                <a href="inicio.php" class="normal"><i class="fas fa-home"></i> Inicio</a>
                
                <!-- Elementos de la pagina de Trabajo social -->
                <?php if ($privilegio == 'TRABAJO_SOCIAL') { ?>
                <a href="registro.php" class="normal"><i class="fas fa-user-plus"></i> Registrar nuevo paciente</a>
                <a href="pacientes.php" class="normal"><i class="fas fa-search"></i> Buscar paciente</a>
                <a href="formatoblanco.php" class="normal"><i class="fas fa-file-alt"></i> Formato en blanco</a>
                <?php };?>


                <!-- Elementos de la pagina de ADMIN -->
                <?php if ($privilegio == 'ADMIN') { ?>
                <a href="registro.php" class="normal"><i class="fas fa-user-plus"></i>Empleados</a>
                <a href="pacientes.php" class="normal"><i class="fas fa-search"></i>Pacientes</a>
                <a href="formatoblanco.php" class="normal"><i class="fas fa-file-alt"></i>Registros</a>
                <a href="formatoblanco.php" class="normal"><i class="fas fa-file-alt"></i>Registros</a>
                <?php };?>

                <!-- Elementos de la pagina de ENFERMERA -->
                <?php if ($privilegio == 'ENFERMERA') { ?>
                <a href="registro.php" class="normal"><i class="fas fa-user-plus"></i> Registrar nuevo paciente</a>
                <a href="pacientes.php" class="normal"><i class="fas fa-search"></i> Buscar paciente</a>
                <a href="formatoblanco.php" class="normal"><i class="fas fa-file-alt"></i> Formato en blanco</a>
                <?php };?>


                <!-- Elementos de la pagina de DOCTOR -->
                <?php if ($privilegio == 'DOCTOR') { ?>
                <a href="registro.php" class="normal"><i class="fas fa-user-plus"></i> Registrar nuevo paciente</a>
                <a href="pacientes.php" class="normal"><i class="fas fa-search"></i> Buscar paciente</a>
                <a href="formatoblanco.php" class="normal"><i class="fas fa-file-alt"></i> Formato en blanco</a>
                <?php };?>

            </nav>
            <a href="../controladores/CerrarSesion.php" class="cerrar-sesion"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
        </div>
    </div>
</body>
</html>