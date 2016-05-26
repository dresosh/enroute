<header>
  <div class="container no-padding">
    <nav class="navbar navbar-inverse">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#example-nav" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="a2a_kit a2a_kit_size_32 a2a_default_style" data-a2a-icon-color="transparent"  data-a2a-url="http://www.enroutefilms.com/" data-a2a-title="Check out Enroute Films">
            <a class="a2a_button_facebook"></a>
            <a class="a2a_button_twitter"></a>
            <a class="a2a_button_email"></a>
            <a class="a2a_button_sms"></a>
            <a class="a2a_button_whatsapp"></a>
          </div>
          <a class="navbar-brand" href="/enroute">Enroute</a>
        </div>
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav', 'container_id' => 'example-nav', 'container_class' => 'collapse navbar-collapse' ]);
      endif;
      ?>
    </nav>
  </div>
</header>
