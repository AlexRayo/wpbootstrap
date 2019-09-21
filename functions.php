<?php 
add_theme_support('automatic-feed-links');
add_theme_support( 'title-tag');
add_theme_support('post-thumbnails');
add_image_size('list_articles_thumbs');


register_nav_menus(array(
    'menu_principal'=>'Menú principal de cabecera',
    'menu_footer'=>'Menú de pié de página',
));


//cambia la cantidad de texto del excerpt de 50 caracteres a 15
function wpdocs_custom_excerpt_length( $length ) {
    return 30;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
    
    //esto permite cambiar los [...] que trae [por defecto al final del excerpt]
    function wpdocs_excerpt_more( $more ) {
    return ' ...';
    }
    add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );


// cierra para excerpt


//FUNCION PARA LA PAGINACION DE archive.php
function pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
     if(empty($paged)) $paged = 1;

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div>\n";
     }
}
//ES RECOMENDABLE LINKEAR SCRIPTS EN ESTE ARCHIVO
function yutaru_theme_scripts() {
  wp_enqueue_style( 'style', get_stylesheet_uri() );
  wp_enqueue_style( 'responsive', get_template_directory_uri() . '/responsive.css', array(), '1.1', 'all');
  wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', array ( 'jquery' ), 1.1, true);

/////////////////////////////////////////  
 

}
add_action( 'wp_enqueue_scripts', 'yutaru_theme_scripts' );


 ?>