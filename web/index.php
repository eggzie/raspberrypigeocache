<?php 
include_once(dirname(__file__) . "/lib/header.php");
?>

<div class="w3-container header_padding">
  <div class="w3-row">
    <div class="w3-col s3">
      <a href="/"><img src="<?php print image ?>"></a>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Find Code: <?php print find_code; ?></h3>
    </div>
  </div>

  <hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <a href="/"><img src="<?php print image ?>"></a>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Track me: <?php print tacking_code(); ?></h3>
    </div>
  </div>

  <hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <a href="/"><img src="<?php print image ?>"></a>
    </div>
    <div class="w3-col s9 w3-container">
      <form class="form" role="form" method="post" action="">
        <div class="form-group">
          <label for="geocaching_nickname">Sign the Geocache Virtual Log:</label>
          <input type="text" class="form-control" id="geocaching_nickname" name="geocaching_nickname" placeholder="Enter Your Geocaching Nickname" required>
        </div>
        <div class="form-group">
          <label for="comment">Comment:</label><br>
          <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Enter Comment About this Geocache. You will still have to log this Lab Geocache on labs.geocahcing.com"></textarea>
        </div>
        <button type="submit" class="btn btn-default">Log</button>
      </form>
    </div>
  </div>

<?php if (isset($_REQUEST["geocaching_nickname"])) { ?>
<hr>

  <div class="w3-row">
    <div class="w3-col s3">
      <a href="/"><img src="<?php print image ?>"></a>
    </div>
    <div class="w3-col s9 w3-container">
      <h3>Geocaching Nickname: <?php print $_REQUEST["geocaching_nickname"]; ?></h3>
      <h6><?php print date(date_text); ?></h6>
      <?php if ( isset($_REQUEST["comment"]) and ! empty($_REQUEST["comment"])) { ?>
      <?php print nl2br(emoji_unified_to_html(emoticons($_REQUEST["comment"]))); ?>
      <?php } ?>
    </div>
  </div>

<?php } ?>
<hr>
  <div class="w3-row">
    <div class="w3-col s3">
      <br>
    </div>
    <div class="w3-col s9 w3-container">
      <br>
      <br>
      <br>
    </div>
  </div>
</div>
<?php 
include_once(dirname(__file__) . "/lib/footer.php");
?>
