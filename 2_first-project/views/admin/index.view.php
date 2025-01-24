
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1><?= $data['title'] ?></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-6 mb-3">
      <form action="" method="GET">
        <input type="text" name="search_game" value="<?= $data['search_value'] ?>">
        <input type="submit" value="Suchen">
      </form>
    </div>
    <div class="col-6 mb-3">
      <a href="create.php" class="float-end text-warning">Anlegen</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table table-striped">
        <thead>
          <th colspan="2">Aktionen</th>
          <th>Game</th>
          <th>Genre</th>
          <th>Beschreibung</th>
        </thead>
        <tbody>
          <? foreach($data['game_list'] as $game): ?>
            <tr>
              <td><a href="edit.php?game=<?= $game->id ?>">[Edit]</a></td>
              <td><a href="delete.php?game=<?= $game->id ?>">[Del]</a></td>
              <td><a href="detail.php?game=<?= $game->id ?>"><?= $game->name ?></a></td>
              <td><?= $game->genre ?></td>
              <td><?= $game->description ?></td>
            </tr> 
          <? endforeach; ?>  
        </tbody>
      </table>
    </div>
  </div>
</div>