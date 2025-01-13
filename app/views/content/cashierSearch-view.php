<div class="container is-fluid mb-6">
    <h1 class="title">Cajas</h1>
    <h2 class="subtitle">
        <i class="fas fa-search fa-fw"></i>&nbsp; Buscar Cajas
    </h2>
</div>

<div class="container pb-6 pt-6">
    <?php
        use app\controllers\cashierController;
        $insCaja = new cashierController();

        if (!isset($_SESSION[$url[0]]) || empty($_SESSION[$url[0]])) {
    ?>
    <!-- Formulario de búsqueda -->
    <div class="columns is-centered">
        <div class="column is-half">
            <form class="FormularioAjax box" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off">
                <input type="hidden" name="modulo_buscador" value="buscar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                <div class="field">
                    <label class="label">¿Qué estás buscando?</label>
                    <div class="control has-icons-left">
                        <input class="input is-rounded" type="text" name="txt_buscador" placeholder="Ingrese un término de búsqueda" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ ]{1,30}" maxlength="30" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-search"></i>
                        </span>
                    </div>
                </div>
                <div class="field has-text-centered">
                    <button class="button is-info is-rounded" type="submit">
                        <i class="fas fa-search"></i>&nbsp; Buscar
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php } else { ?>
    <!-- Formulario para eliminar búsqueda -->
    <div class="columns is-centered">
        <div class="column is-half">
            <form class="FormularioAjax box has-text-centered" action="<?php echo APP_URL; ?>app/ajax/buscadorAjax.php" method="POST" autocomplete="off">
                <input type="hidden" name="modulo_buscador" value="eliminar">
                <input type="hidden" name="modulo_url" value="<?php echo $url[0]; ?>">
                <p>
                    <i class="fas fa-search fa-fw"></i>&nbsp; Estás buscando 
                    <strong>“<?php echo htmlspecialchars($_SESSION[$url[0]]); ?>”</strong>
                </p>
                <div class="field has-text-centered mt-4">
                    <button type="submit" class="button is-danger is-rounded">
                        <i class="fas fa-trash-restore"></i>&nbsp; Eliminar búsqueda
                    </button>
                </div>
            </form>
        </div>
    </div>
    <?php
            echo $insCaja->listarCajaControlador($url[1], 15, $url[0], $_SESSION[$url[0]]);
        }
    ?>
</div>
