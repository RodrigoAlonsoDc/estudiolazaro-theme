<?php
/**
 * Plantilla personalizada para la página de inicio (Home)
 * Sobrescribe el diseño por defecto de WP Residence.
 */

get_header();
?>

<div class="custom-home-container">
    <!-- Columna Izquierda: Menú Lateral y Branding -->
    <div class="custom-home-sidebar" style="background-image: url('https://thumbs.dreamstime.com/b/oficina-azul-y-naranja-con-biblioteca-interior-de-exterior-luminosa-paredes-blancas-azules-naranjas-suelo-hormig%C3%B3n-modernas-164672201.jpg');">
        <div class="sidebar-overlay">
            <div class="sidebar-branding">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/6e057407-94ba-4825-a3c2-db0f47322d46.jpg" alt="Estudio Lázaro Logo" class="sidebar-logo">
            </div>
            <div class="sidebar-menu">
                <a href="<?php echo home_url('/derecho-inmobiliario/'); ?>" class="sidebar-btn">DERECHO INMOBILIARIO</a>
                <a href="<?php echo home_url('/asesoria-corporativa/'); ?>" class="sidebar-btn">ASESORÍA CORPORATIVA</a>
                <a href="<?php echo home_url('/apoderado-corporativo-externo/'); ?>" class="sidebar-btn">APODERADO CORPORATIVO EXTERNO</a>
                <a href="<?php echo home_url('/soluciones-inmobiliarias/'); ?>" class="sidebar-btn">SOLUCIONES INMOBILIARIAS</a>
            </div>
        </div>
    </div>

    <!-- Columna Derecha: Contenido Principal y Equipo -->
    <div class="custom-home-main">
        <!-- Banner Superior -->
        <div class="main-hero" style="background-image: url('https://media.istockphoto.com/id/2148674008/es/foto/equipo-exitoso-de-personas-de-negocios-sonriendo-a-la-c%C3%A1mara-en-una-oficina-de-inicio.jpg?s=612x612&w=0&k=20&c=q8HxuJcJrVOPRM63_IZxs719g0pYcd8yhH-bjUdNpnA=');">
            <div class="hero-overlay">
                <p class="hero-subtitle">Soluciones legales, corporativas e inmobiliarias con enfoque preventivo y estratégico.</p>
                <h2 class="hero-title">Seguridad jurídica para proteger tu patrimonio y hacer crecer tus negocios.</h2>
            </div>
        </div>

        <!-- Sección Historia -->
        <div class="history-section">
            <div class="history-text">
                <span class="history-label">Historia</span>
                <h2 class="history-title">¿Quiénes somos?</h2>
                
                <p>Estudio Lázaro nace de la intención de brindar un remedio a los diferentes conflictos inmobiliarios, por ello ofrece servicios de administración de edificios, inversiones inmobiliarias y soluciones hipotecarias.</p>
                
                <p>Contamos con la vocación de aportar valor a nuestros clientes con un servicio personalizado de máxima calidad, con la finalidad de ayudar en una de las operaciones más importantes en la vida de una persona: la compra o venta de su casa.</p>
                
                <p>Nos comprometemos a cuidar el patrimonio de nuestros clientes, a trabajar con profesionalidad, ética y transparencia, y a aportar la confianza necesaria para poder facilitar la trasmisión de su hogar o la administración del mismo.</p>
                
                <ul class="history-list">
                    <li><i class="far fa-circle"></i> Equipo Multidisciplinario</li>
                    <li><i class="far fa-circle"></i> Amplia Experiencia</li>
                    <li><i class="far fa-circle"></i> Sólida Formación Académica</li>
                    <li><i class="far fa-circle"></i> Cercanía y Confianza</li>
                </ul>
            </div>
            
            <div class="history-gallery-2x2">
                <img src="https://www.shutterstock.com/image-photo/confident-filipino-woman-wearing-white-260nw-2701913573.jpg" alt="Oficina 1">
                <img src="https://media.istockphoto.com/id/1325566034/es/foto/los-empresarios-que-utilizan-la-tableta-digital-planifican-el-proyecto-de-puesta-en-marcha.jpg?s=612x612&w=0&k=20&c=3F17UMpIFNdsehdeWVbH4vyjNvZ5Wn9HAq6ntBKGcRg=" alt="Oficina 2">
                <img src="https://img.magnific.com/foto-gratis/equipo-trabajando-juntos-proyecto_23-2149325423.jpg?semt=ais_test_b&w=740&q=80" alt="Oficina 3">
                <img src="https://media.istockphoto.com/id/2148674008/es/foto/equipo-exitoso-de-personas-de-negocios-sonriendo-a-la-c%C3%A1mara-en-una-oficina-de-inicio.jpg?s=612x612&w=0&k=20&c=q8HxuJcJrVOPRM63_IZxs719g0pYcd8yhH-bjUdNpnA=" alt="Oficina 4">
            </div>
        </div>

        <!-- Sección Estadísticas -->
        <div class="stats-section">
            <div class="stat-item">
                <h3>+10</h3>
                <p>Más de 10 años de experiencia</p>
            </div>
            <div class="stat-item">
                <h3>+80</h3>
                <p>Clientes satisfechos</p>
            </div>
            <div class="stat-item">
                <h3>+15</h3>
                <p>Número de colaboradores</p>
            </div>
        </div>

        <!-- Sección Áreas de Trabajo -->
        <div class="areas-section">
            <h2 class="areas-title">ÁREAS DE TRABAJO</h2>
            <div class="areas-grid">
                <div class="area-card">
                    <i class="fas fa-book"></i>
                    <h4>DERECHO CORPORATIVO</h4>
                </div>
                <div class="area-card">
                    <i class="fas fa-book"></i>
                    <h4>DERECHO ADMINISTRATIVO</h4>
                </div>
                <div class="area-card">
                    <i class="fas fa-book"></i>
                    <h4>LABORAL Y SEGURIDAD SOCIAL</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- TEST DE DESPLIEGUE AUTOMÁTICO DESDE GITHUB -->
<script>
    console.log("¡Despliegue automático exitoso desde GitHub a cPanel!");
</script>
<?php
get_footer();
?>
