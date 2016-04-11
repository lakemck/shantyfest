<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
     <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
      <span class="headerImage">
      <img src="<?php bloginfo('template_directory'); ?>/assets/images/logosmall.png" class="logoImage" alt=""></span>
      </a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
  </div>
</header>
