<?php
/**
 * Plantilla personalizada para la página de inicio (Home)
 * Sobrescribe el diseño por defecto de WP Residence.
 */

$form_message = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['lazaro_contact_submit'])) {
    $name    = sanitize_text_field($_POST['lazaro_name']);
    $email   = sanitize_email($_POST['lazaro_email']);
    $phone   = sanitize_text_field($_POST['lazaro_phone']);
    $message = sanitize_textarea_field($_POST['lazaro_message']);
    
    $to = 'asesora.legal.2020@gmail.com';
    $subject = 'Nuevo mensaje de contacto desde la web';
    $body = "Nombre: $name\nEmail: $email\nTeléfono: $phone\nMensaje:\n$message";
    $headers = array('Content-Type: text/plain; charset=UTF-8', 'From: ' . $email);
    
    if (wp_mail($to, $subject, $body, $headers)) {
        $form_message = '<p class="form-success">¡Mensaje enviado con éxito! Nos pondremos en contacto pronto.</p>';
    } else {
        $form_message = '<p class="form-error">Hubo un error al enviar el mensaje. Inténtalo de nuevo.</p>';
    }
}

get_header();
?>

<div class="custom-home-container">
    <!-- Columna Izquierda: Menú Lateral y Branding -->
    <div class="custom-home-sidebar" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/img_50.jpg');">
        <div class="sidebar-overlay">
            
                        

            <div class="sidebar-menu" style="margin-top: 100px; display: flex; flex-direction: column; gap: 15px;">
                <a href="<?php echo home_url('/derecho-inmobiliario/'); ?>" class="sidebar-btn">DERECHO INMOBILIARIO</a>
                <a href="<?php echo home_url('/asesoria-corporativa/'); ?>" class="sidebar-btn">ASESORÍA CORPORATIVA</a>
                <a href="<?php echo home_url('/apoderado-corporativo-externo/'); ?>" class="sidebar-btn">APODERADO CORPORATIVO EXTERNO</a>
                <a href="<?php echo home_url('/soluciones-inmobiliarias/'); ?>" class="sidebar-btn">SOLUCIONES INMOBILIARIAS</a>
            </div>
<style>
/* --- FORMULARIO DE CONTACTO (SIDEBAR) INLINE --- */
.sidebar-contact-form {
    background: #ffffff;
    padding: 25px;
    border-radius: 5px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
    width: 90%;
    max-width: 400px;
    margin: 30px auto 0 auto; /* Separación con los botones */
    box-sizing: border-box;
    position: relative;
    z-index: 10;
}

.sidebar-contact-form h3 {
    margin-top: 0;
    margin-bottom: 5px;
    font-size: 22px;
    color: #333;
    font-family: inherit;
}

.sidebar-contact-form p {
    font-size: 14px;
    color: #666;
    margin-bottom: 15px;
}

.sidebar-contact-form form {
    display: flex;
    flex-direction: column;
}

.sidebar-contact-form input,
.sidebar-contact-form textarea {
    width: 100%;
    padding: 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 14px;
    font-family: inherit;
    box-sizing: border-box;
    display: block;
}

.sidebar-contact-form button.submit-btn {
    width: 100%;
    background-color: #f05a28;
    color: white;
    border: none;
    padding: 15px;
    font-size: 16px;
    font-weight: bold;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
    display: block;
}

.sidebar-contact-form button.submit-btn:hover {
    background-color: #d0451a;
}
</style>
<div class="sidebar-contact-form">
                <h3>Contáctanos</h3>
                <p>¡Usa el formulario a continuación para contactarnos!</p>
                <?php if(!empty($form_message)) echo $form_message; ?>
                <form action="" method="POST">
                    <input type="text" name="lazaro_name" placeholder="Tu Nombre" required>
                    <input type="email" name="lazaro_email" placeholder="Tu Email" required>
                    <input type="text" name="lazaro_phone" placeholder="Tu Teléfono" required>
                    <textarea name="lazaro_message" placeholder="Escribe tu mensaje..." rows="4" required></textarea>
                    <button type="submit" name="lazaro_contact_submit" class="submit-btn">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Columna Derecha: Contenido Principal y Equipo -->
    <div class="custom-home-main">
        <!-- Banner Superior -->
        <div class="main-hero" style="background-image: url('<?php echo get_stylesheet_directory_uri(); ?>/images/img_49.jpg');">
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
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_3.jpeg" alt="Oficina 1">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_6.jpeg" alt="Oficina 2">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_15.jpeg" alt="Oficina 3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/img_29.jpeg" alt="Oficina 4">
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
                <div class="area-card">
                    <i class="fas fa-book"></i>
                    <h4>DERECHO CIVIL</h4>
                </div>
                <div class="area-card">
                    <i class="fas fa-book"></i>
                    <h4>DERECHO INMOBILIARIO</h4>
                </div>
                <div class="area-card">
                    <i class="fas fa-book"></i>
                    <h4>DERECHO REGISTRAL</h4>
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
