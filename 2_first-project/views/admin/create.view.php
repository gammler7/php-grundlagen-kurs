
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
      <form action="" method="POST">
        <div class="mb-3">
          <label class="form-label" for="name">Name:</label>
          <input class="form-control" type="text" name="name" id="name">
        </div>
        <div class="mb-3">
          <label class="form-label" for="genre">Genre:</label>
          <input class="form-control" type="text" name="genre" id="genre">
        </div>
        <div class="mb-3">
          <label class="form-label" for="description">Beschreibung:</label>
          <textarea class="form-control" name="description" id="description"></textarea>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-primary">Anlegen</button>
        </div>
      </form>
      <?= isset($data['status']) && is_array($data['status']) ? implode('<br>', $data['status']) : '' ?>
    </div>
  </div>
</div>