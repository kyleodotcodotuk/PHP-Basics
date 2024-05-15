<h2>Images please</h2>

<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

function get_image_urls($folder) {
  $images = array();
  if (is_dir($folder)) {
    $scandir = scandir($folder);
    foreach ($scandir as $item) {
      if (in_array($item, array('.', '..'))) continue;
      $path = $folder . DIRECTORY_SEPARATOR . $item; 
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

$images = get_image_urls('../src/assets/images/');
 
if ( !empty($images) ) :
  foreach ($images as $image) : ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
  <?php endforeach;
endif;
?>
