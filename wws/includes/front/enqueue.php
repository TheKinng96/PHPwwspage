<?php

function wws_enqueue() {
  $uri              = get_theme_file_uri();

  wp_register_style('heebo_google_font', 'https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
  wp_register_style('alegreya_google_font', 'https://fonts.googleapis.com/css2?family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&display=swap');
  wp_register_style('amaranth_google_font', 'https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&display=swap');
  wp_register_style('abril_google_font', 'https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');
  wp_register_style('fraunces_google_font', 'https://fonts.googleapis.com/css2?family=Fraunces:wght@500&display=swap');
}