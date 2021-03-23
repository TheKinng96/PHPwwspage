<?php

function wws_enqueue() {
  $uri              = get_theme_file_uri();

  wp_register_style('heebo_google_font', 'https://fonts.googleapis.com/css2?family=Heebo:wght@100;200;300;400;500;600;700;800;900&display=swap');
  wp_register_style('alegreya_google_font', 'https://fonts.googleapis.com/css2?family=Alegreya+SC:ital,wght@0,400;0,500;0,700;0,800;0,900;1,400;1,500;1,700;1,800;1,900&display=swap');
  wp_register_style('amaranth_google_font', 'https://fonts.googleapis.com/css2?family=Amaranth:ital,wght@0,400;0,700;1,400;1,700&display=swap');
  wp_register_style('abril_google_font', 'https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap');
  wp_register_style('fraunces_google_font', 'https://fonts.googleapis.com/css2?family=Fraunces:wght@500&display=swap');
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css');
  wp_register_style('bootstrap_icon', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
  wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css');
  wp_register_style('aos_style', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
  wp_register_style('styles', $uri . '/assets/css/styles.css');

  wp_enqueue_style('heebo_google_font');
  wp_enqueue_style('alegreya_google_font');
  wp_enqueue_style('amaranth_google_font');
  wp_enqueue_style('abril_google_font');
  wp_enqueue_style('fraunces_google_font');
  wp_enqueue_style('bootstrap');
  wp_enqueue_style('bootstrap_icon');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('aos_style');
  wp_enqueue_style('styles');
}