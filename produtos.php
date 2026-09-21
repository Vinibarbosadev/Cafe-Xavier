<?php
$pageTitle = "Produtos";
$pageDescription = "Conheça os cafés oficiais do Café Xavier. Grãos selecionados, torra de qualidade e o sabor marcante da tradição de Taiobeiras - MG.";
include 'includes/header.php';
?>

<!-- Banner da Página de Produtos -->
<section class="page-header-banner">
  <div class="container">
    <div class="badge-kicker">
      <span class="kicker-dot">•</span>
      <span>LINHA OFICIAL</span>
    </div>
    <h1 class="hero-title">
      Nossos Produtos
    </h1>
    <p class="hero-subtitle">
      Conheça nossa linha de cafés preparados com a qualidade e a tradição do verdadeiro café de Taiobeiras - MG.
    </p>
  </div>
</section>

<!-- Catálogo Estruturado de Produtos -->
<section class="section" style="background-color: var(--color-cream);">
  <div class="container">
    
    <div class="products-catalog-wrapper">
      
      <?php foreach ($SITE_PRODUCTS as $product): ?>
        <!-- Card de Produto Premium Reutilizável -->
        <article class="product-item-card" id="<?php echo htmlspecialchars($product['id']); ?>">
          
          <!-- Fotografia/Ilustração do Produto em Destaque -->
          <div class="product-item-image-wrapper">
            <span class="product-item-badge"><?php echo htmlspecialchars($product['badge']); ?></span>
            <img src="<?php echo htmlspecialchars($product['image']); ?>" alt="<?php echo htmlspecialchars($product['name']); ?> - Embalagem Oficial" class="product-item-img" width="340" height="380" loading="lazy">
          </div>

          <!-- Conteúdo Editorial do Produto -->
          <div class="product-item-content">
            <span class="product-item-kicker">CAFÉ XAVIER</span>
            <h2 class="product-item-title"><?php echo htmlspecialchars($product['name']); ?></h2>
            
            <p class="product-item-description">
              <?php echo htmlspecialchars($product['description']); ?>
            </p>

            <!-- Informações Adicionais -->
            <div class="product-item-info">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
                <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                <polyline points="22 4 12 14.01 9 11.01"></polyline>
              </svg>
              <span><?php echo htmlspecialchars($product['info']); ?></span>
            </div>

            <!-- CTA direto para WhatsApp -->
            <div class="product-item-actions">
              <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>?text=<?php echo urlencode('Olá! Gostaria de encomendar o ' . $product['name']); ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-green btn-touch-target">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
                </svg>
                <span>Pedir pelo WhatsApp</span>
                <span class="arrow-icon" aria-hidden="true">→</span>
              </a>
            </div>

          </div>

        </article>
      <?php endforeach; ?>

    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
