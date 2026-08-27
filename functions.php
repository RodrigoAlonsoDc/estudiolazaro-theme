<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

 
if ( !function_exists( 'wpestate_chld_thm_cfg_parent_css' ) ):
    function wpestate_chld_thm_cfg_parent_css() {
        $parent_style = 'wpestate_style'; 
        wp_enqueue_style('bootstrap.min',get_theme_file_uri('/css/bootstrap.min.css'), array(), '1.0', 'all');  
        wp_enqueue_style('bootstrap-theme.min',get_theme_file_uri('/css/bootstrap-theme.min.css'), array(), '1.0', 'all');  
        
        $use_mimify     =   wpresidence_get_option('wp_estate_use_mimify','');
        $mimify_prefix  =   '';
        if($use_mimify==='yes'){
            $mimify_prefix  =   '.min';    
        }
        
        if($mimify_prefix===''){
            wp_enqueue_style($parent_style,get_template_directory_uri().'/style.css', array('bootstrap.min','bootstrap-theme.min'), '1.0', 'all');  
        }else{
            wp_enqueue_style($parent_style,get_template_directory_uri().'/style.min.css', array('bootstrap.min','bootstrap-theme.min'), '1.0', 'all');  
        }
        
        if ( is_rtl() ) {
           wp_enqueue_style( 'chld_thm_cfg_parent-rtl',  trailingslashit( get_template_directory_uri() ). '/rtl.css' );
	}
        wp_enqueue_style( 'wpestate-child-style',
            get_stylesheet_directory_uri() . '/style.css',
                array( $parent_style ),
                wp_get_theme()->get('Version')
        );
        
    }
endif;

load_child_theme_textdomain('wpresidence', get_stylesheet_directory().'/languages');
add_action( 'wp_enqueue_scripts', 'wpestate_chld_thm_cfg_parent_css' );

// --- FIXES SOLICITADOS POR EL USUARIO (Alineacion, Enlaces, Footer) ---
function lazarotheme_custom_fixes_js() {
    ?>
    <style>
        
        /* Global Logo Override */
        .master_header .logo a {
            display: block !important;
            background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/primerayultima.png') !important;
            background-size: contain !important;
            background-repeat: no-repeat !important;
            background-position: left center !important;
            width: 350px !important;
            height: 90px !important;
        }
        .master_header .logo img {
            display: none !important;
        }
        
        /* Global Text Justification for Inner Pages (Más agresivo) */
        .entry-content p, .wpb_wrapper p, #primary p, .post-content p,
        .wpb_text_column .wpb_wrapper,
        .wpb_text_column p,
        .wpb_text_column div,
        .elementor-widget-text-editor .elementor-widget-container,
        .textwidget p,
        .entry-content div,
        .post-content div {
            text-align: justify !important;
        }
        h1, h2, h3, h4, h5, h6 {
            text-align: left !important; /* Mantener los títulos a la izquierda */
        }

        .history-text p, .history-section p, .historia-texto p { 
            text-align: justify !important; 
        }
        .social_youtube, .social_linkedin, a[href*="youtube.com"], a[href*="linkedin.com"], a[href*="youtube"], a[href*="linkedin"] { 
            display: none !important; 
        }
    </style>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // 1. Fix WhatsApp link
            var waLinks = document.querySelectorAll('a[href*="wa.me"], a[href*="whatsapp.com"], a[href*="api.whatsapp"]');
            waLinks.forEach(function(link) {
                link.href = "https://wa.me/51932132104";
            });
            
            // 1.5 Force Text Justification via JS (Bulletproof against CSS caching)
            var paragraphs = document.querySelectorAll('.history-text p, .history-section p, .entry-content p, .wpb_wrapper p, .post-content p, .wpb_text_column p');
            paragraphs.forEach(function(p) {
                p.style.setProperty('text-align', 'justify', 'important');
            });
            
            // 1.6 Fix Instagram link
            var igLinks = document.querySelectorAll('a[href*="instagram.com"], .social_instagram, .fa-instagram');
            igLinks.forEach(function(link) {
                if (link.tagName.toLowerCase() !== 'a') {
                    link = link.closest('a');
                }
                if (link) {
                    link.href = "https://www.instagram.com/lazaro.asociados?fbclid=IwY2xjawTfi65leHRuA2FlbQIxMABicmlkETF0SnA3a1hUMTV0Vno3a01Mc3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHoFeL_QXU7aMBVpyITJ7DTJ4udhjKepfCaFi3Euu-mbgdGx_eAkBIfkMEdvc_aem_BW6tz2NjhF4eGFtDPQ_dCQ";
                }
            });
            
            // 2. Add text under phone number
            var walker = document.createTreeWalker(document.body, NodeFilter.SHOW_TEXT, null, false);
            var node;
            while (node = walker.nextNode()) {
                if (node.nodeValue && node.nodeValue.includes("932 132 104")) {
                    var span = document.createElement("div");
                    span.innerHTML = "<small style='display:block; margin-top:5px; font-size: 13px; opacity: 0.9;'>Atención virtual y presencial previa cita</small>";
                    node.parentNode.insertBefore(span, node.nextSibling);
                    break;
                }
            }
        });
    </script>
    <?php
}
add_action('wp_footer', 'lazarotheme_custom_fixes_js', 100);
