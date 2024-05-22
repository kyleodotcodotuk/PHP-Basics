<section>
  <div class="grid">

  <h2>Image repeating grid</h2>

  <?php

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

    $images = get_image_urls('/src/assets/images'); // Assuming 'src/assets/images' is relative

    if ( !empty($images) ) :
      foreach ($images as $image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
      <?php endforeach;
    endif; 
    ?>

    <p>Paragraph underneath</p>

  </div>
</section>

