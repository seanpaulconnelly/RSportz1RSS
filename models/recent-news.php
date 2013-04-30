<?php
//Call the Recent Results URL -- using Skate San Diego as a test subject
$newsFeed = simplexml_load_file("http://app.rsportz.com/entity_calendar/recent_news/47.rss");
//Set the 'item's as games
$news = $newsFeed->channel->item;
?>