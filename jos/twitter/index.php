<!DOCTYPE HTML>
<html>
	<head>
		<title>2013 Junior Olympics of Inline Hockey - Media Screen</title>
		<meta content='width=device-width, initial-scale=1.0' name='viewport'>
		<meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
		<meta content='RSportz is a free tool that helps you register online for leagues and tournaments, see your stats in real time, and share to social networks.' name='description'>
		<link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
		<!--[if lt IE9]>
		<script src='//html5shiv.googlecode.com/svn/trunk/html5.js'></script>
		<![endif]-->
		<link href="../../assets/application.css" media="screen" rel="stylesheet" type="text/css" />
	</head>
	<body class="sidebar">
		<div class="row social">
		<?php include '../../Oauth.php';		
		$bearer_token = get_bearer_token(); // get the bearer token
		$json = json_decode(search_for_a_term($bearer_token, "%23aau2013jos", 'mixed', '1'));
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
		<footer>
			<div class="row sub-social">
				<div class="span4">
					<p class="lead"><img src="../../assets/images/instagram-icon-small.png" alt="Tag"> <img src="../../assets/images/twitter-bird-small.png" alt="Tweet"> #aau2013jos</p>
				</div>
			</div>
		</footer>
	</body>
</html>