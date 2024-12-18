
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
      <table class="table table-striped">
        <thead>
          <th>Game</th>
          <th>Genre</th>
          <th>Beschreibung</th>
        </thead>
        <tbody>
          <tr>
            <td><?= $data['game']->game ?></td>
            <td><?= $data['game']->genre ?></td>
            <td><?= $data['game']->description ?></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>


