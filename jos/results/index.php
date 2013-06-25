<?php

function rsportz_recent_results() {
  //Loop through for the upcoming 10 games (that's all the feed will give you anyway)
  //Call the Recent Results URL
	$resultsFeed = simplexml_load_file("../../rss-examples/results.rss");
	//Set the 'item's as games
	$results = $resultsFeed->channel->item;
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

include '../header.php'; ?>

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
<?php include '../footer.php'; ?>