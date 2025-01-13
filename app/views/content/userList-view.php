<div class="container is-fluid mb-6">
    <h1 class="title">Usuarios</h1>
    <h2 class="subtitle">
        <i class="fas fa-clipboard-list fa-fw"></i>&nbsp; Lista de usuarios
    </h2>
</div>

<div class="container pb-6 pt-6">
    <!-- Barra de estado -->
    <div class="form-rest mb-6 mt-6"></div>

    <!-- Tabla de usuarios -->
    <div class="box">
        <?php
            use app\controllers\userController;
            $insUsuario = new userController();

            $listaUsuarios = $insUsuario->listarUsuarioControlador($url[1], 15, $url[0], "");
            if ($listaUsuarios) {
                echo $listaUsuarios;
            } else {
                echo '
                <div class="notification is-warning is-light">
                    <p class="has-text-centered"><strong>No se encontraron usuarios registrados.</strong></p>
                </div>';
            }
        ?>
    </div>
</div>
