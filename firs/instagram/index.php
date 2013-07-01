<?php
//-- Include Instagram library
include_once '../../instaphp/instaphp.php';
//-- Get an instance of the Instaphp object
$api = Instaphp\Instaphp::Instance();
//-- Force-use manually generated access_token http://jenwachter.com/2013/04/22/retrive-the-access-token-for-your-instagram-account/

$token = '225748381.fee2307.a972db7ef3bd482892841c30e2ecc6c3';
setcookie('instaphp', $token, strtotime('30 days'));
//-- once you have a token, update the Instaphp instance so it passes the token for future calls
$api = Instaphp\Instaphp::Instance($token);   
?>
<!DOCTYPE HTML>
<html>
  <head>
    <title>2013 Junior Olympics of Inline Hockey - Media Screen</title>
    <meta content='width=device-width, initial-scale=1.0' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <meta content='RSportz is a free tool that helps you register online for leagues and tournaments, see your stats in real time, and share to social networks.' name='description'>
    <link href='http://fonts.googleapis.com/css?family=Lato:100,400' rel='stylesheet' type='text/css'>
    <script src='//html5shiv.googlecode.com/svn/trunk/html5.js'></script>
    <link href="../../assets/application.css" media="screen" rel="stylesheet" type="text/css" />
  </head>
  <body class="sidebar">

<div class="row social">
  <?php
  //Search for the tag
  $recentTags = $api->Tags->Recent('firs2013worlds');
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
<footer>
  <div class="row sub-social">
    <div class="span4">
      <p class="lead"><img src="../../assets/images/instagram-icon-small.png" alt="Tag"> <img src="../../assets/images/twitter-bird-small.png" alt="Tweet"> #firs2013worlds</p>
    </div>
  </div>
</footer>