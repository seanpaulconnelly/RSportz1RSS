<?php require 'controllers/recent-results.php'; ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Game</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
  	<?php echo rsportz_recent_results(); ?>
  </tbody>
</table>