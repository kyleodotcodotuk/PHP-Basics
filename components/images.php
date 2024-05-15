<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function get_image_urls($folder) {
  $images = array();
  if (is_dir($folder)) {
    $scandir = scandir($folder);
    foreach ($scandir as $item) {
      if (in_array($item, array('.', '..'))) continue;
      $path = $folder . DIRECTORY_SEPARATOR . $item; // Use DIRECTORY_SEPARATOR for portability
      if (is_file($path) && getimagesize($path) !== false) {
        $images[] = array(
          'url' => $path,
          'alt' => pathinfo($path, PATHINFO_FILENAME) // Use filename for alt text (replace with your logic)
        );
      }
    }
  }
  return $images;
}

$images = get_image_urls('src/assets/images');

// Rest of the code remains the same (looping and displaying images)
if ( !empty($images) ) :
  foreach ($images as $image) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
  <?php endforeach;
endif;
?>
