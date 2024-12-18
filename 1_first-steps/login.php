<?php
  session_start();

  require_once("./inc/config.php");
  require_once("./inc/utility.php");

  if(is_user_authenticated()) {
    redirect("admin.php");
  }
  
  if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = filter_input(INPUT_POST, 'password', FILTER_VALIDATE_REGEXP, ['options' => ['regexp' => '/^[\w]+$/']]);
    $status = [];

    if($email == false) {
      array_push($status, 'Bitte eine gültige Email angeben! z.B. max@gmail.com');
    }
    if($password == false) {
      array_push($status, 'Das Passwort erlaubt nur folgende Zeichen: a-zA-Z0-9_');
    }

    if(authenticate_user($email, $password)) {
      session_regenerate_id(true);
      $_SESSION['email'] = $email;
      redirect('admin.php');
    }
    else {
      array_push($status, 'Login fehlgeschlagen!');
    }    

    output($_POST);
  }  
  
  $title = 'Sessions in PHP';
  require("./inc/header.php");
?>
  
  <h1>Sessions in PHP</h1>
  <div class="row">
    <div class="col-3">
      <form action="" method="POST">
        <div class="mb-3">
          <label class="form-label" for="email">Email:</label>
          <input class="form-control" type="text" name="email" id="email">
        </div>
        <div class="mb-3">
          <label class="form-label" for="password">Passwort:</label>
          <input class="form-control" type="password" name="password" id="password">
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Login</button>
        </div>
      </form>
      <?= isset($status) && is_array($status) ? implode('<br>', $status) : '' ?>
    </div>
  </div>

<?php
  require("./inc/footer.php");
?>