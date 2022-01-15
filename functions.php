<?php
function mitigation_files() {
  wp_enqueue_script('main-mitigation-js', get_theme_file_uri('/js/script.js'), array('jquery'), '1.0', true);
  // wp_enqueue_script('googleMapAuth', get_theme_file_uri('https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU'), array('jquery'), '1.0', true);
  // wp_enqueue_script('googleMapjs', get_theme_file_uri('/plugins/google-map/map.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('shufflejs', get_theme_file_uri('/plugins/shuffle/shuffle.min.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('colorboxjs', get_theme_file_uri('/plugins/colorbox/jquery.colorbox.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('slickAnimationjs', get_theme_file_uri('/plugins/slick/slick-animation.min.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('slickjs', get_theme_file_uri('/plugins/slick/slick.min.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('Bootstrapjs', get_theme_file_uri('/plugins/bootstrap/bootstrap.min.js'), array('jquery'), '1.0', true);
  wp_enqueue_script('jqueryjs', get_theme_file_uri('/plugins/jQuery/jquery.min.js'), array('jquery'), '1.0', true);

  wp_enqueue_style('mitigation_main_styles', get_theme_file_uri('/css/style.css'));
  

  wp_enqueue_style('mitigation_extra1_styles', get_theme_file_uri('/plugins/bootstrap/bootstrap.min.css'));
  wp_enqueue_style('mitigation_extra4_styles', get_theme_file_uri('/plugins/fontawesome/css/all.min.css'));
  wp_enqueue_style('mitigation_extra_styles', get_theme_file_uri('/plugins/animate-css/animate.css'));
  // wp_enqueue_style('mitigation_extra6_styles', get_theme_file_uri('//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.0/slick/slick-theme.css'));
  wp_enqueue_style('mitigation_extra2_styles', get_theme_file_uri('/plugins/colorbox/colorbox.css'));

  




  // wp_enqueue_style('mitigation_main_styles', get_theme_file_uri('/css/maps/style.css.map'));
  // wp_enqueue_style('mitigation_extra3_styles', get_theme_file_uri('/plugins/fontawesome/css/all.css'));
  // wp_enqueue_style('mitigation_extra5_styles', get_theme_file_uri('/plugins/fontawesome/css/all.css'));
  // wp_enqueue_style('mitigation_extra8_styles', get_theme_file_uri('/scss/templates/_main.scss'));
  // wp_enqueue_style('mitigation_extra9_styles', get_theme_file_uri('/scss/templates/_navigation.scss'));
  // wp_enqueue_style('mitigation_extra10_styles', get_theme_file_uri('/scss/style.scss'));
  // wp_enqueue_style('mitigation_extra11_styles', get_theme_file_uri('/scss/_variables.scss'));
  // wp_enqueue_style('mitigation_extra12_styles', get_theme_file_uri('/scss/templates/style.scss'));
  // wp_enqueue_style('mitigation_extra13_styles', get_theme_file_uri('/scss/_mixins.scss'));
  // wp_enqueue_style('mitigation_extra14_styles', get_theme_file_uri('/scss/_common.scss'));
  // wp_enqueue_style('mitigation_extra15_styles', get_theme_file_uri('/scss/_button.scss'));

  










}

add_action('wp_enqueue_scripts', 'mitigation_files');