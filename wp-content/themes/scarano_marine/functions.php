<?php
/**
 * Settings Setup.
 */
function settings_setup() {
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses a custom image size for featured images, displayed on "standard" posts.
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 624, 9999 ); // Unlimited height, soft crop

	// This theme uses wp_nav_menu() in one location.
	register_nav_menu( 'primary', __( 'Primary Menu', 'twentytwelve' ) );

	// Preview картинка отзыва
	add_image_size( 'gallery_img', 265, 265, true );

	/* Отключаем админ панель для всех пользователей. */
	show_admin_bar(false);
}
add_action( 'after_setup_theme', 'settings_setup' );
/**
 * Filter the page title.
 */
function theme_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'theme_wp_title', 10, 2 );

// Убрать непонятные ссылки для Windows Live Writer
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');

// Отключить вывод мета тэга "generator"
remove_action('wp_head', 'wp_generator');

// Скрыть версию WordPress
function gb_hide_wp_ver(){
    return '';
}
add_filter('the_generator','gb_hide_wp_ver');

// Пагинатор
function wp_corenavi($loop){
	global $wp_query, $wp_rewrite;
	$pages = '';
	$max = $loop->max_num_pages;
	if (!$current = get_query_var('paged')) $current = 1;
	$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	$a['total'] = $max;
	$a['current'] = $current;

	$total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
	$a['mid_size'] = 2; //сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
	$a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

	if ($max > 1) echo '<div class="navigation">';
	if ($total == 1 && $max > 1) //$pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	echo '<span class="n-body">' . $pages . paginate_links($a) . '</span>';
	if ($max > 1) echo '</div>';
}

function wp_corenavi2(){
	global $wp_query, $wp_rewrite;
	$pages = '';
	$max = $wp_query->max_num_pages;
	if (!$current = get_query_var('paged')) $current = 1;
	$a['base'] = str_replace(999999999, '%#%', get_pagenum_link(999999999));
	$a['total'] = $max;
	$a['current'] = $current;

	$total = 1; //1 - выводить текст "Страница N из N", 0 - не выводить
	$a['mid_size'] = 2; //сколько ссылок показывать слева и справа от текущей
	$a['end_size'] = 1; //сколько ссылок показывать в начале и в конце
	$a['prev_text'] = '&laquo;'; //текст ссылки "Предыдущая страница"
	$a['next_text'] = '&raquo;'; //текст ссылки "Следующая страница"

	if ($max > 1) echo '<div class="navigation">';
	if ($total == 1 && $max > 1) //$pages = '<span class="pages">Страница ' . $current . ' из ' . $max . '</span>'."\r\n";
	echo '<span class="n-body">' . $pages . paginate_links($a) . '</span>';
	if ($max > 1) echo '</div>';
}

// Удаляем переход к подкату
function remove_more_jump_link($link) {
        $offset = strpos($link, '#more-');
        if ($offset) {
                $end = strpos($link, '"',$offset);
        }
        if ($end) {
                $link = substr_replace($link, '', $offset, $end-$offset);
        }
        return $link;
}
add_filter('the_content_more_link', 'remove_more_jump_link');

// Обрезаем текст
function kama_excerpt( $args = '' ){
	global $post;

	$default = array( 'maxchar' => 350, 'text' => '', 'save_format' => false, 'more_text' => 'Learn more >', 'echo' => true, );

	parse_str( $args, $_args );
	$args = array_merge( $default, $_args );
	extract( $args );

	if( ! $text ){
		$text = $post->post_excerpt ? $post->post_excerpt : $post->post_content;

		$text = preg_replace ("~\[/?.*?\]~", '', $text ); // убираем шоткоды, например:[singlepic id=3]

		// для тега <!--more-->
		if( ! $post->post_excerpt && strpos( $post->post_content, '<!--more-->') ){
			preg_match ('~(.*)<!--more-->~s', $text, $match );
			$text = trim( $match[1] );
			$text = str_replace("\r", '', $text );
			$text = preg_replace( "~\n\n+~s", "</p><p>", $text );
			$text = '<p>'. str_replace( "\n", '<br />', $text ) .' <a href="'. get_permalink( $post->ID ) .'#more-'. $post->ID .'">'. $more_text .'</a></p>';

			if( $echo ) return print $text;

			return $text;
		}
		elseif( ! $post->post_excerpt )
			$text = strip_tags( $text, $save_format );
	}

	// Обрезаем
	if ( mb_strlen( $text ) > $maxchar ){
		$text = mb_substr( $text, 0, $maxchar );
		$text = preg_replace('@(.*)\s[^\s]*$@s', '\\1 ...', $text ); // убираем последнее слово, оно 99% неполное
	}

	// Сохраняем переносы строк. Упрощенный аналог wpautop()
	if( $save_format ){
		$text = str_replace("\r", '', $text );
		$text = preg_replace("~\n\n+~", "</p><p>", $text );
		$text = "<p>". str_replace ("\n", "<br />", trim( $text ) ) ."</p>";
	}

	//$out = preg_replace('@\*[a-z0-9-_]{0,15}\*@', '', $out); // удалить *some_name-1* - фильтр сммайлов

	if( $echo ) return print $text;

	return $text;
}

// Дополнительное поле
function s_get_meta_data( $id = 0, $key = 0 ) {
	if( empty($id) or empty($key) ) return false;

	$field_val = get_field($key,$id);
	return ($field_val ? $field_val : '');
}

function theme_scripts() {
	$theme_url = get_template_directory_uri();

	wp_enqueue_script('jquery-ui');

	wp_register_script('google-maps-api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyC0E9hC00QKGqvsKCh1jUXt2w3-eT-bLtU', false, '', true);
	wp_register_script('map-point', $theme_url . '/js/map_point.js', array('jquery'), '', true);
	wp_register_script('jquery-fancybox', $theme_url . '/js/jquery.fancybox.pack.js', array('jquery'), '', true);
	wp_register_script('masonry.pkgd.min', $theme_url . '/js/masonry.pkgd.min.js', array('jquery'), '', true);
	wp_register_script('imagesloaded', $theme_url . '/js/imagesloaded.pkgd.min.js', array('jquery'), '', true);
	wp_register_script('jquery-ui', '//code.jquery.com/ui/1.11.4/jquery-ui.js', array('jquery'), '', true);
	wp_register_script('theme', $theme_url . '/js/theme.js', array('jquery'), '0.0.2', true);
	
	wp_enqueue_script('google-maps-api');
	wp_enqueue_script('map-point');
	wp_enqueue_script('jquery-fancybox');
	wp_enqueue_script('masonry.pkgd.min');
	wp_enqueue_script('imagesloaded');
	wp_enqueue_script('jquery-ui');
	wp_enqueue_script('theme');

	wp_register_style('google-fonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,600,700,800', false);
	wp_register_style('bootstrap-grid', $theme_url . '/css/bootstrap-grid.min.css', false);
	wp_register_style('jquery-fancybox', $theme_url . '/css/jquery.fancybox.css', false);
	wp_register_style('style', $theme_url . '/style.css', false, '0.0.5');

	wp_enqueue_style('google-fonts');
	wp_enqueue_style('bootstrap-grid');
	wp_enqueue_style('jquery-fancybox');
	wp_enqueue_style('style');
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

// remove core updates
function remove_core_updates(){
    global $wp_version;return(object) array('last_checked'=> time(),'version_checked'=> $wp_version,);
}
add_filter('pre_site_transient_update_core','remove_core_updates');
add_filter('pre_site_transient_update_plugins','remove_core_updates');
add_filter('pre_site_transient_update_themes','remove_core_updates');