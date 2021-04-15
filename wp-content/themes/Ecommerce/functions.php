<?php

/*add_action('wp_head',function(){
  die('Salut les gens');
});*/
/*add_action('wp_head',function(){
  die('test');
},7);*/
function theme_supports()
{
  add_theme_support('title-tag');
}

function theme_register_assets(){
  wp_register_style('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', []);

  wp_register_script('bootstrap','https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',['popper','jquery'],false,true);
  wp_register_script('popper','https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',[],false,true);
  wp_deregister_script('jquery');
  wp_register_script('jquery','https://code.jquery.com/jquery-3.4.1.slim.min.js',[],false,true);

  wp_enqueue_script('bootstrap');
  wp_enqueue_style('bootstrap');
}

function theme_title($title){
  return 'SALUT ' . $title;
}

//HOOk
add_action('after_setup_theme', 'theme_supports');
add_action('wp_enqueue_scripts','theme_register_assets');

//FILTRE
add_filter('wp_title','theme_title');