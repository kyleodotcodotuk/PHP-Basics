<section>
  <div class="grid">

  <h2>Image repeating grid</h2>

    <?php

    function get_image_urls($folder) {
      if (is_dir($folder)) {
        $scandir = scandir($folder);
        foreach ($scandir as $item) {
          if (in_array($item, array('.', '..'))) continue;
          $path = $item;

          // Print the filename (adjust formatting as needed)
          echo "Found file: $path <br>";
        }
      } else {
        echo "Error: Directory '$folder' does not exist.";
      }
    }

    get_image_urls('../preview/src/assets/images'); // Assuming 'src/assets/images' is relative


      if (!empty($images)):
        foreach ($images as $image): ?>
          <img src="<?php echo esc_url($image['$path']); ?>" alt="<?php echo esc_attr($image['alt']); ?>">
        <?php endforeach;
      endif;
    ?>
    

    <img src="/preview/src/assets/images/010.jpg" height="300" width="300">

    <p>Paragraph underneath</p>

  </div>
</section>

