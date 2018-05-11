<?php session_start(); ?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <head>
    <title>Tạo Mới Danh Mục</title>
    <link rel="stylesheet" type="text/css" href="../../../public/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../../public/css/custom.css">
  </head>
  <body>
    <?php include "../../menucon.php" ?>
  <div class="wrapper">
    <form method="post" action="create.php">
      <div class="row">
        <i class="flash"><?php if(isset($_SESSION["flash"])) echo $_SESSION["flash"]; ?></i>
      </div>
      <div>
        <h1>Tạo Mới Chuyên Mục</h1>
      </div>
      <div class="row">
        <label>Tên Chuyên Mục:</label>
        <input class="form-control" type="text" name="name">
      </div>
      <div class="row">
        <label>Mô tả:</label>
        <textarea class="form-control" name="description"></textarea>
      </div>
      <br>
      <div class="row">
        <button class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  </body>
  <script src="../../../public/js/jquery.min.js"></script>
  <script src="../../../public/js/bootstrap.min.js"></script>
  <script src="../../../public/js/bootstrap.bundle.min.js"></script>
</html>
<?php unset($_SESSION["flash"]); ?>
