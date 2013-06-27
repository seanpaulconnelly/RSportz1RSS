<section>
	<div class="row link">
			<p class="lead">2013AAUInlineJOs.org</p>
	</div>
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
			<p class="lead"><?php echo $currentDate; ?></p>
			<p class="lead"><?php echo $currentTime; ?></p>
		</div>
	</div>
	<div class="row social">
		<?php
		//Search for the tag
		$recentTags = $api->Tags->Recent('stanleycup');
		$profileImageUrl = $recentTags->data['0']->caption->from->profile_picture;
		$realName = $recentTags->data['0']->caption->from->full_name;
		$screenName = $recentTags->data['0']->caption->from->username;
		$imageUrl = $recentTags->data['0']->images->standard_resolution->url;
		?>
		<div class="social-user clearfix">
			<div class="span1 user-img">
				<img class="img-polaroid insta-pro-pic" src="<?php echo $profileImageUrl; ?>" alt="Profile"/>
			</div>
			<div class="span3 user-bio">
				<p><?php echo $realName; ?></p>
				<p>@<?php echo $screenName; ?></p>
			</div>
		</div>
		<div class="span4 instagram-photo">
			<?php echo '<img src="' . $imageUrl . '" alt="Instagram"/>'; ?>
		</div>
	</div>
</section>
