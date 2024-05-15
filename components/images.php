<h2>Images please 3</h2>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function get_image_urls($folder) {
  $images = array();
  if (is_dir($folder)) {
    $scandir = scandir($folder);
    foreach ($scandir as $item) {
      if (in_array($item, array('.', '..'))) continue;
      $path = $item; // Use only the filename within the folder
      if (is_file($path) && getimagesize($path) !== false) {
        $images[] = array(
          'url' => $path,
          'alt' => pathinfo($path, PATHINFO_FILENAME)
        );
      }
    }
  }
  return $images;
}

$images = get_image_urls('/assets/images'); // Assuming 'src/assets/images' is relative to images.php
 
if ( !empty($images) ) :
  foreach ($images as $image) : ?>
    <img src="#">
  <?php endforeach;
endif;
?>
