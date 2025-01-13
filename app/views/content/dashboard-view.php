<div class="container is-fluid">
  <h1 class="title has-text-centered has-text-primary">Home</h1>
  
  <div class="columns is-flex is-justify-content-center mt-5">
    <figure class="image is-128x128">
      <?php
        if (is_file("./app/views/fotos/" . $_SESSION['foto'])) {
          echo '<img class="is-rounded shadow" src="' . APP_URL . 'app/views/fotos/' . $_SESSION['foto'] . '">';
        } else {
          echo '<img class="is-rounded shadow" src="' . APP_URL . 'app/views/fotos/default.png">';
        }
      ?>
    </figure>
  </div>
  
  <div class="columns is-flex is-justify-content-center mt-3">
    <h2 class="subtitle has-text-centered has-text-grey-darker">
      ¡Bienvenido <span class="has-text-weight-bold"><?php echo $_SESSION['nombre'] . " " . $_SESSION['apellido']; ?></span>!
    </h2>
  </div>
</div>

<?php
  $total_cajas = $insLogin->seleccionarDatos("Normal", "caja", "caja_id", 0);
  $total_usuarios = $insLogin->seleccionarDatos("Normal", "usuario WHERE usuario_id!='1' AND usuario_id!='" . $_SESSION['id'] . "'", "usuario_id", 0);
  $total_clientes = $insLogin->seleccionarDatos("Normal", "cliente WHERE cliente_id!='1'", "cliente_id", 0);
  $total_categorias = $insLogin->seleccionarDatos("Normal", "categoria", "categoria_id", 0);
  $total_productos = $insLogin->seleccionarDatos("Normal", "producto", "producto_id", 0);
  $total_ventas = $insLogin->seleccionarDatos("Normal", "venta", "venta_id", 0);
?>

<div class="container pb-6 pt-6">
  <!-- First Row -->
  <div class="columns is-multiline">
    <div class="column is-4">
      <a href="<?php echo APP_URL; ?>cashierList/" class="box has-background-primary">
        <p class="heading has-text-white"><i class="fas fa-cash-register"></i> &nbsp; Cajas</p>
        <p class="title has-text-white"><?php echo $total_cajas->rowCount(); ?></p>
      </a>
    </div>
    <div class="column is-4">
      <a href="<?php echo APP_URL; ?>userList/" class="box has-background-link">
        <p class="heading has-text-white"><i class="fas fa-users"></i> &nbsp; Usuarios</p>
        <p class="title has-text-white"><?php echo $total_usuarios->rowCount(); ?></p>
      </a>
    </div>
    <div class="column is-4">
      <a href="<?php echo APP_URL; ?>clientList/" class="box has-background-info">
        <p class="heading has-text-white"><i class="fas fa-address-book"></i> &nbsp; Clientes</p>
        <p class="title has-text-white"><?php echo $total_clientes->rowCount(); ?></p>
      </a>
    </div>
  </div>
  
  <!-- Second Row -->
  <div class="columns is-multiline mt-3">
    <div class="column is-4">
      <a href="<?php echo APP_URL; ?>categoryList/" class="box has-background-success">
        <p class="heading has-text-white"><i class="fas fa-tags"></i> &nbsp; Categorías</p>
        <p class="title has-text-white"><?php echo $total_categorias->rowCount(); ?></p>
      </a>
    </div>
    <div class="column is-4">
      <a href="<?php echo APP_URL; ?>productList/" class="box has-background-warning">
        <p class="heading has-text-white"><i class="fas fa-cubes"></i> &nbsp; Productos</p>
        <p class="title has-text-white"><?php echo $total_productos->rowCount(); ?></p>
      </a>
    </div>
    <div class="column is-4">
      <a href="<?php echo APP_URL; ?>saleList/" class="box has-background-danger">
        <p class="heading has-text-white"><i class="fas fa-shopping-cart"></i> &nbsp; Ventas</p>
        <p class="title has-text-white"><?php echo $total_ventas->rowCount(); ?></p>
      </a>
    </div>
  </div>
</div>
