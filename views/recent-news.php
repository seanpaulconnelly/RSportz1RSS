<?php require 'controllers/recent-news.php'; ?>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Author</th>
      <th>Title</th>
      <th>Description</th>
      <th>Date</th>
    </tr>
  </thead>
  <tbody>
  	<?php echo rsportz_recent_news(); ?>
  </tbody>
</table>