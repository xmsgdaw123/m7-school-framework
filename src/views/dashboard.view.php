<?php require('partials/head.php'); ?>
<div class="index-app">
  <div class="login-form">
    <div id="login-title" class="login-title">CEFP Núria<span id="breadcrumb" class="breadcrumb">/</span></div>
    <nav class="dashboard-nav">
      <a href="<?php echo root(); ?>/dashboard" class="nav-item active">Inicio</a>
      <a href="<?php echo root(); ?>/dashboard/modules" class="nav-item">Mis módulos</a>
      <a href="<?php echo root(); ?>/dashboard/tasks" class="nav-item">Mis tareas</a>
    </nav>
    <div>
      <div id="home-container">
        <div>Hola <?php echo $_SESSION['name']; ?></div>
        <div>Tu id de usuario es: <?php echo $_SESSION['id']; ?></div>
        <div>Tu rol es: <?php echo $_SESSION['isTeacher'] ? 'profesor' : 'alumno'; ?></div>
        <div>Tu última visita fue el: <?php echo $_COOKIE['lastVisit']; ?></div>
        <a href="./login/logout" id="btn-logout" class="btn-submit">Cerrar sesión</a>
      </div>
    </div>
  </div>
</div>
<?php require('partials/footer.php'); ?>