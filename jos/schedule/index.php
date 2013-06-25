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
  		$gameLink = $games[$i]->link;
  		$description = $games[$i]->description;
  		echo '<tr>';
  		echo '<td><a href=' . $gameLink . '>' . $teams . '</a></td>';
  		echo '<td>' . $description . '</td>';
  		echo '</tr>';
	}
}

include '../header.php'; 

?>
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
<?php include '../footer.php'; ?>