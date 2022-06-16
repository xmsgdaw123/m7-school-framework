<?php require('partials/head.php'); ?>
<div class="index-app">
    <div class="login-form">
        <div id="login-title" class="login-title">CEFP Núria</div>
        <form action="./register/register" method="POST">
            <div>
                <div class="login-info">Correo electrónico</div>
                <input name="email" id="email" class="text-input mb" type="text" placeholder="Correo...">
                <div class="login-info">Nombre</div>
                <input name="name" id="name" class="text-input mb" type="text" placeholder="Nombre...">
                <div class="login-info">Apellidos</div>
                <input name="surname" id="surname" class="text-input mb" type="text" placeholder="Apellidos...">
                <div class="login-info">Contraseña</div>
                <input name="password" id="password" class="text-input mb" type="password" placeholder="Contraseña...">
                <div class="login-info">Registrar como profesor</div>
                <input name="isTeacher" id="isTeacher" type="checkbox">
                <button id="btn-auth" class="btn-submit" type="submit">Enviar</button>
                <a href="index" class="login-switch">Iniciar sesión</button>
            </div>
        </form>
    </div>
</div>
<?php require('partials/footer.php'); ?>