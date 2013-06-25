<?php

function rsportz_games() {
	//Loop through for the upcoming 10 games (that's all the feed will give you anyway)
  //Call the Games URL -- using Skate San Diego as a test subject
  $gamesFeed = simplexml_load_file("../../rss-examples/games.rss");
  //Set the 'item's as games
  $games = $gamesFeed->channel->item;
	for ($i = 0; $i < 10; $i++) {
		//Set the variables for each child
  		$teams = $games[$i]->title;
  		$description = $games[$i]->description;
  		echo '<div class="row matchup-details">';
      echo '<p>' . $teams . '</p>';
  		echo $description;
      echo '</div>';
	}
}
?>

<div class="container">
<?php include '../header.php'; ?>
<div class="row">
  <div class="span8 schedule-table">
    <?php echo rsportz_games(); ?>
  </div>
  <div class="span4">
     <?php include '../sidebar.php'; ?>
  </div>
</div>
<?php include '../footer.php'; ?>
</div>