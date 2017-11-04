<?php session_start(); ?>
<?php require_once "../../../db/mysql.php"; ?>
<?php require_once "../../helper/user-helper.php"; ?>
<?php
  if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["role"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $repassword = $_POST["repassword"];
    $role = $_POST["role"];
    if(strcmp($password,$repassword) != 0){
      $_SESSION["flash"] = "password was not match";
      redirect("new.php");
    }

    if (is_empty($name,"name is not empty"))
      redirect("new.php");
    if (is_empty($email,"email is not empty"))
      redirect("new.php");
    if (is_empty($password,"password is not empty"))
      redirect("new.php");

    if (!is_exist_email($email)) {
      $sql = "insert into users(name, email, password, role) values('$name', '$email', '$password', $role)";
      $result = $conn->query($sql);
      if ($result) {
        $_SESSION["flash"] = "new record added sucess";

      }else{
        $_SESSION["flash"] = "Error:".$sql."<br>".$conn->error;
      }
    }
    redirect("new.php");
  }
?>
