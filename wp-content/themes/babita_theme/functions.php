<?php

function load_stylesheets()
{
    wp_register_style('font', get_template_directory_uri(). '/fonts/font-awesome-4.7.0/css/font-awesome.min.css', array(), 1,'all');
    wp_enqueue_style('font');

    wp_register_style('font', get_template_directory_uri(). '/fonts/iconic/css/material-design-iconic-font.min.css', array(), 1,'all');
    wp_enqueue_style('font');

   wp_register_style('font', get_template_directory_uri(). '/fonts/linearicons-v1.0.0/icon-font.min.css', array(), 1,'all');
    wp_enqueue_style('font');

    wp_register_style('bootstrap', get_template_directory_uri(). '/vendor/bootstrap/css/bootstrap.min.css', array(), 1,'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('icon', get_template_directory_uri(). '/images/icons/favicon.png', array(), 1,'all');
    wp_enqueue_style('icon');

    wp_register_style('animate', get_template_directory_uri(). '/vendor/animate/animate.css', array(), 1,'all');
    wp_enqueue_style('animate');

    wp_register_style('hamburgers', get_template_directory_uri(). '/vendor/css-hamburgers/hamburgers.min.css', array(), 1,'all');
    wp_enqueue_style('hamburgers');



    wp_register_style('select2', get_template_directory_uri(). '/vendor/select2/select2.min.css', array(), 1,'all');
    wp_enqueue_style('select2');

    wp_register_style('daterangepicker', get_template_directory_uri(). '/vendor/daterangepicker/daterangepicker.css', array(), 1,'all');
    wp_enqueue_style('daterangepicker');

    wp_register_style('slick', get_template_directory_uri(). '/vendor/slick/slick.css', array(), 1,'all');
    wp_enqueue_style('slick');

    wp_register_style('popus', get_template_directory_uri(). '/vendor/MagnificPopup/magnific-popup.css', array(), 1,'all');
    wp_enqueue_style('popus');

    wp_register_style('scrollbar', get_template_directory_uri(). '/vendor/perfect-scrollbar/perfect-scrollbar.css', array(), 1,'all');
    wp_enqueue_style('scrollbar');
    wp_register_style('util', get_template_directory_uri(). '/css/util.css', array(), 1,'all');
    wp_enqueue_style('util');
    wp_register_style('main', get_template_directory_uri(). '/css/main.css', array(), 1,'all');
    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts', 'load_stylesheets');


function addjs()
{
    wp_register_script('jquery', get_template_directory_uri(). '/vendor/jquery/jquery-3.2.1.min.js', array(), 1,1,1);
    wp_enqueue_script('jquery');

    wp_register_script('animsition', get_template_directory_uri(). '/vendor/animsition/js/animsition.min.js', array(), 1,1,1);
    wp_enqueue_script('animsition');
    
    wp_register_script('bootstrap', get_template_directory_uri(). '/vendor/bootstrap/js/popper.js', array(), 1,1,1);
    wp_enqueue_script('bootstrap');

    wp_register_script('bootstrap', get_template_directory_uri(). '/vendor/bootstrap/js/bootstrap.min.js', array(), 1,1,1);
    wp_enqueue_script('bootstrap');

}
?>



<!--===============================================================================================-->

<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">