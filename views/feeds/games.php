<?php require 'controllers/games.php'; ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Game</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
  	<?php echo rsportz_games(); ?>
  </tbody>
</table>