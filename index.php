<?php 
include 'views/header.php';
include 'views/topnav.php';
require_once 'models/games.php';
?>

<div class="container">
  <div class="span12">
    <ul class="nav nav-tabs">
      <li><a href="#games" data-toggle="tab">Games</a></li>
      <li><a href="#recent-results" data-toggle="tab">Recent Results</a></li>
    </ul>
    <div id="games">
      <?php include 'views/games.php'; ?>
    </div>
    <div id="recent-results">
      <?php include 'views/recent-results.php'; ?>
    </div>
  </div> <!-- .span12 -->
</div> <!-- .container -->
<?php include 'views/footer.php'; ?>