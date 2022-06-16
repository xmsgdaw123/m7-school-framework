<?php require('partials/head.php'); ?>
<div class="index-app">
    <div class="login-form">
        <div id="login-title" class="login-title">CEFP Núria</div>
        <form action="./login/login" method="POST">
            <div>
                <div class="login-info">Correo electrónico</div>
                <input name="email" id="email" class="text-input mb" type="text" placeholder="Correo...">
                <div class="login-info">Contraseña</div>
                <input name="password" id="password" class="text-input mb" type="password" placeholder="Contraseña...">
                <button id="btn-auth" class="btn-submit" type="submit">Enviar</button>
                <a href="register" class="login-switch">Crear una nueva cuenta</button>
            </div>
        </form>
    </div>
</div>
<?php require('partials/footer.php'); ?>