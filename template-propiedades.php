<?php
/**
 * Template Name: Propiedades Disponibles
 * 
 * Plantilla personalizada para el listado de propiedades inmobiliarias.
 * Muestra propiedades con filtros, vista lista/cuadrícula y paginación.
 * 
 * USO: En WordPress Admin → Páginas → Añadir nueva → Seleccionar plantilla "Propiedades Disponibles"
 * 
 * TODO: Cuando se carguen propiedades reales, reemplazar el array $propiedades
 *       por un WP_Query al CPT 'estate_property' del tema padre WP Residence.
 */

get_header();

// ============================================================
// DATOS DE EJEMPLO
// Reemplazar con WP_Query a 'estate_property' cuando las
// propiedades reales estén cargadas en WordPress.
// ============================================================
$propiedades = array(
    array(
        'titulo'       => 'Departamento en Miraflores – 114 m²',
        'precio'       => 318000,
        'precio_fmt'   => '$318,000',
        'descripcion'  => 'Edificio Parque Mar · Av. José Pardo N°1580 Torre B. Departamento 801. Se encuentra en el distrito más exclusivo de Lima con vista al mar y acabados de primera calidad.',
        'ubicacion'    => 'Miraflores, Lima',
        'habitaciones' => 3,
        'banos'        => 3,
        'area'         => 114,
        'fotos'        => 18,
        'estado'       => 'En Venta',
        'condicion'    => 'Excelente Estado',
        'destacado'    => false,
        'imagen'       => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=600&h=400&fit=crop',
        'tipo'         => 'departamento',
        'ciudad'       => 'lima',
        'tipo_estado'  => 'venta',
    ),
    array(
        'titulo'       => 'Casa de playa en Vichayito – Piura',
        'precio'       => 215000,
        'precio_fmt'   => '$215,000',
        'descripcion'  => 'Casa de playa con aire acondicionado en Condominio privado Vive Vichayito. Un paraíso norteño con acceso directo al mar, piscina y áreas comunes de primera.',
        'ubicacion'    => 'Vichayito, Piura',
        'habitaciones' => 2,
        'banos'        => 2,
        'area'         => 130,
        'fotos'        => 20,
        'estado'       => 'En Venta',
        'condicion'    => 'Excelente Estado',
        'destacado'    => true,
        'imagen'       => 'https://images.unsplash.com/photo-1499793983690-e29da59ef1c2?w=600&h=400&fit=crop',
        'tipo'         => 'casa',
        'ciudad'       => 'piura',
        'tipo_estado'  => 'venta',
    ),
    array(
        'titulo'       => 'Departamento en San Isidro con cochera',
        'precio'       => 245000,
        'precio_fmt'   => '$245,000',
        'descripcion'  => 'Moderno departamento ubicado en zona financiera de San Isidro. Incluye cochera techada, depósito y acceso a gimnasio. Cerca de centros empresariales y parques.',
        'ubicacion'    => 'San Isidro, Lima',
        'habitaciones' => 2,
        'banos'        => 2,
        'area'         => 95,
        'fotos'        => 12,
        'estado'       => 'En Venta',
        'condicion'    => 'Bien Conservado',
        'destacado'    => false,
        'imagen'       => 'https://images.unsplash.com/photo-1502672260266-1c1ef2d93688?w=600&h=400&fit=crop',
        'tipo'         => 'departamento',
        'ciudad'       => 'lima',
        'tipo_estado'  => 'venta',
    ),
    array(
        'titulo'       => 'Oficina Premium en San Borja – 85 m²',
        'precio'       => 1200,
        'precio_fmt'   => '$1,200/mes',
        'descripcion'  => 'Oficina completamente implementada con divisiones modulares, aire acondicionado centralizado y estacionamiento para visitas. Ideal para estudios jurídicos o consultoras.',
        'ubicacion'    => 'San Borja, Lima',
        'habitaciones' => 0,
        'banos'        => 1,
        'area'         => 85,
        'fotos'        => 8,
        'estado'       => 'En Alquiler',
        'condicion'    => 'Excelente Estado',
        'destacado'    => false,
        'imagen'       => 'https://images.unsplash.com/photo-1497366216548-37526070297c?w=600&h=400&fit=crop',
        'tipo'         => 'oficina',
        'ciudad'       => 'lima',
        'tipo_estado'  => 'alquiler',
    ),
    array(
        'titulo'       => 'Casa en La Molina – 250 m²',
        'precio'       => 420000,
        'precio_fmt'   => '$420,000',
        'descripcion'  => 'Amplia casa familiar en zona residencial de La Molina. Cuenta con jardín privado, terraza, sala de estar independiente y cochera doble. Acabados de lujo y seguridad 24h.',
        'ubicacion'    => 'La Molina, Lima',
        'habitaciones' => 4,
        'banos'        => 3,
        'area'         => 250,
        'fotos'        => 24,
        'estado'       => 'En Venta',
        'condicion'    => 'Estreno',
        'destacado'    => true,
        'imagen'       => 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?w=600&h=400&fit=crop',
        'tipo'         => 'casa',
        'ciudad'       => 'lima',
        'tipo_estado'  => 'venta',
    ),
    array(
        'titulo'       => 'Penthouse en Barranco – 180 m²',
        'precio'       => 385000,
        'precio_fmt'   => '$385,000',
        'descripcion'  => 'Espectacular penthouse con terraza panorámica en el corazón de Barranco. Vista al malecón, acabados minimalistas, cocina equipada y estacionamiento doble en sótano.',
        'ubicacion'    => 'Barranco, Lima',
        'habitaciones' => 3,
        'banos'        => 3,
        'area'         => 180,
        'fotos'        => 15,
        'estado'       => 'En Venta',
        'condicion'    => 'Excelente Estado',
        'destacado'    => false,
        'imagen'       => 'https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?w=600&h=400&fit=crop',
        'tipo'         => 'departamento',
        'ciudad'       => 'lima',
        'tipo_estado'  => 'venta',
    ),
);
?>

<div class="custom-properties-container">

    <!-- ==================== HERO BANNER ==================== -->
    <div class="properties-hero" style="background-image: url('https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=1920&h=600&fit=crop');">
        <div class="properties-hero-overlay">
            <p class="properties-hero-label">Estudio Lázaro · Soluciones Inmobiliarias</p>
            <h1 class="properties-hero-title">Propiedades Disponibles</h1>
            <p class="properties-hero-subtitle">Encuentra tu próximo hogar o inversión inmobiliaria con el respaldo de nuestro equipo legal</p>
        </div>
    </div>

    <!-- ==================== CONTENIDO PRINCIPAL ==================== -->
    <div class="properties-main-wrap">

        <!-- Breadcrumbs -->
        <nav class="properties-breadcrumbs">
            <a href="<?php echo home_url('/'); ?>">Inicio</a>
            <span class="breadcrumb-sep">›</span>
            <span class="breadcrumb-current">Propiedades Disponibles</span>
        </nav>

        <!-- Título de página -->
        <h2 class="properties-page-title">Propiedades Disponibles</h2>

        <!-- ==================== BARRA DE FILTROS ==================== -->
        <div class="properties-filter-bar">
            <div class="filters-row">
                <div class="filter-group">
                    <select class="filter-select" id="filter-tipo">
                        <option value="">Tipos</option>
                        <option value="departamento">Departamento</option>
                        <option value="casa">Casa</option>
                        <option value="oficina">Oficina</option>
                        <option value="terreno">Terreno</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select class="filter-select" id="filter-estado">
                        <option value="">Estados</option>
                        <option value="venta">En Venta</option>
                        <option value="alquiler">En Alquiler</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select class="filter-select" id="filter-ciudad">
                        <option value="">Ciudades</option>
                        <option value="lima">Lima</option>
                        <option value="piura">Piura</option>
                    </select>
                </div>
                <div class="filter-group">
                    <select class="filter-select" id="filter-precio">
                        <option value="">Precio</option>
                        <option value="bajo-alto">Precio Bajo a Alto</option>
                        <option value="alto-bajo">Precio Alto a Bajo</option>
                    </select>
                </div>
                <div class="filter-actions">
                    <button class="filter-btn-search" id="filter-btn-search" type="button">
                        <i class="fas fa-search"></i> Buscar
                    </button>
                    <button class="filter-btn-clear" id="filter-btn-clear" type="button">
                        Limpiar
                    </button>
                </div>
            </div>
            <div class="view-toggle">
                <button class="view-btn view-btn-grid" id="view-grid" title="Vista cuadrícula" type="button">
                    <i class="fas fa-th-large"></i>
                </button>
                <button class="view-btn view-btn-list active" id="view-list" title="Vista lista" type="button">
                    <i class="fas fa-bars"></i>
                </button>
            </div>
        </div>

        <!-- Contador de resultados -->
        <div class="properties-results-count">
            <span id="results-count"><?php echo count($propiedades); ?></span> propiedades encontradas
        </div>

        <!-- ==================== LISTADO DE PROPIEDADES ==================== -->
        <div class="properties-list list-view" id="properties-list">

            <?php foreach ($propiedades as $prop) : ?>
            <article class="property-card" 
                     data-tipo="<?php echo esc_attr($prop['tipo']); ?>"
                     data-ciudad="<?php echo esc_attr($prop['ciudad']); ?>"
                     data-estado="<?php echo esc_attr($prop['tipo_estado']); ?>"
                     data-precio="<?php echo esc_attr($prop['precio']); ?>">

                <!-- Imagen de la propiedad -->
                <div class="property-card-image">
                    <img src="<?php echo esc_url($prop['imagen']); ?>" 
                         alt="<?php echo esc_attr($prop['titulo']); ?>"
                         loading="lazy">

                    <!-- Badges -->
                    <div class="property-card-badges">
                        <?php if ($prop['destacado']) : ?>
                            <span class="prop-badge badge-destacado">Destacado</span>
                        <?php endif; ?>
                        <span class="prop-badge badge-<?php echo esc_attr($prop['tipo_estado']); ?>">
                            <?php echo esc_html($prop['estado']); ?>
                        </span>
                        <span class="prop-badge badge-condicion">
                            <?php echo esc_html($prop['condicion']); ?>
                        </span>
                    </div>

                    <!-- Ubicación sobre la imagen -->
                    <div class="property-card-location">
                        <i class="fas fa-map-marker-alt"></i>
                        <?php echo esc_html($prop['ubicacion']); ?>
                    </div>

                    <!-- Contador de fotos -->
                    <div class="property-card-photo-count">
                        <i class="fas fa-camera"></i>
                        <?php echo intval($prop['fotos']); ?>
                    </div>
                </div>

                <!-- Información de la propiedad -->
                <div class="property-card-info">
                    <h3 class="property-card-title">
                        <a href="#"><?php echo esc_html($prop['titulo']); ?></a>
                    </h3>

                    <div class="property-card-price">
                        <?php echo esc_html($prop['precio_fmt']); ?>
                    </div>

                    <p class="property-card-description">
                        <?php echo esc_html($prop['descripcion']); ?>
                    </p>

                    <div class="property-card-amenities">
                        <?php if ($prop['habitaciones'] > 0) : ?>
                        <span class="amenity" title="Habitaciones">
                            <i class="fas fa-bed"></i> <?php echo intval($prop['habitaciones']); ?>
                        </span>
                        <?php endif; ?>
                        <span class="amenity" title="Baños">
                            <i class="fas fa-bath"></i> <?php echo intval($prop['banos']); ?>
                        </span>
                        <span class="amenity" title="Área">
                            <i class="fas fa-ruler-combined"></i> <?php echo intval($prop['area']); ?> m²
                        </span>
                    </div>

                    <div class="property-card-actions">
                        <button class="action-btn" title="Compartir" type="button">
                            <i class="fas fa-share-alt"></i>
                        </button>
                        <button class="action-btn" title="Favorito" type="button">
                            <i class="far fa-heart"></i>
                        </button>
                        <button class="action-btn" title="Comparar" type="button">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>
            </article>
            <?php endforeach; ?>

        </div>

        <!-- ==================== SIN RESULTADOS ==================== -->
        <div class="properties-no-results" id="no-results" style="display: none;">
            <i class="fas fa-search"></i>
            <h3>No se encontraron propiedades</h3>
            <p>Intenta ajustar los filtros de búsqueda para encontrar más resultados.</p>
        </div>

        <!-- ==================== PAGINACIÓN ==================== -->
        <nav class="properties-pagination">
            <a href="#" class="page-link active">1</a>
            <a href="#" class="page-link">2</a>
            <a href="#" class="page-link">3</a>
            <a href="#" class="page-link next-link">Siguiente <i class="fas fa-chevron-right"></i></a>
        </nav>

    </div>
</div>

<!-- ==================== JAVASCRIPT: FILTROS Y VISTA ==================== -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var filterTipo   = document.getElementById('filter-tipo');
    var filterEstado = document.getElementById('filter-estado');
    var filterCiudad = document.getElementById('filter-ciudad');
    var filterPrecio = document.getElementById('filter-precio');
    var btnSearch    = document.getElementById('filter-btn-search');
    var btnClear     = document.getElementById('filter-btn-clear');
    var viewGrid     = document.getElementById('view-grid');
    var viewList     = document.getElementById('view-list');
    var listContainer = document.getElementById('properties-list');
    var noResults    = document.getElementById('no-results');
    var resultsCount = document.getElementById('results-count');
    var cards        = document.querySelectorAll('.property-card');

    /* --- FILTRAR --- */
    function applyFilters() {
        var tipo   = filterTipo.value;
        var estado = filterEstado.value;
        var ciudad = filterCiudad.value;
        var visible = 0;

        cards.forEach(function(card) {
            var show = true;
            if (tipo   && card.getAttribute('data-tipo')   !== tipo)   show = false;
            if (estado && card.getAttribute('data-estado') !== estado) show = false;
            if (ciudad && card.getAttribute('data-ciudad') !== ciudad) show = false;

            card.style.display = show ? '' : 'none';
            if (show) visible++;
        });

        resultsCount.textContent = visible;
        noResults.style.display = visible === 0 ? 'flex' : 'none';
        listContainer.style.display = visible === 0 ? 'none' : '';
    }

    /* --- ORDENAR POR PRECIO --- */
    function sortByPrice(order) {
        if (!order) return;
        var cardsArray = Array.prototype.slice.call(cards);
        cardsArray.sort(function(a, b) {
            var priceA = parseInt(a.getAttribute('data-precio'), 10);
            var priceB = parseInt(b.getAttribute('data-precio'), 10);
            return order === 'alto-bajo' ? priceB - priceA : priceA - priceB;
        });
        cardsArray.forEach(function(card) {
            listContainer.appendChild(card);
        });
    }

    /* --- EVENTOS --- */
    btnSearch.addEventListener('click', function() {
        applyFilters();
        sortByPrice(filterPrecio.value);
    });

    btnClear.addEventListener('click', function() {
        filterTipo.value   = '';
        filterEstado.value = '';
        filterCiudad.value = '';
        filterPrecio.value = '';
        cards.forEach(function(card) {
            card.style.display = '';
        });
        resultsCount.textContent = cards.length;
        noResults.style.display = 'none';
        listContainer.style.display = '';
    });

    /* --- TOGGLE VISTA --- */
    viewGrid.addEventListener('click', function() {
        listContainer.classList.remove('list-view');
        listContainer.classList.add('grid-view');
        viewGrid.classList.add('active');
        viewList.classList.remove('active');
    });

    viewList.addEventListener('click', function() {
        listContainer.classList.remove('grid-view');
        listContainer.classList.add('list-view');
        viewList.classList.add('active');
        viewGrid.classList.remove('active');
    });
});
</script>

<?php get_footer(); ?>
