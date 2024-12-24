<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Yoga Studio</title>
    
    <?php wp_head(); ?>

  </head>

    <body>
        <header>
            <img    
                src="<?php echo get_template_directory_uri(); ?>/public/photo/Header.jpg"
                alt="Not Found"
                ="head"
            />
        </header>

        <nav id="menu" class="menu">
          <?php
          wp_nav_menu(
            array(
              'theme_location' => 'primary',
              'container' => '',
              'menu_class' => 'menu_frame'
            )
          );
          ?>
        </nav>