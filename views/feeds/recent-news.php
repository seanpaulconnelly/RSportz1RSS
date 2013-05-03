<?php require 'controllers/recent-news.php'; ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Title</th>
      <th>Author</th>
      <th>Description</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
  	<?php echo rsportz_recent_news(); ?>
  </tbody>
</table>