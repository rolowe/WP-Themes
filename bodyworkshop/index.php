<?php
ini_set('display_errors', 'On');
error_reporting(E_ALL | E_STRICT);

  $json = file_get_contents('http://www.thebodyworkshoppilates.net/?p=707&json=1');
  $data = json_decode($json);

  $headline = $data->page->custom_fields->headline[0];
  $ballet_img = $data->page->attachments[0]->url;
  $pilates_img = $data->page->attachments[1]->url;
  $pilates_content = $data->page->custom_fields->pilates_content[0];
  $dance_content = $data->page->custom_fields->dance_content[0];

  $dance_image_2 = $data->page->custom_fields->pilates_image_2[0];

  // echo "<pre>";
  // print_r($data->page->custom_fields->pilates_image_2[0]);
  // print_r($data->page->custom_fields->pilates_image_3[0]);
  // echo "</pre>";

?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Bodyworkshop | Movement for life | Bristol, Cirencester, Tetbury</title>
  <link rel="stylesheet" type="text/css" href="css/styles.css" />

  <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
  <script src="js/jquery.cycle.lite.js"></script>
</head>

<body>


  <header>
    <div class="container">
      <div class="third">
        <p>info@bodyworkshop.net<br />
        Tel: 01285 655446</p>
      </div>
      <div class="third">
        <img src="img/logo.png" />
      </div>
      <div class="third">
        <h2 class="tagline">Movement for life</h2>
      </div>
    </div>
  </header>


  <article>
    <h3><?php echo $headline; ?></h3>
  </article>


  <section class="pilates">
    <div class="angle_container">
      <img src="img/angle.png" class="angle" />
    </div>
    <div class="container">
      <div class="slideshow">
        <img src="<?php echo $pilates_img; ?>" alt="Pilates" />
        <img src="<?php echo $ballet_img; ?>" alt="Dance" />
      </div>
      <div class="info">
        <?php echo $pilates_content; ?>
      </div>
    </div>
  </section>


  <section class="dance">
    <div class="container">
      <div class="info">
        <?php echo $dance_content; ?>
      </div>
      <div class="slideshow">
        <img src="<?php echo $ballet_img; ?>" alt="Dance" />
        <img src="<?php echo $pilates_img; ?>" alt="Pilates" />
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy; Body workshop 2016</p>
    </div>
  </footer>

<script>
$(document).ready(function() {
  $('.slideshow').cycle({
    fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
  });
});
</script>

</body>

</html>
