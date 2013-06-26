<section>
	<div class="row">
		<div class="span4">
			<img src="../../assets/images/jos-logo.jpg" alt="2013 Junior Olympics"/>
		</div>
	</div>
	<div class="row">
		<div class="span4 timedate">
			<?php
				//Time and date settings
				date_default_timezone_set('America/Los_Angeles');
				$currentDate = date('F jS, Y');
				$currentTime = date('g:i A');
			?>
			<p class="lead">Updated:<br/><?php echo $currentDate; ?></p>
			<p class="lead"><?php echo $currentTime; ?></p>
		</div>
	</div>
	<div class="row link">
		<hr>
		<div class="span4">
			<p>Visit</p>
			<p class="lead">2013AAUInlineJOs.org</p>
			<p>For Schedule, Stats, and Standings</p>
		</div>
	</div>
	<div class="row twitter">
	<?php include '../../Oauth.php';		
	$bearer_token = get_bearer_token(); // get the bearer token
	$json = json_decode(search_for_a_term($bearer_token, "%23stanleycup", 'mixed', '5'));
	$tweetText = $json->statuses['0']->text;
	$screenName = $json->statuses['0']->user->screen_name;
	$profileImageUrl = $json->statuses['0']->user->profile_image_url_https;  

	invalidate_bearer_token($bearer_token); // invalidate the token
	?>
		<hr>
		<div class="span4">
			<p class="lead">@<?php echo $screenName; ?></p>
		</div>
		<div class="span1">
			<img class="img-polaroid" src="<?php echo $profileImageUrl; ?>" alt="Profile"/>
		</div>
		<div class="span3">
			<p><?php echo $tweetText; ?></p>
		</div>
	</div>
</section>