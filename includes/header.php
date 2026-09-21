<?php
require_once __DIR__ . '/config.php';

// Define a página atual para destaque de navegação ativa
$currentPage = basename($_SERVER['PHP_SELF'], '.php');

// Título e Descrição Dinâmicos para SEO
$defaultTitle = SITE_NAME . ' | Café Especial com Sabor de Tradição';
$defaultDesc = 'Café Xavier em Taiobeiras - MG. Grãos selecionados, torra de qualidade e o verdadeiro sabor do café tradicional de Minas Gerais.';

$metaTitle = isset($pageTitle) ? $pageTitle . ' | ' . SITE_NAME : $defaultTitle;
$metaDescription = isset($pageDescription) ? $pageDescription : $defaultDesc;

$currentUrl = BASE_URL . ($currentPage === 'index' ? '' : $currentPage . '.php');
$ogImage = BASE_URL . 'assets/img/produtos/embalagem-moido.svg';
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($metaTitle); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo htmlspecialchars($currentUrl); ?>">
  
  <!-- Open Graph / Facebook / WhatsApp -->
  <meta property="og:type" content="website">
  <meta property="og:locale" content="pt_BR">
  <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
  <meta property="og:title" content="<?php echo htmlspecialchars($metaTitle); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta property="og:url" content="<?php echo htmlspecialchars($currentUrl); ?>">
  <meta property="og:image" content="<?php echo htmlspecialchars($ogImage); ?>">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($metaTitle); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($metaDescription); ?>">
  <meta name="twitter:image" content="<?php echo htmlspecialchars($ogImage); ?>">

  <!-- Favicon oficial da marca -->
  <link rel="icon" type="image/svg+xml" href="assets/img/logo/logo-circular.svg">

  <!-- Preconnect e Otimização de Fontes -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Folhas de Estilos CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/css/responsive.css">

  <!-- Dados Estruturados Schema.org (LocalBusiness - Apenas Dados Confirmados) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "<?php echo SITE_NAME; ?>",
    "description": "<?php echo SITE_SLOGAN; ?>",
    "url": "<?php echo BASE_URL; ?>",
    "logo": "<?php echo BASE_URL; ?>assets/img/logo/logo-circular.svg",
    "image": "<?php echo htmlspecialchars($ogImage); ?>",
    "telephone": "<?php echo CONTACT_PHONE_FIXED; ?>",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "<?php echo ADDRESS_STREET; ?>, <?php echo ADDRESS_NUMBER; ?> - <?php echo ADDRESS_NEIGHBORHOOD; ?>",
      "addressLocality": "<?php echo SITE_CITY; ?>",
      "addressRegion": "<?php echo SITE_UF; ?>",
      "postalCode": "<?php echo ADDRESS_CEP; ?>",
      "addressCountry": "BR"
    },
    "sameAs": [
      "<?php echo INSTAGRAM_URL; ?>"
    ]
  }
  </script>
</head>
<body>

  <!-- Topbar Discreta Institucional (Telefone Fixo e Cidade) -->
  <div class="site-topbar">
    <div class="container topbar-container">
      <div class="topbar-info">
        <span class="topbar-item">
          <svg class="topbar-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
          </svg>
          <span><?php echo SITE_CITY; ?> - <?php echo SITE_UF; ?></span>
        </span>

        <span class="topbar-divider" aria-hidden="true">•</span>

        <a href="<?php echo CONTACT_PHONE_FIXED_TEL; ?>" class="topbar-item topbar-link" title="Ligar para o Telefone Fixo Oficial">
          <svg class="topbar-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
          </svg>
          <span>Fixo: <?php echo CONTACT_PHONE_FIXED; ?></span>
        </a>
      </div>

      <div class="topbar-social">
        <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="topbar-link" title="Instagram Oficial @cafe_xavier_">
          <span><?php echo INSTAGRAM_HANDLE; ?></span>
        </a>
      </div>
    </div>
  </div>

  <!-- Cabeçalho Principal (Header Sticky) -->
  <header class="site-header" id="site-header">
    <div class="container header-container">
      
      <!-- Marca / Logo à Esquerda -->
      <a href="index.php" class="header-brand" title="<?php echo SITE_NAME; ?> - Página Inicial">
        <img src="assets/img/logo/logo-circular.svg" alt="Logotipo <?php echo SITE_NAME; ?>" class="header-logo" width="58" height="58">
        <div class="brand-text">
          <span class="brand-name"><?php echo SITE_NAME; ?></span>
          <span class="brand-location"><?php echo SITE_CITY; ?> - <?php echo SITE_UF; ?></span>
        </div>
      </a>

      <!-- Navegação Central -->
      <nav class="nav-menu" id="nav-menu" aria-label="Navegação Principal">
        <a href="index.php" class="nav-link <?php echo $currentPage === 'index' ? 'active' : ''; ?>">Início</a>
        <a href="index.php#nosso-cafe" class="nav-link">O Café</a>
        <a href="produtos.php" class="nav-link <?php echo $currentPage === 'produtos' ? 'active' : ''; ?>">Produtos</a>
        <a href="sobre.php" class="nav-link <?php echo $currentPage === 'sobre' ? 'active' : ''; ?>">Nossa História</a>
        <a href="index.php#galeria" class="nav-link">Galeria</a>
        <a href="contato.php" class="nav-link <?php echo $currentPage === 'contato' ? 'active' : ''; ?>">Contato</a>

        <!-- Itens complementares dentro do menu mobile -->
        <div class="mobile-nav-extras">
          <a href="<?php echo CONTACT_PHONE_FIXED_TEL; ?>" class="mobile-extra-item">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
            </svg>
            <span>Tel. Fixo: <?php echo CONTACT_PHONE_FIXED; ?></span>
          </a>

          <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp-green mobile-whatsapp-btn">
            <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
              <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
            </svg>
            <span>Pedir pelo WhatsApp</span>
          </a>
        </div>
      </nav>

      <!-- CTA WhatsApp à Direita (Desktop) -->
      <a href="<?php echo CONTACT_WHATSAPP_LINK; ?>" target="_blank" rel="noopener noreferrer" class="btn btn-whatsapp header-btn-desktop">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
          <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-1.002 3.66 3.745-.983z"/>
        </svg>
        <span>Pedir pelo WhatsApp</span>
      </a>

      <!-- Botão Hamburger (Mobile) com atributos de Acessibilidade -->
      <button class="mobile-menu-toggle" aria-expanded="false" aria-controls="nav-menu" aria-label="Abrir menu de navegação">
        <span></span>
        <span></span>
        <span></span>
      </button>

    </div>
  </header>
