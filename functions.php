<?php
/*
 * This is the child theme for Total theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */
add_action( 'wp_enqueue_scripts', 'diploms197_enqueue_styles' );
function diploms197_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'bootstrap-theme', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array('parent-style'));
    wp_enqueue_style( 'font-icons', get_stylesheet_directory_uri() . '/assets/css/font-icons.css', array('parent-style'));
    wp_enqueue_style( 'theme-style', get_stylesheet_directory_uri() . '/assets/css/theme-style.css', array('parent-style'));
    wp_enqueue_style( 'theme-style-color', get_stylesheet_directory_uri() . '/assets/css/cyan.css', array('parent-style'));
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

    wp_enqueue_script('bootstrap-theme', get_stylesheet_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('flickity-js', get_stylesheet_directory_uri() . '/assets/js/flickity.pkgd.min.js', array('jquery'), false, true);
    wp_enqueue_script('easing-js', get_stylesheet_directory_uri() . '/assets/js/easing.min.js', array('jquery'), false, true);
    wp_enqueue_script('owl-carousel-js', get_stylesheet_directory_uri() . '/assets/js/owl-carousel.min.js', array('jquery'), false, true);
    wp_enqueue_script('modernizr-js', get_stylesheet_directory_uri() . '/assets/js/modernizr.min.js', array('jquery'), false, true);
    wp_enqueue_script('scripts-js', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array('jquery'), false, true);
}
/*
 * Your code goes below
 */

//  Actions
add_action( 'widgets_init', 'cust_widgets' );


// Some weare
function cust_widgets(){
    register_sidebar([
        'name' => 'Виджет для размещения копирайта',
        'id' => 'cust_footer_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 1',
        'id' => 'cust_sidebar_1',
        'before_widget' => null,
        'after_widget' => null,
    ]);
    register_sidebar([
        'name' => 'Сайдбар блок 2',
        'id' => 'cust_sidebar_2',
		'before_widget' => '<aside id="%1$s" class="footer-widget widget widget__custom-block %2$s clr">',
		'after_widget'  => '</aside>',
		'before_title'  => '<p class="widget-title">',
		'after_title'   => '</p>',
    ]);
}

//Shortcods
add_shortcode( 'si-section-action', 'si_section_action' );
function si_section_action( $attr ){
    $params = shortcode_atts([
        'text' => '',
    ], $attr);

    return '<section class="section actions-posts mt-40 mb-0" style="background: url(https://diploms-197.com/wp-content/themes/diploms197/assets/img/content-action-bg.jpg); background-repeat: no-repeat;">
    <div class="content-action">
      <div class="content-action-title">Акции и скидки, доступные на нашем сайте:</div>
      <div class="content-action-container">
        <div class="content-action-item">Именинники получают скидку на 1000 рублей при заказе любого документа. Акция действует как в день рождения, так и за 3 дня до и после означенной даты.</div>
        <div class="content-action-item">При покупке двух и более документов за один заказ - скидка 2000 рублей, действующая для каждого документа в заказе.</div>
        <div class="content-action-item">Для постоянных клиентов, обращающихся в нашу компанию, мы предоставляем скидку в 2000 рублей на повторный заказ.</div>
      </div>
    </div>
  </section>';
}