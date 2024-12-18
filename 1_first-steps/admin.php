<?php
  session_start();

  require_once("./inc/config.php");
  require_once("./inc/utility.php");

  ensure_user_is_authenticated();

  $title = 'Admin Dashboard';
  require("./inc/header.php");
?>
  <h1>Admin Dashboard</h1>
  <?= $_SESSION['email']; ?>
  <a href="logout.php">Logout</a>
<?php
  require("./inc/footer.php");
?>
