<?php
require_once __DIR__ . '/config.php';
?>
  <!-- Footer Elegante & Minimalista Café Xavier -->
  <footer class="site-footer" id="site-footer">
    <div class="container">
      
      <!-- Grid Principal do Footer -->
      <div class="footer-main-grid">
        
        <!-- Coluna 1: Marca & Origem -->
        <div class="footer-col footer-col-brand">
          <a href="index.php" class="footer-brand-lockup" title="<?php echo SITE_NAME; ?>">
            <img src="assets/img/logo/logo-circular.svg" alt="<?php echo SITE_NAME; ?>" class="footer-brand-logo" width="56" height="56" loading="lazy">
            <div class="footer-brand-text">
              <span class="footer-brand-title"><?php echo SITE_NAME; ?></span>
              <span class="footer-brand-location"><?php echo SITE_CITY; ?> - <?php echo SITE_UF; ?></span>
            </div>
          </a>
          <p class="footer-brand-tagline">
            <?php echo SITE_SLOGAN; ?>
          </p>
        </div>

        <!-- Coluna 2: Links -->
        <div class="footer-col footer-col-links">
          <h3 class="footer-col-heading">Links</h3>
          <ul class="footer-nav-list">
            <li><a href="index.php" class="footer-nav-link">Início</a></li>
            <li><a href="index.php#nosso-cafe" class="footer-nav-link">O Café</a></li>
            <li><a href="produtos.php" class="footer-nav-link">Produtos</a></li>
            <li><a href="sobre.php" class="footer-nav-link">Nossa História</a></li>
            <li><a href="index.php#galeria" class="footer-nav-link">Galeria</a></li>
            <li><a href="contato.php" class="footer-nav-link">Contato</a></li>
          </ul>
        </div>

        <!-- Coluna 3: Contato -->
        <div class="footer-col footer-col-contact">
          <h3 class="footer-col-heading">Contato</h3>
          <ul class="footer-contact-list">
            <li>
              <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="footer-contact-item" title="Falar no WhatsApp">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="footer-icon">
                  <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
                </svg>
                <div class="footer-contact-info">
                  <span class="footer-contact-label">WhatsApp</span>
                  <span class="footer-contact-value"><?php echo CONTACT_WHATSAPP; ?></span>
                </div>
              </a>
            </li>
            <li>
              <a href="<?php echo CONTACT_PHONE_FIXED_TEL; ?>" class="footer-contact-item" title="Ligar para o telefone fixo">
                <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="footer-icon">
                  <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                </svg>
                <div class="footer-contact-info">
                  <span class="footer-contact-label">Telefone Fixo</span>
                  <span class="footer-contact-value"><?php echo CONTACT_PHONE_FIXED; ?></span>
                </div>
              </a>
            </li>
          </ul>
        </div>

        <!-- Coluna 4: Instagram -->
        <div class="footer-col footer-col-social">
          <h3 class="footer-col-heading">Instagram</h3>
          <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="footer-insta-pill" title="Siga no Instagram">
            <div class="footer-insta-icon" aria-hidden="true">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
              </svg>
            </div>
            <div class="footer-insta-meta">
              <span class="footer-insta-handle"><?php echo INSTAGRAM_HANDLE; ?></span>
              <span class="footer-insta-subtext">Siga nosso perfil</span>
            </div>
          </a>
        </div>

      </div>

      <!-- Linha Divisória Discreta -->
      <div class="footer-divider" aria-hidden="true"></div>

      <!-- Linha Inferior: Copyright -->
      <div class="footer-bottom-row">
        <p class="footer-copyright-text">
          &copy; <?php echo date('Y'); ?> <?php echo SITE_NAME; ?>. Todos os direitos reservados.
        </p>
        <span class="footer-origin-tag">
          <?php echo SITE_CITY; ?> - <?php echo SITE_UF; ?>
        </span>
      </div>

    </div>
  </footer>

  <!-- Botão Flutuante do WhatsApp -->
  <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="whatsapp-float-btn" title="Falar no WhatsApp" aria-label="Abrir conversa no WhatsApp">
    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
      <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
    </svg>
  </a>

  <!-- Scripts JS -->
  <script src="assets/js/main.js"></script>
</body>
</html>
