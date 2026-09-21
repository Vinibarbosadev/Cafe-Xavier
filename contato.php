<?php
$pageTitle = "Contato";
$pageDescription = "Canais oficiais de atendimento do Café Xavier em Taiobeiras - MG. Fale conosco via WhatsApp oficial ou telefone fixo.";
include 'includes/header.php';
?>

<!-- Banner da Página de Contato -->
<section class="page-header-banner">
  <div class="container">
    <div class="badge-kicker">
      <span class="kicker-dot">•</span>
      <span>CANAIS OFICIAIS</span>
    </div>
    <h1 class="hero-title">
      Fale com o Café Xavier
    </h1>
    <p class="hero-subtitle">
      Estamos à disposição para atender você, tirar dúvidas sobre nossos grãos e receber seus pedidos.
    </p>
  </div>
</section>

<!-- Seção Principal de Contato -->
<section class="contact-section section">
  <div class="container">
    
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
              <h2 class="contact-card-title">WhatsApp Oficial</h2>
            </div>
          </div>
          
          <div class="contact-card-body">
            <span class="contact-number-display"><?php echo CONTACT_WHATSAPP; ?></span>
            <p class="contact-card-text">Faça seus pedidos, consulte disponibilidade e converse diretamente com nossa equipe.</p>
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
              <h2 class="contact-card-title">Telefone Fixo</h2>
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
              <h2 class="contact-card-title">Venha nos Visitar</h2>
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

