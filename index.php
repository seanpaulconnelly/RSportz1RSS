<?php 
include 'header.php';
include 'topnav.php';
require_once 'xml.php';
?>

<div class="container">
<div class="span12">
<h2>Upcoming 10 Games</h2>
<table class="table table-striped">
  <thead>
    <tr>
      <th>Game</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>

<?php
//Loop through for the upcoming 10 games
for ($i = 0; $i < 10; $i++) {

  //Set the variables for each child
  $teams = $games[$i]->title;
  $gameLink = $games[$i]->link;
  $description = $games[$i]->description;
?>


    <tr>
      <td><a href="<?php echo $gameLink; ?>"><?php echo $teams; ?></a></td>
      <td><?php echo $description; ?></td>
    </tr>
<?php } /* <---- Close the loop */ ?>

  </tbody>
</table>

</div> <!-- .span12 -->
</div> <!-- .container -->
<?php include 'footer.php'; ?>