<div class="container is-fluid mb-6">
	<h1 class="title is-size-2 has-text-centered">Clientes</h1>
	<h2 class="subtitle is-size-4 has-text-centered"><i class="fas fa-male fa-fw"></i> &nbsp; Nuevo cliente</h2>
</div>

<div class="container pb-6 pt-6">

	<form class="FormularioAjax" action="<?php echo APP_URL; ?>app/ajax/clienteAjax.php" method="POST" autocomplete="off">
		<input type="hidden" name="modulo_cliente" value="registrar">

		<div class="columns is-multiline">
			<!-- Tipo de documento -->
			<div class="column is-half">
				<div class="control">
					<label class="label">Tipo de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
					<div class="select is-fullwidth">
						<select name="cliente_tipo_documento">
							<option value="" selected>Seleccione una opción</option>
							<?php echo $insLogin->generarSelect(DOCUMENTOS_USUARIOS,"VACIO"); ?>
						</select>
					</div>
				</div>
			</div>
			<!-- Número de documento -->
			<div class="column is-half">
				<div class="control">
					<label class="label">Número de documento <?php echo CAMPO_OBLIGATORIO; ?></label>
					<input class="input" type="text" name="cliente_numero_documento" pattern="[a-zA-Z0-9-]{7,30}" maxlength="30" required>
				</div>
			</div>
		</div>

		<div class="columns is-multiline">
			<!-- Nombres -->
			<div class="column is-half">
				<div class="control">
					<label class="label">Nombres <?php echo CAMPO_OBLIGATORIO; ?></label>
					<input class="input" type="text" name="cliente_nombre" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
				</div>
			</div>
			<!-- Apellidos -->
			<div class="column is-half">
				<div class="control">
					<label class="label">Apellidos <?php echo CAMPO_OBLIGATORIO; ?></label>
					<input class="input" type="text" name="cliente_apellido" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{3,40}" maxlength="40" required>
				</div>
			</div>
		</div>

		<div class="columns is-multiline">
			<!-- Estado o provincia -->
			<div class="column is-third">
				<div class="control">
					<label class="label">Estado, provincia o departamento <?php echo CAMPO_OBLIGATORIO; ?></label>
					<input class="input" type="text" name="cliente_provincia" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
				</div>
			</div>
			<!-- Ciudad o pueblo -->
			<div class="column is-third">
				<div class="control">
					<label class="label">Ciudad o pueblo <?php echo CAMPO_OBLIGATORIO; ?></label>
					<input class="input" type="text" name="cliente_ciudad" pattern="[a-zA-ZáéíóúÁÉÍÓÚñÑ ]{4,30}" maxlength="30" required>
				</div>
			</div>
			<!-- Calle o dirección -->
			<div class="column is-third">
				<div class="control">
					<label class="label">Calle o dirección de casa <?php echo CAMPO_OBLIGATORIO; ?></label>
					<input class="input" type="text" name="cliente_direccion" pattern="[a-zA-Z0-9áéíóúÁÉÍÓÚñÑ().,#\- ]{4,70}" maxlength="70" required>
				</div>
			</div>
		</div>

		<div class="columns is-multiline">
			<!-- Teléfono -->
			<div class="column is-half">
				<div class="control">
					<label class="label">Teléfono</label>
					<input class="input" type="text" name="cliente_telefono" pattern="[0-9()+]{8,20}" maxlength="20">
				</div>
			</div>
			<!-- Email -->
			<div class="column is-half">
				<div class="control">
					<label class="label">Email</label>
					<input class="input" type="email" name="cliente_email" maxlength="70">
				</div>
			</div>
		</div>

		<div class="has-text-centered mt-6">
			<!-- Botones de acción -->
			<button type="reset" class="button is-link is-light is-rounded">
				<i class="fas fa-paint-roller"></i> &nbsp; Limpiar
			</button>
			<button type="submit" class="button is-info is-rounded">
				<i class="far fa-save"></i> &nbsp; Guardar
			</button>
		</div>

		<p class="has-text-centered pt-6">
			<small>Los campos marcados con <?php echo CAMPO_OBLIGATORIO; ?> son obligatorios</small>
		</p>

	</form>

</div>
