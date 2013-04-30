<?php
//Call the Recent Results URL -- using Skate San Diego as a test subject
$resultsFeed = simplexml_load_file("http://app.rsportz.com/entity_calendar/recent_results/47.rss");
//Set the 'item's as games
$results = $resultsFeed->channel->item;
?>