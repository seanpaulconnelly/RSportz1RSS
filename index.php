<?php include 'views/header.php'; ?>
<div class="container">
  <div class="span12">
    <h4>Choose a feed</h4>
    <ul class="nav nav-tabs" id="myTab">
      <li><a href="#games" data-toggle="tab">Games</a></li>
      <li><a href="#recent-results" data-toggle="tab">Recent Results</a></li>
      <li><a href="#recent-news" data-toggle="tab">Recent News</a></li>
    </ul>
    <div class="tab-content">
      <div class="tab-pane active" id="games">
        <?php include 'views/feeds/games.php'; ?>
      </div>
      <div class="tab-pane" id="recent-results">
        <?php include 'views/feeds/recent-results.php'; ?>
      </div>
      <div class="tab-pane" id="recent-news">
        <?php include 'views/feeds/recent-news.php'; ?>
      </div>
    </div>

  </div> <!-- .span12 -->
</div> <!-- .container -->
<?php include 'views/footer.php'; ?>