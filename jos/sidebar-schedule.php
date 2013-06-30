<section>
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
</section>