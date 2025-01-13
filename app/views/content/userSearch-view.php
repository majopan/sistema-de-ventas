<div class="container is-fluid mb-6">
    <h1 class="title">Usuarios</h1>
    <h2 class="subtitle">
        <i class="fas fa-search fa-fw"></i>&nbsp; Buscar usuarios
    </h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        use app\controllers\userController;
        $insUsuario = new userController();

        if (!isset($_SESSION[$url[0]]) && empty($_SESSION[$url[0]])) {
    ?>
    <div class="columns">
        <div class="column is-12">
            <form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off">
                <input type="hidden" name="modulo_buscador" value="buscar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">

                <div class="field has-addons is-centered">
                    <div class="control is-expanded">
                        <input class="input is-rounded" type="text" name="txt_buscador" placeholder="¿Qué estás buscando?" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30" required>
                    </div>
                    <div class="control">
                        <button class="button is-info is-rounded" type="submit">
                            <i class="fas fa-search fa-fw"></i>&nbsp; Buscar
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php } else { ?>
    <div class="columns">
        <div class="column is-12">
            <form class="has-text-centered mt-6 mb-6 FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off">
                <input type="hidden" name="modulo_buscador" value="eliminar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">

                <div class="notification is-info is-light">
                    <p><i class="fas fa-search fa-fw"></i>&nbsp; Estás buscando <strong>“<?php echo $_SESSION[$url[0]]; ?>”</strong></p>
                </div>
                
                <button type="submit" class="button is-danger is-rounded mt-4">
                    <i class="fas fa-trash-restore"></i>&nbsp; Eliminar búsqueda
                </button>
            </form>
        </div>
    </div>
    <?php
            echo $insUsuario->listarUsuarioControlador($url[1], 15, $url[0], $_SESSION[$url[0]]);
        }
    ?>
</div>
