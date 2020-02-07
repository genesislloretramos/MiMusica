<!-- CABEZERA -->
<?php
    include("./includes/variables/index.php");
    include("./includes/header.php");
?>
<!-- MENU -->
<nav class="navbar bg-light">
  <a class="navbar-brand" href="index.php"><?php echo $titulo?></a>
  <div class="justify-content-center">
    <ul class="nav justify-content-center">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Indice</a>
      </li>
  </div>
</nav>
<!-- CONEXION A LA BASE DE DATOS -->
<?php include("./includes/conndb.php"); ?>
<!-- MOSTRAR ARTISTAS -->
<?php include("./includes/artistas.php"); ?>
<!-- FOOTER -->
<?php include("./includes/footer.php"); ?>