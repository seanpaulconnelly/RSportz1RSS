
<?php
function rsportz_recent_news() {
	//Loop through for the upcoming 10 games (that's all the feed will give you anyway)
  include 'models/recent-news.php';
	for ($i = 0; $i < 10; $i++) {
		//Set the variables for each child
  		$newsTitle = $news[$i]->title;
  		$newsLink = $news[$i]->link;
      $pubDate = $news[$i]->pubDate;
      $author = $news[$i]->author;
  		$description = $news[$i]->description;
  		echo '<tr>';
      echo '<td>' . $author . '</td>';
  		echo '<td><a href=' . $newsLink . '>' . $newsTitle . '</a></td>';
      echo '<td>' . $pubDate . '</td>';
  		echo '<td>' . $description . '</td>';
  		echo '</tr>';
	}
}
?>