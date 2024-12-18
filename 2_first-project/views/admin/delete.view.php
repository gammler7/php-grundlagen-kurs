
<div class="container">
  <div class="row">
    <div class="col-12">
      <a href="index.php">Zur Startseite</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <h1><?= $data['title'] ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <h2><?= $data['game']->game ?>, jetzt löschen?</h2>
      <form action="" method="POST">
        <input type="hidden" name="org_name" value="<?= $data['game']->game ?>">
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Ja, jetzt löschen</button>
        </div>
      </form>
      <?= isset($data['status']) && is_array($data['status']) ? implode('<br>', $data['status']) : '' ?>
    </div>
  </div>
</div>