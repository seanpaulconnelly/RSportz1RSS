<?php
function rsportz_recent_results() {
  //Loop through for the upcoming 10 games (that's all the feed will give you anyway)
  include 'models/recent-results.php';
	for ($i = 0; $i < 10; $i++) {
		  //Set the variables for each child
  		$teams = $results[$i]->title;
  		$gameLink = $results[$i]->link;

      //Target the HTML elements.  Hackfest.
  		$result = $results[$i]->description->div->p->span;

  		echo '<tr>';
  		echo '<td><a href=' . $gameLink . '>' . $teams . '</a></td>';
  		echo '<td>' . $result . '</td>';
  		echo '</tr>';
	}
}

function print_feed() {
  //print_r the feed to test it
  include 'models/recent-results.php';
  echo '<pre>';
  print_r($resultsFeed);
}
?>