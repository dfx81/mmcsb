<?php
// bootstrap 5 wp_nav_menu walker
class bootstrap_5_wp_nav_menu_walker extends Walker_Nav_menu
{
  private $current_item;
  private $dropdown_menu_alignment_values = [
    'dropdown-menu-start',
    'dropdown-menu-end',
    'dropdown-menu-sm-start',
    'dropdown-menu-sm-end',
    'dropdown-menu-md-start',
    'dropdown-menu-md-end',
    'dropdown-menu-lg-start',
    'dropdown-menu-lg-end',
    'dropdown-menu-xl-start',
    'dropdown-menu-xl-end',
    'dropdown-menu-xxl-start',
    'dropdown-menu-xxl-end'
  ];

  function start_lvl(&$output, $depth = 0, $args = null)
  {
    $dropdown_menu_class[] = '';
    foreach($this->current_item->classes as $class) {
      if(in_array($class, $this->dropdown_menu_alignment_values)) {
        $dropdown_menu_class[] = $class;
      }
    }
    $indent = str_repeat("\t", $depth);
    $submenu = ($depth > 0) ? ' sub-menu' : '';
    $output .= "\n$indent<ul class=\"dropdown-menu$submenu " . esc_attr(implode(" ",$dropdown_menu_class)) . " depth_$depth\">\n";
  }

  function start_el(&$output, $item, $depth = 0, $args = null, $id = 0)
  {
    $this->current_item = $item;

    $indent = ($depth) ? str_repeat("\t", $depth) : '';

    $li_attributes = '';
    $class_names = $value = '';

    $classes = empty($item->classes) ? array() : (array) $item->classes;

    $classes[] = ($args->walker->has_children) ? 'dropdown' : '';
    $classes[] = 'nav-item';
    $classes[] = 'nav-item-' . $item->ID;
    if ($depth && $args->walker->has_children) {
      $classes[] = 'dropdown-menu dropdown-menu-end';
    }

    $class_names =  join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
    $class_names = ' class="' . esc_attr($class_names) . '"';

    $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
    $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

    $output .= $indent . '<li ' . $id . $value . $class_names . $li_attributes . '>';

    $attributes = !empty($item->attr_title) ? ' title="' . esc_attr($item->attr_title) . '"' : '';
    $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
    $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
    $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

    $active_class = ($item->current || $item->current_item_ancestor || in_array("current_page_parent", $item->classes, true) || in_array("current-post-ancestor", $item->classes, true)) ? 'active' : '';
    $nav_link_class = ( $depth > 0 ) ? 'dropdown-item ' : 'nav-link ';
    $attributes .= ( $args->walker->has_children ) ? ' class="'. $nav_link_class . $active_class . ' dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"' : ' class="'. $nav_link_class . $active_class . '"';

    $item_output = $args->before;
    $item_output .= '<a' . $attributes . '>';
    $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
    $item_output .= '</a>';
    $item_output .= $args->after;

    $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
  }
}
// register a new menu
register_nav_menu('main-menu', 'Main menu');

//-----

function load_styles() {
  wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', array(), false, 'all');
  wp_enqueue_style('bootstrap');

  /*wp_register_style('gfonts', 'https://fonts.googleapis.com', array(), false, 'all');
  wp_enqueue_style('gfonts');

  wp_register_style('gstatic', 'https://fonts.gstatic.com', array(), false, 'all');
  wp_enqueue_style('gstatic');*/

  wp_register_style('poppins', 'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap', array(), false, 'all');
  wp_enqueue_style('poppins');

  wp_register_style('base', get_template_directory_uri() . '/style.css', array(), false, 'all');
  wp_enqueue_style('base');

  if (is_page() && !is_front_page() && !is_single() && !is_page_template('page-fluid.php') && !is_page_template('page-full.php') && !is_page_template("page-center.php") && !is_404() && !is_page_template('index.php') && !is_home()) {
    wp_register_style('page', get_template_directory_uri() . '/css/page.css', array(), false, 'all');
    wp_enqueue_style('page');
  }

  if (is_front_page()) {
    wp_register_style('front', get_template_directory_uri() . '/css/front-page.css', array(), false, 'all');
    wp_enqueue_style('front');
  }

  if (is_single()) {
    wp_register_style('single', get_template_directory_uri() . '/css/single.css', array(), false, 'all');
    wp_enqueue_style('single');
  }

  if (is_page_template("page-full.php")) {
    wp_register_style('page-full', get_template_directory_uri() . '/css/page-full.css', array(), false, 'all');
    wp_enqueue_style('page-full');
  }

  if (is_page_template("page-center.php")) {
    wp_register_style('page-center', get_template_directory_uri() . '/css/page-center.css', array(), false, 'all');
    wp_enqueue_style('page-center');
  }

  if (is_404()) {
    wp_register_style('404', get_template_directory_uri() . '/css/404.css', array(), false, 'all');
    wp_enqueue_style('404');
  }

  if (is_page_template("index.php")) {
    wp_register_style('index', get_template_directory_uri() . '/css/index.css', array(), false, 'all');
    wp_enqueue_style('index');
  }

  if (is_home()) {
    wp_register_style('home', get_template_directory_uri() . '/css/home.css', array(), false, 'all');
    wp_enqueue_style('home');
  }

  if (is_page_template('page-fluid.php')) {
    wp_register_style('page-fluid', get_template_directory_uri() . '/css/page-fluid.css', array(), false, 'all');
    wp_enqueue_style('page-fluid');
  }
}

add_action('wp_enqueue_scripts', 'load_styles');

function load_scripts() {
  wp_register_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', '', 1, true);
  wp_enqueue_script('bootstrap-js');

  wp_register_script('script', get_template_directory_uri() . '/js/script.js', '', 1, true);
  wp_enqueue_script('script');
}

add_action('wp_enqueue_scripts', 'load_scripts');

function after_setup() {
  add_theme_support('title-tag');
  add_theme_support('menus');
}

add_action('after_setup_theme', 'after_setup');

function mmcsb_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Primary Sidebar', 'mmcsb_first' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<div class="widget-cont">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
  ));

  register_sidebar( array(
    'name'          => __( 'Footer Sidebar', 'mmcsb_first' ),
    'id'            => 'footer-1',
    'before_widget' => '',
    'after_widget'  => '',
    'before_title'  => '',
    'after_title'   => '',
  ));
}

add_action('widgets_init', 'mmcsb_widgets_init' ); 
?>