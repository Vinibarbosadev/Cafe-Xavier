<?php
/**
 * Café Xavier - Configurações Globais
 * 
 * Centralização dos dados de contato, redes sociais e configurações do site.
 * Todos os números de telefone e links devem ser alterados apenas neste arquivo.
 */

// Informações da Empresa
define('SITE_NAME', 'Café Xavier');
define('SITE_SLOGAN', 'Tradição, qualidade e sabor em cada xícara.');
define('SITE_CITY', 'Taiobeiras');
define('SITE_UF', 'MG');
define('SITE_FOUNDATION_YEAR', 2007);

// Contatos Oficiais Obrigatórios
define('CONTACT_PHONE_FIXED', '+55 38 3845-2540');
define('CONTACT_PHONE_FIXED_RAW', '553838452540');
define('CONTACT_PHONE_FIXED_TEL', 'tel:+553838452540');

define('CONTACT_WHATSAPP', '+55 38 99150-0439');
define('CONTACT_WHATSAPP_RAW', '5538991500439');
define('CONTACT_WHATSAPP_LINK', 'https://wa.me/5538991500439');
define('CONTACT_WHATSAPP_MSG_DEFAULT', 'Olá! Gostaria de falar com o Café Xavier.');

// Endereço Oficial
define('ADDRESS_STREET', 'Rua Buenos Aires');
define('ADDRESS_NUMBER', '402');
define('ADDRESS_NEIGHBORHOOD', 'Santos Cruzeiro');
define('ADDRESS_CITY_UF', 'Taiobeiras - MG');
define('ADDRESS_CEP', '39550-000');
define('ADDRESS_FULL', 'Rua Buenos Aires, 402 - Santos Cruzeiro, Taiobeiras - MG, 39550-000');
define('GOOGLE_MAPS_LINK', 'https://maps.google.com/?q=Rua+Buenos+Aires+402+Santos+Cruzeiro+Taiobeiras+MG');
define('GOOGLE_MAPS_EMBED_URL', 'https://maps.google.com/maps?q=Taiobeiras%20MG%20Rua%20Buenos%20Aires%20402&t=&z=15&ie=UTF8&iwloc=&output=embed');

// Redes Sociais
define('INSTAGRAM_HANDLE', '@cafe_xavier_');
define('INSTAGRAM_URL', 'https://www.instagram.com/cafe_xavier_/');

// URL Base
$protocol = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http';
$host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$script_dir = dirname($_SERVER['SCRIPT_NAME'] ?? '');
$base_url = rtrim($protocol . '://' . $host . $script_dir, '/\\') . '/';
define('BASE_URL', $base_url);

/**
 * Catálogo de Produtos Estruturado
 * Produto único verificado: Café Xavier — Torrado e Moído
 * Estrutura extensível para novos produtos confirmados futuramente.
 */
$SITE_PRODUCTS = [
  [
    'id'          => 'torrado-e-moido',
    'name'        => 'Café Xavier — Torrado e Moído',
    'badge'       => 'Produto Oficial',
    'image'       => 'assets/img/produtos/embalagem-moido-foto.png',
    'description' => 'Grãos selecionados e torra de qualidade, trazendo o verdadeiro sabor tradicional de Minas Gerais para a sua xícara.',
    'info'        => 'Torrado e Moído | Embalagem Pouch de Alta Proteção',
    'is_official' => true,
  ]
];

/**
 * Galeria Editorial & Instagram Feed Estruturado
 * Estruturado para receber publicações e imagens reais do Instagram (@cafe_xavier_).
 * As imagens iniciais são carregadas de assets/img/galeria/.
 */
$SITE_GALLERY = [
  [
    'id'           => 'insta-1',
    'image'        => 'assets/img/galeria/insta-1.jpeg',
    'alt'          => 'Xícara de Café Xavier com crema perfeito e logo da marca',
    'tag'          => 'Tradição & Afeto',
    'link'         => INSTAGRAM_URL,
    'layout_class' => 'insta-card-spotlight', // Card principal/destaque vertical
  ],
  [
    'id'           => 'insta-2',
    'image'        => 'assets/img/galeria/insta-2.jpeg',
    'alt'          => 'Equipe e comunidade Café Xavier em feira e eventos locais',
    'tag'          => 'Comunidade & Gente',
    'link'         => INSTAGRAM_URL,
    'layout_class' => 'insta-card-square',
  ],
  [
    'id'           => 'insta-3',
    'image'        => 'assets/img/galeria/insta-3.jpeg',
    'alt'          => 'Ramo com frutos maduros de café na lavoura',
    'tag'          => 'Origem & Lavoura',
    'link'         => INSTAGRAM_URL,
    'layout_class' => 'insta-card-square',
  ],
  [
    'id'           => 'insta-4',
    'image'        => 'assets/img/galeria/insta-4.jpeg',
    'alt'          => 'Embalagem oficial do Café Xavier',
    'tag'          => 'Produto Oficial',
    'link'         => INSTAGRAM_URL,
    'layout_class' => 'insta-card-wide', // Card horizontal
  ],
  [
    'id'           => 'insta-5',
    'image'        => 'assets/img/galeria/insta-5.jpeg',
    'alt'          => 'Linha de cafés e degustação Café Xavier',
    'tag'          => 'Sabor & Qualidade',
    'link'         => INSTAGRAM_URL,
    'layout_class' => 'insta-card-square',
  ],
  [
    'id'           => 'insta-6',
    'image'        => 'assets/img/galeria/insta-6.jpeg',
    'alt'          => 'Preparo de café fresco coado na hora com grãos selecionados',
    'tag'          => 'Ritual do Café',
    'link'         => INSTAGRAM_URL,
    'layout_class' => 'insta-card-square',
  ],
];
?>
