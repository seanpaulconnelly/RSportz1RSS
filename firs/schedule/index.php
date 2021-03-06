<?php

function rsportz_games() {
	//Loop through for the upcoming 10 games (that's all the feed will give you anyway)
  //Call the Games URL
  $gamesFeed = simplexml_load_file("http://app.rsportz.com/entity_calendar/upcoming_games/42.rss");
  //Set the 'item's as games
  $games = $gamesFeed->channel->item;
	for ($i = 0; $i < 10; $i++) {
		//Set the variables for each child
  		$teams = $games[$i]->title;
  		$description = $games[$i]->description;

      // Search the haystack for needleOne; replace with needleTwo
      $haystackDesc = $description;
      $needleOneDesc = array("·", "Jul", ", '13 ");
      $needleTwoDesc = array("<br/>", "July", "<br/>");
      $cleanDescription = str_replace($needleOneDesc, $needleTwoDesc, $haystackDesc);

      $haystackTeams = $teams;
      $needleOneTeams = "vs. ";
      $needleTwoTeams = "<span class='vs'>vs.</span><br/>";
      $cleanTeams = str_replace($needleOneTeams, $needleTwoTeams, $haystackTeams);

  		echo '<div class="row matchup-details">';
      echo '<p>' . $cleanTeams . '</p>';
  		echo $cleanDescription;
      echo '</div>';
	}
}
?>

<?php include '../header.php'; ?>
<div class="container fully">
  <div class="row">
    <div class="span12 schedule-table">
      <div class="row">
        <h1>schedule <span>results</span></h1>
      </div>
      <?php echo rsportz_games(); ?>
    </div>
  </div>
</div>
<?php include '../footer.php'; ?>
