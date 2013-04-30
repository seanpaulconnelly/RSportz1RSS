
<?php
function rsportz_recent_results() {
	//Loop through for the upcoming 10 games (that's all the feed will give you anyway)
  include 'models/recent-results.php';
	for ($i = 0; $i < 10; $i++) {
		//Set the variables for each child
  		$teams = $results[$i]->title;
  		$gameLink = $results[$i]->link;
  		$description = $results[$i]->description;
  		echo '<tr>';
  		echo '<td><a href=' . $gameLink . '>' . $teams . '</a></td>';
  		echo '<td>' . $description . '</td>';
  		echo '</tr>';
	}
}
?>