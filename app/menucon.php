<?php
  define("URL_ADMIN", "http://localhost/doanphp/final-course/app/admin/");
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand my-logo pr-2" href="index.php">ChipChip Shop</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Users</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>users/index.php">Danh sách Users</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>users/new.php">Thêm mới Users</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Products</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>products/index.php">Danh sách Products</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>products/new.php">Thêm mới Products</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Catalogs</a>
          <div class="dropdown-menu" aria-labelledby="dropdown01">
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>catalogs/index.php">Danh sách Catalogs</a>
            <a class="dropdown-item" href="<?php echo URL_ADMIN; ?>catalogs/new.php">Thêm mới Catalogs</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
