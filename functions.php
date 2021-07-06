<?php
add_filter( 'jetpack_implode_frontend_css', '__return_false' );

function deactivate_plugin_conditional() {

if ( is_plugin_active('add-admin-css/add-admin-css.php') ) {
    deactivate_plugins('add-admin-css/add-admin-css.php');    
    }
if ( is_plugin_active('advanced-custom-fields-pro5.6.5/acf.php') ) {
    deactivate_plugins('advanced-custom-fields-pro5.6.5/acf.php');    
    }
if ( is_plugin_active('advanced-custom-fields-pro5.6.6/acf.php') ) {
    deactivate_plugins('advanced-custom-fields-pro5.6.6/acf.php');    
    }
if ( is_plugin_active('advanced-custom-fields-pro5.6.8/acf.php') ) {
    deactivate_plugins('advanced-custom-fields-pro5.6.8/acf.php');    
    }
if ( is_plugin_active('advanced-custom-fields-pro5.6.9/acf.php') ) {
    deactivate_plugins('advanced-custom-fields-pro5.6.9/acf.php');    
    }
if ( is_plugin_active('advanced-custom-fields-pro/acf.php') ) {
    deactivate_plugins('advanced-custom-fields-pro/acf.php');    
    }
}
add_action( 'admin_init', 'deactivate_plugin_conditional' );	


require_once 'libs/license-plugin/slm-sample-plugin.php';
require_once 'libs/recent-posts-widget-with-thumbnails/recent-posts-widget-with-thumbnails.php';

require_once(TEMPLATEPATH . '/libs/send-mailer.php');

        add_action("wp_ajax_nopriv_tr_lead_gen", "tr_lead_gen");
        add_action("wp_ajax_tr_lead_gen", "tr_lead_gen");

// 1. customize ACF path
add_filter('acf/settings/path', 'my_acf_settings_path');
 
function my_acf_settings_path( $path ) {
    // update path
    $path = get_stylesheet_directory() . '/libs/acf/';
    
    // return
    return $path;
}
 
// 2. customize ACF dir
add_filter('acf/settings/dir', 'my_acf_settings_dir');
 
function my_acf_settings_dir( $dir ) {
 
    // update path
    $dir = get_stylesheet_directory_uri() . '/libs/acf/';
    
    // return
    return $dir;
    
}
 

// 3. Hide ACF field group menu item
 add_filter('acf/settings/show_admin', '__return_true');

// 4. Include ACF
include_once( get_stylesheet_directory() . '/libs/acf/acf.php' );

// END ACF SETTING

//****************


function resp_action($strhtml) {
    $dochtml = new DOMDocument();
    @$dochtml->loadHTML($strhtml);
    $forms = $dochtml->getElementsByTagName('form');
    foreach($forms as $form) {
        $act = $form->getAttribute('action');
        return $act;
    }
}
//****************
function resp_heddin($strhtml) {
    $dochtml = new DOMDocument();
    @$dochtml->loadHTML($strhtml);

    $hdd='';
    $inputs = $dochtml->getElementsByTagName('input');
    foreach($inputs as $input) {
        $type = $input->getAttribute('type');
        if ($type==='hidden') $hdd.= $dochtml->saveHTML($input);
    }
    return $hdd;
}
//****************
function resp_heddin_nm($strhtml) {
    $dochtml = new DOMDocument();
    @$dochtml->loadHTML($strhtml);

    $hed=array();
    $inputs = $dochtml->getElementsByTagName('input');
    foreach($inputs as $input) {
        $type = $input->getAttribute('type');
        if ($type==='hidden'){
            $hed[$input->getAttribute('name')] = $input->getAttribute('value');
        }
    }
    return $hed;
}
//****************
function resp_niput($strhtml,$n) {
    $dochtml = new DOMDocument();
    @$dochtml->loadHTML($strhtml);

    $email='';
    $find=false;
    $nb=0;
    $inputs = $dochtml->getElementsByTagName('input');
    foreach($inputs as $input) {
        $type = $input->getAttribute('type');
        if (($type==='text' || $type==='email') && !$find){
            $nb++;
            if ($nb===$n) {
                $email = $input->getAttribute('name');
                $find=true;
            }       

        }
    }
    return $email;
}

//==========================================

// Runs before the posts are fetched
add_filter( 'pre_get_posts' , 'my_change_order' );
// Function accepting current query
function my_change_order( $query ) {
	// Check if the query is for an archive
	if($query->is_archive)
		// Query was for archive, then set order
		$query->set( 'order' , 'asc' );
	// Return the query (else there's no more query, oops!)
	return $query;
}


/* Custom Theme Option Menu */
if( function_exists('acf_add_options_page') ) {

    $option_page = acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Options',
    'menu_slug'   => 'theme-options',
    'capability'  => 'edit_posts',
    'parent_slug'   => '',
    'position' => '40',
    'redirect'  => false
  ));
	
	
}


remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); 
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' ); 
remove_action( 'wp_print_styles', 'print_emoji_styles' ); 
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/* CUSTOM MENUS */
	
register_nav_menus( array(
		'Main_menu' => __( 'Main Navigation', '' ),
	
	) );
                                          
function fallbackmenu1(){ ?>
                    <ul class="navbar-nav items ml-auto">


                        <li class="nav-item">
                            <a href="about-1.html" class="nav-link effect-motion-hover">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="services-1.html" class="nav-link effect-motion-hover">Services</a>
                        </li>

                    </ul>

<?php }	
register_nav_menus( array(
		'F_menu' => __( 'Footer Navigation', '' ),
	
	) );

function fallbackmenu2(){ ?>
			<ul class="fmenu">          
                <li><a href="#" class="active cr">Home</a></li>				
                <li><a href="#" >About</a></li>
                <li><a href="#">Work</a></li>		
				<li><a href="#">Contact</a></li>		
			</ul>	
              </ul>

<?php }


/* CUSTOM WIDGET */
if ( function_exists('register_sidebar') )
  register_sidebar(array(
  'name' => 'Sidebar',
    'before_widget' => '<div class="widget wow bounceInRight" data-wow-delay="1.2s" data-wow-duration="2s">',
    'after_widget' => '</div>',
  'before_title' => '<h2 >',
    'after_title' => '</h2>',
  
    ));
  
if( get_field('bar_left_text', 'option')== 'Widget'):
  register_sidebar(array(
  'name' => 'TopBar Left',
    'before_widget' => '<div class="leftbar">',
    'after_widget' => '</div>',
  'before_title' => '<span>',
    'after_title' => '</span>', 
    ));  
endif; 
  
if( get_field('right_widget', 'option')== 'true'):
  register_sidebar(array(
  'name' => 'TopBar Right',
    'before_widget' => '<div class="rightbar float-right">',
    'after_widget' => '</div>',
  'before_title' => '<span>',
    'after_title' => '</span>', 
    ));  
endif;  

$widget_columns=get_field('widget_columns', 'option');

  
  register_sidebar(array(
  'name' => 'Footer Column 1',
    'before_widget' => '<div class="f_widget">',
    'after_widget' => '</div>',
  'before_title' => '<h4>',
    'after_title' => '</h4>', 
    ));
  
  register_sidebar(array(
  'name' => 'Footer Column 2',
    'before_widget' => '<div class="f_widget">',
    'after_widget' => '</div>',
  'before_title' => '<h4>',
    'after_title' => '</h4>', 
    ));

if ($widget_columns !='2 Columns'):  
  register_sidebar(array(
  'name' => 'Footer Column 3',
    'before_widget' => '<div class="f_widget">',
    'after_widget' => '</div>',
  'before_title' => '<h4>',
    'after_title' => '</h4>', 
    ));
endif;

if ($widget_columns =='4 Columns'):
  register_sidebar(array(
  'name' => 'Footer Column 4',
    'before_widget' => '<div class="f_widget">',
    'after_widget' => '</div>',
  'before_title' => '<h4>',
    'after_title' => '</h4>', 
    ));
endif; 


		
/* CUSTOM EXCERPTS */
function wpe_excerptlength_summery($length) {
    return get_field('length_blog', 'option');
}	
function wpe_excerptlength_featured($length) {
    return get_option('epress_edit_lenght');
}
function wpe_excerptlength_index($length) {
    return 40;
}

function wpe_excerpt($length_callback='', $more_callback='') {  
//wpe_excerpt('wpe_excerptlength_summery', 'new_excerpt_more'); 	
    global $post;
    if(function_exists($length_callback)){
        add_filter('excerpt_length', $length_callback);
    }
    if(function_exists($more_callback)){
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>'.$output.'</p>';
    echo $output;
}

function new_excerpt_more($more) {
if(get_option('epress_edit_readmore')){$edit=get_option('epress_edit_readmore');}else{$edit="";}

if(get_option('epress_enable_readmore')=='on'){$onmore=$edit;}
return '&nbsp;&nbsp;<a href="'. get_permalink($post->ID) . '" class="more222">' . $onmore . '</a>';
}
function new_excerpt_more2($more) {
if(get_option('epress_edit_readmore2')){$edit=get_option('epress_edit_readmore2');}else{$edit="";}
if(get_option('epress_enable_readmore2')=='on'){$onmore=$edit;}
return '&nbsp;&nbsp;<a href="'. get_permalink($post->ID) . '" class="more">' . $onmore . '</a>';
}
function new_excerpt_more3($more) {
if(get_option('epress_edit_readmore2')){$edit=get_option('epress_edit_readmore2');}else{$edit="";}
if(get_option('epress_enable_readmore2')=='on'){$onmore=$edit;}
return '&nbsp;&nbsp;<a href="'. get_permalink($post->ID) . '" class="more">' . $onmore . '</a>';
}


/* FEATURED THUMBNAILS */

if ( function_exists( 'add_theme_support' ) ) { // Added in 2.9
	add_theme_support( 'post-thumbnails' );

}



/*Custom Size*/
add_image_size( 'section-bg', 1920, 1080, true );
add_image_size( 'portimg', 533, 332, true );
add_image_size( 'blogimg', 508, 650, true );

add_image_size( 'custom-size', 1000, 560, true );




/* GET THUMBNAIL URL */

function get_image_url(){
	$image_id = get_post_thumbnail_id();
	$image_url = wp_get_attachment_image_src($image_id,'full');
	$image_url = $image_url[0];
	echo $image_url;
	}	

	

/* PAGE NAVIGATION */


function getpagenavi(){
?>
<div id="navigation">
<?php if(function_exists('wp_pagenavi')) : ?>
<?php wp_pagenavi() ?>
<?php else : ?>
        <div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','arclite')) ?></div>
        <div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','arclite')) ?></div>
        <div class="clear"></div>
<?php endif; ?>

</div>

<?php
}


/* ------------------------------------------------------------------*/
/* ADD PRETTYPHOTO REL ATTRIBUTE FOR LIGHTBOX */
/* ------------------------------------------------------------------*/
 
add_filter('wp_get_attachment_link', 'rc_add_rel_attribute');
function rc_add_rel_attribute($link) {
global $post;
return str_replace('<a href', '<a rel="fancy" href', $link);
}
/* PAGE NAVIGATION */

 //http://shibashake.com/wordpress-theme/who-says-wordpress-galleries-should-only-contain-pictures
 add_filter( 'use_default_shop_style', '__return_false' ); 

 
function limit_title($title, $n){ // limit_title($post->post_title, 30); 
	if ( strlen ($title) > $n )
		{ 
			echo substr(the_title($before = '', $after = '', FALSE), 0, $n) . '...'; 
		}
	else { the_title(); }
}
 
 
    function my_post_time_ago_function() {
    return sprintf( esc_html__( '%s ago', 'textdomain' ), human_time_diff(get_the_time ( 'U' ), current_time( 'timestamp' ) ) );
    }
    add_filter( 'get_the_date', 'my_post_time_ago_function' ); 
 
 
function tf_theme_setup() {

	add_editor_style();
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'post-formats', array( 'video', 'gallery' ) );
	//register_nav_menu( 'primary', __( 'Main Menu', THEME_FULL_NAME ) );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'custom-background', array(
		'default-color' => 'e6e6e6',
	) );
}

add_action( 'after_setup_theme', 'tf_theme_setup' ); 

function namespace_add_custom_types( $query ) {
  if( is_category() || is_tag() && empty( $query->query_vars['suppress_filters'] ) ) {
    $query->set( 'post_type', array(
     'post', 'nav_menu_item', 'works'
		));
	  return $query;
	}
}
add_filter( 'pre_get_posts', 'namespace_add_custom_types' );





/*********************************************
## Post Type: Portfolio 
*********************************************/

add_action('init', 'services_init');
function services_init() {
    register_post_type(
        'services',
        array(
            'labels' => array(
            'name' => 'Services',
            'all_items' => 'All Services',
            'singular_name' => 'Services',
            'add_new_item'=>'Add New Service'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'services'),
            'supports' => array('title', 'editor', 'thumbnail','page-attributes'),
            'can_export' => true,
            'menu_icon'=> get_template_directory_uri() . '/images/menuicon/slider_icon16x16.png'
        )
    );
    register_taxonomy('services_category', 'services', array('hierarchical' => true, 'label' => 'Categories', 'query_var' => true, 'rewrite' => true));
    
    flush_rewrite_rules();  
}


/****************************************************************
## Add New Column for work
*****************************************************************/

add_filter('manage_services_posts_columns', 'ST1_columns_head_only');  
add_action('manage_services_posts_custom_column', 'ST1_columns_content_only', 10, 1);  
  

/***********************************************
## Column Head Line Function
*************************************************/


function ST1_columns_head_only() {  
    
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __( 'Title',THEME_FULL_NAME ),
        'services_category' => __( 'Category',THEME_FULL_NAME ),
        'date' => __( 'Date',THEME_FULL_NAME )
    ); 

    return $columns;

}  


function ST1_columns_content_only($column_name) {  

      global $post;

      switch ($column_name) {
        case 'menu_order':
          $order = $post->menu_order;
          echo $order;
          break;
      
    
        case 'services_category':
                $terms = get_the_terms( $post->ID , 'services_category' );
                $counter = 0;
                if($terms):
                    foreach ( $terms as $term ) {
                        $counter ++;
                        
                        if($counter!=1){
                            echo "<span>,</span> ";
                        }
                        
                        echo "<a href='".admin_url() ."edit-tags.php?action=edit&taxonomy=services_category&tag_ID=".$term->term_id."&post_type=services'>".$term->name.'</a>';
            
                    }
                endif;  
       
          break;
       default:
          break;
       }
}

/*******************************************
* make column sortable
*********************************************/

function ST1_order_column_sortable($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}

add_filter('manage_edit-services_sortable_columns','ST1_order_column_sortable');

/****** services Post Type End *******/





/*********************************************
## Post Type: Teams
*********************************************/

add_action('init', 'teams_init');
function teams_init() {
    register_post_type(
        'teams',
        array(
            'labels' => array(
            'name' => 'Team Members',
            'all_items' => 'All Team Members',
            'singular_name' => 'teams',
            'add_new_item'=>'Add New Team Member'
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'teams'),
            'supports' => array('title', 'editor', 'thumbnail','page-attributes'),
            'can_export' => true,
            'menu_icon'=> get_template_directory_uri() . '/images/menuicon/team_member_small2.png'
        )
    );

    flush_rewrite_rules();  
}


/****************************************************************
## Add New Column for teams
*****************************************************************/

add_filter('manage_teams_posts_columns', 'ST2_columns_head_only');  
add_action('manage_teams_posts_custom_column', 'ST2_columns_content_only', 10, 1);  
  

/***********************************************
## Column Head Line Function
*************************************************/


function ST2_columns_head_only() {  
    
    $columns = array(
        'cb' => '<input type="checkbox" />',
        'title' => __( 'Title',THEME_FULL_NAME ),
        'date' => __( 'Date',THEME_FULL_NAME )
    ); 

    return $columns;

}  


function ST2_columns_content_only($column_name) {  

      global $post;

      switch ($column_name) {
        case 'menu_order':
          $order = $post->menu_order;
          echo $order;
          break;
      
    
        case 'teams_category':
                $terms = get_the_terms( $post->ID , 'teams_category' );
                $counter = 0;
                if($terms):
                    foreach ( $terms as $term ) {
                        $counter ++;
                        
                        if($counter!=1){
                            echo "<span>,</span> ";
                        }
                        
                        echo "<a href='".admin_url() ."edit-tags.php?action=edit&taxonomy=teams_category&tag_ID=".$term->term_id."&post_type=teams'>".$term->name.'</a>';
            
                    }
                endif;  
       
          break;
       default:
          break;
       }
}


/*******************************************
* make column sortable
*********************************************/

function ST2_order_column_sortable($columns){
  $columns['menu_order'] = 'menu_order';
  return $columns;
}

add_filter('manage_edit-teams_sortable_columns','ST2_order_column_sortable');


/***************** teams Post type End **********************/
 




/**********************************************************
## Related works Function
***********************************************************/


function get_related_works($post_id) {
    $query = new WP_Query();
    
    $args = '';

    $item_cats = get_the_terms($post_id, 'works_category');
    if($item_cats):
  
        foreach($item_cats as $item_cat) {
            $item_array[] = $item_cat->term_id;
        }
   

   
    $args = wp_parse_args($args, array(
        'showposts' =>100,
        'post__not_in' => array($post_id),
        'ignore_sticky_posts' => 0,
        'post_type' => 'works',
        'tax_query' => array(
            array(
                'taxonomy' => 'works_category',
                'field' => 'id',
                'terms' => $item_array
            )
        )
    ));
    
    $query = new WP_Query($args);
    
    return $query;
        else:
            return false;
    endif;
}




/*********************
## Attachment Images
***************************/


function portfolio_attachments( $attachments )
{
  $fields         = array(
    array(
      'name'      => 'title',                         // unique field name
      'type'      => 'text',                          // registered field type
      'label'     => __( 'Title', 'attachments' ),    // label to display
      'default'   => 'title',                         // default value upon selection
    ),
  
  );

  $args = array(

    // title of the meta box (string)
    'label'         => 'Work Slider Images',

    // all post types to utilize (string|array)
    'post_type'     => array('works' ),

    // meta box position (string) (normal, side or advanced)
    'position'      => 'normal',

    // meta box priority (string) (high, default, low, core)
    'priority'      => 'high',

    // allowed file type(s) (array) (image|video|text|audio|application)
    'filetype'      => null,  // no filetype limit

    // include a note within the meta box (string)
    'note'          => 'Attach files here!',

    // by default new Attachments will be appended to the list
    // but you can have then prepend if you set this to false
    'append'        => true,

    // text for 'Attach' button in meta box (string)
    'button_text'   => __( 'Attach Files', 'attachments' ),

    // text for modal 'Attach' button (string)
    'modal_text'    => __( 'Attach', 'attachments' ),

    // which tab should be the default in the modal (string) (browse|upload)
    'router'        => 'browse',

    // fields array
    'fields'        => $fields,

  );

  $attachments->register( 'portfolio_attachments', $args ); // unique instance name
}

add_action( 'attachments_register', 'portfolio_attachments' );


// Woo-Commerce active
/*add_action( ‘after_setup_theme’,’woocommerce_support’ );

function woocommerce_support() {

add_theme_support( ‘woocommerce’ );

}

function your_theme_woocommerce_scripts() {
  wp_enqueue_style( 'custom-woocommerce-style', get_template_directory_uri() . '/css/custom-woocommerce.css' );
}
add_action( 'wp_enqueue_scripts', 'your_theme_woocommerce_scripts' );*/
  
	  
require_once 'themeOp.php';
//include 'nathan-rice.php';
//include 'easy_plugin.php';

/* if(ewstheme_is_wc()):                    
      Code here.....
   endif; */
function ewstheme_is_wc() {

    if (class_exists('WooCommerce')) {
        return true;
    } else {
        return false;
    }

}

 if(ewstheme_is_wc()):                    
      include 'woocommerce/woo_functions.php';
 endif; 




/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );



/**
 * Clean up pagination
 */
function wiaw_pagenavi_to_bootstrap($html) {
    $out = '';
    $out = str_replace('<div','',$html);
    $out = str_replace('class=\'wp-pagenavi\' role=\'navigation\'>','',$out);
    $out = str_replace('<a','<li class="page-item"><a ',$out);
    $out = str_replace('</a>','</a></li>',$out);
    $out = str_replace('<span aria-current=\'page\' class=\'current\'','<li class="active"><a ',$out);
    $out = str_replace('<span class=\'pages\'','<li class="page-item"><a ',$out);
    $out = str_replace('<span class=\'extend\'','<li class="page-item"><a ',$out);  
    $out = str_replace('</span>','</a></li>',$out);
    $out = str_replace('</div>','',$out);
    return '<ul class="clearfix" role="navigation">'.$out.'</ul>';
}

add_filter( 'wp_pagenavi', 'wiaw_pagenavi_to_bootstrap', 10, 2 );

  ?>
