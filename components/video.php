<section class="video-feed">
  <div class="wrapper flow flow-space-10"> 

    <div class="grid gap-6">
 
    <h2>Images please</h2>

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

    $images = get_image_urls('src/assets/images'); // Assuming 'src/assets/images' is relative to images.php
    
    if ( !empty($images) ) :
      foreach ($images as $image) : ?>
        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
      <?php endforeach;
    endif;
    ?>


      <!-- <iframe width="560" height="315" src="https://www.youtube.com/embed/CbMNISTzw20" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/UA1pN7avKgw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/A7Y8ctDh55w" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/Kxgb9NcVKIw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

      <iframe width="560" height="315" src="https://www.youtube.com/embed/42KQYp2dgYU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
    </div>
  </div>
</section>
