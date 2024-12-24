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
          <ul id="menu_frame" class="menu_frame">
            <li class="menu_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/goalsEnter" class="item">Goals</a>
            </li>
            <li class="menu_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/classesType" class="item">Classes</a>
            </li>
            <li class="menu_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/teachers" class="item">Teachers</a>
            </li>
            <li class="menu_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/about" class="item">About</a>
            </li>
            <li class="menu_item">
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>/contact" class="item">Contact</a>
            </li>
          </ul>
        </nav>