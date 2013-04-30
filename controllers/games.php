
<?php
function rsportz_games() {
	//Loop through for the upcoming 10 games (that's all the feed will give you anyway)
  include 'models/games.php';
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
?>