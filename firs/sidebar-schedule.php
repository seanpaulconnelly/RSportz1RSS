<section>
	<div class="row link">
			<p class="lead">2013FIRSWorldChampionships.org</p>
	</div>
	<div class="row">
		<div class="span4">
			<img src="../../assets/images/firs-logo.jpg" alt="2013 Junior Olympics"/>
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
			<p class="lead"><?php echo $currentDate; ?></p>
			<p class="lead"><?php echo $currentTime; ?></p>
		</div>
	</div>
	<div class="row social">
	<?php include '../../Oauth.php';		
	$bearer_token = get_bearer_token(); // get the bearer token
	$json = json_decode(search_for_a_term($bearer_token, "%23firs2013worlds", 'mixed', '1'));
	$tweetText = $json->statuses['0']->text;
	$realName = $json->statuses['0']->user->name;
	$screenName = $json->statuses['0']->user->screen_name;
	$profileImageUrl = $json->statuses['0']->user->profile_image_url_https; 
	$tweetSource = $json->statuses['0']->source; 

	invalidate_bearer_token($bearer_token); // invalidate the token
	?>
		<div class="social-user clearfix">
			<div class="span1 user-img">
				<img class="img-polaroid" src="<?php echo $profileImageUrl; ?>" alt="Profile"/>
			</div>
			<div class="span3 user-bio">
				<p><?php echo $realName; ?></p>
				<p>@<?php echo $screenName; ?></p>
			</div>
		</div>
		<div class="span4 tweet">
			<p><?php echo $tweetText; ?></p>
			<p><small><img src="../../assets/images/twitter-bird-small.png" alt="Source ">Sent via <?php echo $tweetSource; ?>.</small></p>
		</div>
	</div>
</section>