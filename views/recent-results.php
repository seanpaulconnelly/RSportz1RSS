<?php require 'controllers/recent-results.php'; ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Game</th>
      <th>Result</th>
    </tr>
  </thead>
  <tbody>
  	<?php echo rsportz_recent_results(); ?>
  </tbody>
</table>

<hr/>
<h4>print_r the XML.  Needs encoded on the RSportz 1.0 side?</h4>
<?php echo print_feed(); ?>