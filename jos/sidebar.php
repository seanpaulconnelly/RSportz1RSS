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
			<p class="lead"><?php echo $currentDate; ?></p>
			<p class="lead"><?php echo $currentTime; ?></p>
		</div>
	</div>
	<div class="row">
		<div class="span4 outbound">
			<hr>
			<p class="lead">Full schedule at<br/>2013aauinlinejos.org</p>
			<p class="lead">Twitter Feed</p>
		</div>
	</div>
</section>