<?php
//Call the Games URL -- using Skate San Diego as a test subject
$gamesFeed = simplexml_load_file("https://app.rsportz.com/entity_calendar/upcoming_games/47.rss");
//Set the 'item's as games
$games = $gamesFeed->channel->item;
?>