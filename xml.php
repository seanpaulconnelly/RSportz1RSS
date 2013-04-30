<?php
//Set up the URL -- using Skate San Diego as a test subject
$xml = simplexml_load_file("http://app.rsportz.com/entity_calendar/upcoming_games/47.rss");
//Set the 'item's as games
$games = $xml->channel->item;

