<?php
  session_start();
  session_unset();
  session_destroy();

  require_once("./inc/utility.php");
  redirect("login.php");