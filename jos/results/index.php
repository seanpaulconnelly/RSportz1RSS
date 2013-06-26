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
  		$result = $results[$i]->description->div->p->span;

      $haystackTeams = $teams;
      $needleOneTeams = "vs. ";
      $needleTwoTeams = "<span class='vs'>vs.</span><br/>";
      $cleanTeams = str_replace($needleOneTeams, $needleTwoTeams, $haystackTeams);

      echo '<div class="row matchup-details result">';
  		echo '<p>' . $cleanTeams . '</p>';
  		echo '<p>' . $result . '</p>';
      echo '</div>';
	}
}
?>

<div class="container">
  <?php include '../header.php'; ?>
  <div class="row">
    <div class="span8 schedule-table">
      <div class="row">
        <h1>results <span>schedule</span></h1>
      </div>
      <?php echo rsportz_recent_results(); ?>
    </div>
    <div class="span4">
       <?php include '../sidebar.php'; ?>
    </div>
  </div>
</div>
<?php include '../footer.php'; ?>