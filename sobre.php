<?php
$pageTitle = "Nossa História";
$pageDescription = "Conheça a história e as raízes do Café Xavier, uma tradição construída com qualidade, afeto e paixão pelo café em Taiobeiras - MG.";
include 'includes/header.php';
?>

<!-- Banner Institucional -->
<section class="page-header-banner">
  <div class="container">
    <div class="badge-kicker">
      <span class="kicker-dot">•</span>
      <span>NOSSAS RAÍZES</span>
    </div>
    <h1 class="hero-title">
      Nossa História
    </h1>
    <p class="hero-subtitle">
      Uma história construída com tradição, cuidado e paixão pelo café em Taiobeiras - MG.
    </p>
  </div>
</section>

<!-- Conteúdo Institucional Editorial -->
<section class="about-editorial-section section">
  <div class="container about-container">
    
    <div class="section-label section-label-dark">
      <span class="kicker-dot">•</span>
      <span>SOBRE O CAFÉ XAVIER</span>
    </div>
    
    <h2 class="section-title">
      Mais do que café, uma tradição que vem de longe.
    </h2>

    <div class="about-editorial-text">
      <p class="about-lead">
        O Café Xavier carrega em sua essência o trabalho dedicado, o respeito à nossa terra e o compromisso permanente em entregar o verdadeiro sabor de Minas Gerais.
      </p>

      <p class="about-paragraph">
        Uma história construída com tradição, cuidado e paixão pelo café.
      </p>
    </div>

    <!-- Bloco de Pilares Institucionais (Origem, Qualidade, Autenticidade) -->
    <div class="about-pillars-grid">
      <div class="about-pillar-card">
        <div class="about-pillar-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 21C16 17.5 19 14 19 10C19 6.13401 15.866 3 12 3C8.13401 3 5 6.13401 5 10C5 14 8 17.5 12 21Z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h3 class="about-pillar-title">Origem</h3>
        <p class="about-pillar-desc">Orgulho de ser produzido no coração de Taiobeiras - MG.</p>
      </div>

      <div class="about-pillar-card">
        <div class="about-pillar-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <ellipse cx="12" cy="12" rx="6" ry="9" transform="rotate(25 12 12)"/>
            <path d="M 10,5 Q 14,12 10,19"/>
          </svg>
        </div>
        <h3 class="about-pillar-title">Qualidade</h3>
        <p class="about-pillar-desc">Cuidadosa seleção de grãos e torra padronizada.</p>
      </div>

      <div class="about-pillar-card">
        <div class="about-pillar-icon" aria-hidden="true">
          <svg viewBox="0 0 24 24" width="26" height="26" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 22C12 22 20 18 20 12V5L12 2L4 5V12C4 18 12 22 12 22Z"/>
            <path d="M12 8V16"/>
            <path d="M8 12H16"/>
          </svg>
        </div>
        <h3 class="about-pillar-title">Autenticidade</h3>
        <p class="about-pillar-desc">Um café com alma, sabor e aroma inconfundíveis.</p>
      </div>
    </div>

    <div class="about-actions">
      <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-touch-target">
        <span>Falar conosco no WhatsApp</span>
        <span class="arrow-icon" aria-hidden="true">→</span>
      </a>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
