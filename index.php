<?php
$pageTitle = "Café Especial com Sabor de Tradição";
$pageDescription = "Café Xavier em Taiobeiras - MG. Grãos selecionados, torra de qualidade e o verdadeiro sabor do café tradicional de Minas Gerais.";
include 'includes/header.php';
?>

<!-- 1. HERO SECTION CINEMATOGRÁFICO -->
<section class="hero-section" id="hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="container hero-container">
    
    <!-- Lado Esquerdo: Conteúdo Editorial -->
    <div class="hero-content">
      <div class="badge-kicker hero-kicker">
        <span class="kicker-dot" aria-hidden="true">•</span>
        <span>CAFÉ XAVIER</span>
      </div>
      
      <h1 class="hero-title">
        Café especial<br>
        com sabor de<br>
        tradição.
      </h1>
      
      <p class="hero-subtitle">
        Grãos selecionados, torra de qualidade e o verdadeiro sabor de Minas Gerais.
      </p>
      
      <div class="hero-ctas">
        <a href="#nosso-cafe" class="btn btn-hero-primary">
          <span>Conheça o nosso café</span>
          <span class="arrow-icon" aria-hidden="true">→</span>
        </a>
        <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-hero-secondary">
          <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
          </svg>
          <span>Pedir pelo WhatsApp</span>
        </a>
      </div>

      <div class="hero-location-tag">
        <svg width="15" height="15" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
        </svg>
        <span>Taiobeiras - MG</span>
      </div>
    </div>

  </div>
</section>

<!-- 2. HIGHLIGHTS BAR (4 COLUNAS) -->
<section class="highlights-bar" aria-label="Diferenciais do Café Xavier">
  <div class="container">
    <h2 class="sr-only">Nossos Diferenciais de Qualidade</h2>
    <div class="highlights-grid">
      
      <div class="highlight-item">
        <svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <ellipse cx="12" cy="12" rx="6" ry="9" transform="rotate(25 12 12)"/>
          <path d="M 10,5 Q 14,12 10,19"/>
        </svg>
        <h3 class="highlight-title">Grãos Selecionados</h3>
        <p class="highlight-desc">Qualidade em cada detalhe</p>
      </div>

      <div class="highlight-item">
        <svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M12 2c0 0-6 4-6 10 0 3.3 2.7 6 6 6s6-2.7 6-6c0-6-6-10-6-10z"/>
          <path d="M12 18c0 0-2-1.5-2-3.5 0-1.1.9-2 2-2s2 .9 2 2c0 2-2 3.5-2 3.5z"/>
        </svg>
        <h3 class="highlight-title">Torra de Qualidade</h3>
        <p class="highlight-desc">Sabor e aroma incomparáveis</p>
      </div>

      <div class="highlight-item">
        <svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M12 22C12 22 20 18 20 12V5L12 2L4 5V12C4 18 12 22 12 22Z"/>
          <path d="M12 8V16"/>
          <path d="M8 12H16"/>
        </svg>
        <h3 class="highlight-title">Tradição</h3>
        <p class="highlight-desc">Qualidade e respeito</p>
      </div>

      <div class="highlight-item">
        <svg class="highlight-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
          <path d="M12 21C16 17.5 19 14 19 10C19 6.13401 15.866 3 12 3C8.13401 3 5 6.13401 5 10C5 14 8 17.5 12 21Z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
        <h3 class="highlight-title"><?php echo SITE_CITY; ?> - <?php echo SITE_UF; ?></h3>
        <p class="highlight-desc">Nossa terra, nosso café</p>
      </div>

    </div>
  </div>
</section>

<!-- 3. SECTION: NOSSO CAFÉ / PRODUTOS (LAYOUT EDITORIAL) -->
<section id="nosso-cafe" class="nosso-cafe-section section">
  <div class="container">
    
    <div class="nosso-cafe-grid">
      <div class="story-photo-card image-wrapper">
        <img src="assets/img/cafe/spoon-beans.jpeg" alt="Seleção de grãos de café de alta qualidade em colher rústica de madeira" width="540" height="400" loading="lazy">
        <div class="photo-card-caption">
          <span class="caption-label">Origem &amp; Seleção</span>
        </div>
      </div>

      <div class="nosso-cafe-content">
        <div class="section-label section-label-dark">
          <span class="kicker-dot">•</span>
          <span>NOSSO CAFÉ</span>
        </div>
        
        <h2 class="section-title">Um café que começa na escolha dos grãos.</h2>
        
        <p class="section-description">
          No Café Xavier, cada etapa é pensada para entregar um café especial, com sabor marcante e a qualidade que você já conhece e confia.
        </p>

        <a href="produtos.php" class="btn btn-dark">
          <span>Ver nossos produtos</span>
          <span class="arrow-icon" aria-hidden="true">→</span>
        </a>
      </div>
    </div>

    <!-- Vitrine de Produtos Confirmados -->
    <div class="products-carousel-wrapper">
      <div class="products-header">
        <span class="products-header-subtitle">PRODUTO OFICIAL</span>
        <h3 class="products-header-title">Café Xavier — Torrado e Moído</h3>
        <div class="products-header-line"></div>
      </div>

      <div class="products-showcase-single">
        <?php foreach ($SITE_PRODUCTS as $product): ?>
          <div class="product-card product-card-featured">
            <span class="product-card-badge"><?php echo $product['badge']; ?></span>
            <div class="product-card-img">
              <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?> - Embalagem Oficial" width="320" height="340" loading="lazy">
            </div>
            <h3 class="product-card-title"><?php echo $product['name']; ?></h3>
            <p class="product-card-desc"><?php echo $product['description']; ?></p>
            <a href="produtos.php#<?php echo $product['id']; ?>" class="product-card-link link-inline">
              <span>Conhecer detalhes do produto</span>
              <span class="arrow-icon" aria-hidden="true">→</span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </div>
</section>

<!-- 4. SECTION: NOSSA HISTÓRIA (EMOCIONAL & CONTEMPORÂNEA) -->
<section class="nossa-historia-section" id="nossa-historia">
  <div class="nossa-historia-overlay" aria-hidden="true"></div>
  <div class="container">
    
    <div class="nossa-historia-container">
      <span class="script-annotation">Taiobeiras é o nosso lugar!</span>
      
      <div class="section-label">
        <span class="kicker-dot">•</span>
        <span>NOSSA HISTÓRIA</span>
      </div>

      <h2 class="section-title section-title-light">
        Mais do que café, uma tradição que vem de longe.
      </h2>
      
      <p class="section-description section-description-light">
        Uma história construída com tradição, cuidado e paixão pelo café.
      </p>

      <!-- TODO: Inserir texto oficial da história da empresa fornecido pelo cliente -->

      <a href="sobre.php" class="btn btn-outline">
        <span>Conheça nossa história</span>
        <span class="arrow-icon" aria-hidden="true">→</span>
      </a>
    </div>

  </div>
</section>

<!-- 5. SECTION: INSTAGRAM & GALERIA DA COMUNIDADE -->
<section id="galeria" class="instagram-section section">
  <div class="container">
    
    <div class="instagram-layout">
      <!-- Introdução Editorial (Esquerda) -->
      <div class="instagram-intro">
        <div class="section-label section-label-dark">
          <span class="kicker-dot">•</span>
          <span>COMUNIDADE &amp; COTIDIANO</span>
        </div>
        
        <h2 class="section-title">Siga o Café Xavier</h2>
        
        <p class="section-description">
          Momentos especiais, o aroma do campo, bastidores da nossa torra e o carinho de quem faz o melhor café para a sua família. Venha fazer parte da nossa comunidade e acompanhe nosso dia a dia em Taiobeiras.
        </p>

        <div class="instagram-profile-card">
          <div class="profile-avatar" aria-hidden="true">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </div>
          <div class="profile-meta">
            <span class="profile-handle"><?php echo INSTAGRAM_HANDLE; ?></span>
            <span class="profile-subtext">Perfil Oficial • <?php echo SITE_CITY; ?> - <?php echo SITE_UF; ?></span>
          </div>
        </div>

        <div class="instagram-actions">
          <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-dark">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
            <span>Acessar perfil no Instagram</span>
            <span class="arrow-icon" aria-hidden="true">→</span>
          </a>
        </div>
      </div>

      <!-- Galeria de Fotografias em Composição Editorial (Direita) -->
      <div class="instagram-gallery-wrapper">
        <div class="instagram-grid">
          <?php foreach ($SITE_GALLERY as $item): ?>
            <a href="<?php echo htmlspecialchars($item['link']); ?>" target="_blank" rel="noopener noreferrer" class="insta-photo-card <?php echo htmlspecialchars($item['layout_class']); ?>" title="<?php echo htmlspecialchars($item['alt']); ?> • Ver no Instagram">
              <div class="insta-card-inner">
                <img src="<?php echo htmlspecialchars($item['image']); ?>" alt="<?php echo htmlspecialchars($item['alt']); ?>" width="400" height="400" loading="lazy" class="insta-img">
                
                <div class="insta-overlay">
                  <div class="insta-overlay-top">
                    <?php if (!empty($item['tag'])): ?>
                      <span class="insta-tag"><?php echo htmlspecialchars($item['tag']); ?></span>
                    <?php endif; ?>
                  </div>
                  
                  <div class="insta-overlay-center">
                    <div class="insta-icon-badge" aria-hidden="true">
                      <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                      </svg>
                    </div>
                  </div>

                  <div class="insta-overlay-bottom">
                    <span class="insta-handle-pill"><?php echo INSTAGRAM_HANDLE; ?></span>
                  </div>
                </div>
              </div>
            </a>
          <?php endforeach; ?>
        </div>

        <div class="instagram-footer-bar">
          <div class="instagram-community-notice">
            <span class="community-dot" aria-hidden="true"></span>
            <span>Comunidade apaixonada por café tradicional</span>
          </div>
          <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="link-inline">
            <span>Ver perfil completo no Instagram</span>
            <span class="arrow-icon" aria-hidden="true">→</span>
          </a>
        </div>
      </div>

    </div>

  </div>
</section>

<!-- 6. SECTION: CONTATO / CANAIS OFICIAIS -->
<section id="contato" class="contact-section section">
  <div class="container">
    
    <div class="contact-header-block">
      <div class="section-label section-label-dark">
        <span class="kicker-dot">•</span>
        <span>CANAIS OFICIAIS DE ATENDIMENTO</span>
      </div>
      <h2 class="section-title">Fale com o Café Xavier</h2>
      <p class="section-description">
        Estamos prontos para atender você com o carinho e a dedicação que você merece. Escolha o canal de sua preferência ou venha nos visitar em Taiobeiras.
      </p>
    </div>

    <div class="contact-main-grid">
      
      <!-- Coluna Esquerda: Canais Diretos -->
      <div class="contact-channels-wrapper">
        
        <!-- Card WhatsApp Oficial (Destaque Principal) -->
        <div class="contact-card contact-card-highlight">
          <div class="contact-card-header">
            <div class="contact-icon-bubble whatsapp-bubble" aria-hidden="true">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
              </svg>
            </div>
            <div>
              <span class="contact-card-kicker">ATENDIMENTO RÁPIDO &amp; PEDIDOS</span>
              <h3 class="contact-card-title">WhatsApp Oficial</h3>
            </div>
          </div>
          
          <div class="contact-card-body">
            <span class="contact-number-display"><?php echo CONTACT_WHATSAPP; ?></span>
            <p class="contact-card-text">Faça seus pedidos, consulte disponibilidade e converse diretamente com a nossa equipe.</p>
          </div>

          <div class="contact-card-action">
            <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-green btn-touch-target">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
              </svg>
              <span>Chamar no WhatsApp</span>
              <span class="arrow-icon" aria-hidden="true">→</span>
            </a>
          </div>
        </div>

        <!-- Card Telefone Fixo -->
        <div class="contact-card">
          <div class="contact-card-header">
            <div class="contact-icon-bubble phone-bubble" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
              </svg>
            </div>
            <div>
              <span class="contact-card-kicker">LIGAÇÃO DIRETA</span>
              <h3 class="contact-card-title">Telefone Fixo</h3>
            </div>
          </div>

          <div class="contact-card-body">
            <span class="contact-number-display"><?php echo CONTACT_PHONE_FIXED; ?></span>
            <p class="contact-card-text">Ligue para nosso escritório em Taiobeiras para atendimento direto.</p>
          </div>

          <div class="contact-card-action">
            <a href="<?php echo CONTACT_PHONE_FIXED_TEL; ?>" class="btn btn-outline-dark btn-touch-target">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
              </svg>
              <span>Ligar agora</span>
              <span class="arrow-icon" aria-hidden="true">→</span>
            </a>
          </div>
        </div>

      </div>

      <!-- Coluna Direita: Endereço & Mapa Preparado -->
      <div class="contact-location-wrapper">
        <div class="contact-location-card">
          <div class="location-header">
            <div class="contact-icon-bubble pin-bubble" aria-hidden="true">
              <svg width="22" height="22" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
              </svg>
            </div>
            <div>
              <span class="contact-card-kicker">LOCALIZAÇÃO OFICIAL</span>
              <h3 class="contact-card-title">Venha nos Visitar</h3>
            </div>
          </div>

          <address class="contact-address-box">
            <strong class="address-street-line"><?php echo ADDRESS_STREET; ?>, <?php echo ADDRESS_NUMBER; ?></strong>
            <span class="address-sub-line"><?php echo ADDRESS_NEIGHBORHOOD; ?></span>
            <span class="address-sub-line"><?php echo ADDRESS_CITY_UF; ?> — CEP <?php echo ADDRESS_CEP; ?></span>
          </address>

          <!-- Área preparada para Mapa -->
          <div class="contact-map-frame">
            <iframe 
              src="<?php echo GOOGLE_MAPS_EMBED_URL; ?>" 
              class="contact-map-iframe" 
              loading="lazy" 
              allowfullscreen 
              referrerpolicy="no-referrer-when-downgrade"
              title="Localização Café Xavier Taiobeiras - MG">
            </iframe>
          </div>

          <div class="location-action-bar">
            <a href="<?php echo GOOGLE_MAPS_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-primary btn-touch-target">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
              </svg>
              <span>Como chegar</span>
              <span class="arrow-icon" aria-hidden="true">→</span>
            </a>
          </div>
        </div>
      </div>

    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
