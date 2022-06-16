<?php require('partials/head.php'); ?>
<div class="index-app">
  <div class="login-form">
    <div id="login-title" class="login-title">CEFP Núria<span id="breadcrumb" class="breadcrumb">/modulos</span></div>
    <nav class="dashboard-nav">
      <a href="<?php echo root(); ?>/dashboard" class="nav-item">Inicio</a>
      <a href="<?php echo root(); ?>/dashboard/modules" class="nav-item active">Mis módulos</a>
      <a href="<?php echo root(); ?>/dashboard/tasks" class="nav-item">Mis tareas</a>
    </nav>
    <div>
      <div id="home-container">
        <div style="display: <?php echo $_SESSION['isTeacher'] ? 'none' : 'block'; ?>;">
          <div class="bold">Mis módulos</div>
          <div>
            <?php
            foreach ($enrolledModules as $enrolledModule) {
              echo '<div class="module-wrapper"><div class="module-title"><span>' . $enrolledModule['code'] . '</span> - <span>' . $enrolledModule['name'] . '</span></div><span class="module-description">' . $enrolledModule['description'] . '</span><div></div></div>';
            }
            ?>
          </div>
        </div>
        <div style="display: <?php echo $_SESSION['isTeacher'] ? 'block' : 'none'; ?>;" class="container">
          <div class="bold">Matricular a alumnos</div>
          <form action="../modules/enroll" method="POST">
            <div class="inline-flex" style="margin-bottom: 5px;">
              <div>
                <div class="login-info">Código</div>
                <select name="moduleId" class="select">
                  <?php
                  foreach ($modules as $module) {
                    echo '<option value="' . $module['id'] . '">' . $module['code'] . '</option>';
                  }
                  ?>
                </select>
              </div>
              <div>
                <div class="login-info">Alumno</div>
                <select name="userId" class="select">
                  <?php
                  foreach ($students as $student) {
                    echo '<option value="' . $student['id'] . '">' . $student['name'] . ' - ' . $student['email'] . '</option>';
                  }
                  ?>
                </select>
              </div>
            </div>
            <button id="matricular" type="submit" class="btn-submit">Matricular</button>
          </form>
        </div>
        <div id="teacher-add-module" style="display: <?php echo $_SESSION['isTeacher'] ? 'block' : 'none'; ?>;">
          <div class="bold">Crear nuevo módulo</div>
          <form action="../modules/add" method="POST" class="add-module-wrapper">
            <div class="inline-flex">
              <div>
                <div class="login-info">Código</div>
                <input name="code" id="new-module-code" class="text-input" type="text" placeholder="Código...">
              </div>
              <div>
                <div class="login-info">Nombre</div>
                <input name="name" id="new-module-name" class="text-input" type="text" placeholder="Nombre...">
              </div>
            </div>
            <div class="login-info">Descripción</div>
            <input name="description" id="new-module-description" class="text-input" type="text" placeholder="Descripción...">
            <button id="btn-add-module" class="btn-submit" type="submit">Crear módulo</button>
          </form>
        </div>
      </div>
      <div id="profile-container" style="display: none;">
        <a href="./controllers/logout.php" id="btn-logout" class="btn-submit">Cerrar sesión</a>
      </div>
    </div>
  </div>
</div>