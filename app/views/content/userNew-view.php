<div class="container is-fluid mb-6">
    <h1 class="title">Usuarios</h1>
    <h2 class="subtitle">
        <i class="fas fa-user-tie fa-fw"></i>&nbsp; Nuevo usuario
    </h2>
</div>

<div class="container pb-6 pt-6">
    <form class="FormularioAjax box" action="<?php echo APP_URL; ?>app/ajax/usuarioAjax.php" method="POST" autocomplete="off" enctype="multipart/form-data">
        <input type="hidden" name="modulo_usuario" value="registrar">

        <!-- Nombres y Apellidos -->
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Nombres <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="usuario_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">Apellidos <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="usuario_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Usuario y Email -->
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Usuario <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <div class="control has-icons-left">
                        <input class="input" type="text" name="usuario_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-user-circle"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">Email</label>
                    <div class="control has-icons-left">
                        <input class="input" type="email" name="usuario_email" maxlength="70">
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Contraseña y Confirmación -->
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Clave <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <div class="control has-icons-left">
                        <input class="input" type="password" name="usuario_clave_1" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">Repetir clave <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <div class="control has-icons-left">
                        <input class="input" type="password" name="usuario_clave_2" pattern="[a-zA-Z0-9$@.-]{7,100}" maxlength="100" required>
                        <span class="icon is-small is-left">
                            <i class="fas fa-lock"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <!-- Foto y Caja -->
        <div class="columns">
            <div class="column">
                <div class="field">
                    <label class="label">Foto de usuario</label>
                    <div class="file has-name is-boxed">
                        <label class="file-label">
                            <input class="file-input" type="file" name="usuario_foto" accept=".jpg, .png, .jpeg">
                            <span class="file-cta">
                                <span class="file-label">Seleccione una foto</span>
                            </span>
                            <span class="file-name">JPG, JPEG, PNG. (MAX 5MB)</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="field">
                    <label class="label">Caja de ventas <?php echo CAMPO_OBLIGATORIO; ?></label>
                    <div class="control">
                        <div class="select is-fullwidth">
                            <select name="usuario_caja" required>
                                <option value="" selected>Seleccione una opción</option>
                                <?php
                                    $datos_cajas = $insLogin->seleccionarDatos("Normal", "caja", "*", 0);
                                    while ($campos_caja = $datos_cajas->fetch()) {
                                        echo '<option value="' . $campos_caja['caja_id'] . '">Caja No. ' . $campos_caja['caja_numero'] . ' - ' . $campos_caja['caja_nombre'] . '</option>';
                                    }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Botones -->
        <div class="field has-text-centered">
            <button type="reset" class="button is-link is-light is-rounded">
                <i class="fas fa-paint-roller"></i>&nbsp; Limpiar
            </button>
            <button type="submit" class="button is-info is-rounded">
                <i class="far fa-save"></i>&nbsp; Guardar
            </button>
        </div>
        <p class="has-text-centered pt-6">
            <small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
        </p>
    </form>
</div>
