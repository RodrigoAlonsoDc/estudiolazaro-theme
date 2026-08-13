<?php
/**
 * Template Name: Servicio Personalizado
 * 
 * Plantilla personalizada para las vistas de servicios.
 */

get_header();

// Obtenemos la imagen destacada o usamos una por defecto
$hero_image = get_the_post_thumbnail_url(get_the_ID(), 'full');
if (!$hero_image) {
    $hero_image = 'https://media.istockphoto.com/id/2148674008/es/foto/equipo-exitoso-de-personas-de-negocios-sonriendo-a-la-c%C3%A1mara-en-una-oficina-de-inicio.jpg?s=612x612&w=0&k=20&c=q8HxuJcJrVOPRM63_IZxs719g0pYcd8yhH-bjUdNpnA=';
}
?>

<div class="custom-service-container">
    
    <!-- BANNER HERO -->
    <div class="service-hero" style="background-image: url('<?php echo esc_url($hero_image); ?>');">
        <div class="service-hero-overlay">
            <div class="service-hero-content">
                <h1 class="service-hero-title"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                    <p class="service-hero-subtitle"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <!-- CONTENIDO PRINCIPAL -->
    <div class="service-main-wrap">
        
        <!-- Columna Izquierda: Contenido del Servicio -->
        <div class="service-content-col">
            <span class="service-label">DESCRIPCIÓN DEL SERVICIO</span>
            <h2 class="service-page-title"><?php the_title(); ?></h2>
            <div class="service-divider"></div>
            
            <div class="service-text-area">
                <?php 
                while ( have_posts() ) : the_post();
                    the_content();
                endwhile; 
                ?>
            </div>
        </div>

        <!-- Columna Derecha: Sidebar -->
        <div class="service-sidebar-col">
            
            <!-- Más Servicios -->
            <div class="sidebar-widget">
                <h3 class="widget-title">Más Servicios</h3>
                <ul class="more-services-list">
                    <li><a href="<?php echo home_url('/derecho-inmobiliario/'); ?>">Derecho Inmobiliario</a></li>
                    <li><a href="<?php echo home_url('/asesoria-corporativa/'); ?>">Asesoría Corporativa</a></li>
                    <li><a href="<?php echo home_url('/apoderado-corporativo-externo/'); ?>">Apoderado Corporativo Externo</a></li>
                    <li><a href="<?php echo home_url('/soluciones-inmobiliarias/'); ?>">Soluciones Inmobiliarias</a></li>
                </ul>
            </div>

        </div>
    </div>
</div>

<?php get_footer(); ?>
