# ☕ Café Xavier - Website Institucional Premium

Website institucional desenvolvido para a marca **Café Xavier** (Taiobeiras, Minas Gerais - Brasil), focado em transmitir a essência do café tradicional mineiro com acabamento e posicionamento contemporâneo e sofisticado.

---

## 🛠️ Tecnologias & Arquitetura

- **PHP 8.x** (Estruturação modular sem dependência de frameworks pesados)
- **HTML5 Semântico & Acessível**
- **CSS3 Personalizado** (Variáveis nativas, Flexbox, Grid Layout, Responsividade Mobile-First)
- **JavaScript (Vanilla / ES6)** (Microinterações leves, carrossel e menu responsivo)

---

## 📁 Estrutura de Arquivos

```
cafe-xavier/
│
├── index.php                 # Página Inicial / Home (fiel ao mockup de referência)
├── sobre.php                 # Página de História e Origem Institucional
├── produtos.php              # Catálogo da linha de cafés com ação direta via WhatsApp
├── contato.php               # Formulário e canais de contato centralizados
│
├── includes/
│   ├── config.php            # Centralização global de telefones, WhatsApp, redes e endereço
│   ├── header.php            # Componente de topo e navegação
│   └── footer.php            # Componente de rodapé com mapa e depoimentos
│
├── assets/
│   ├── css/
│   │   ├── style.css         # Variáveis de cor, tipografia e estilos gerais
│   │   └── responsive.css    # Media queries para tablets e dispositivos móveis
│   │
│   ├── js/
│   │   └── main.js           # Lógica do carrossel, slider de depoimentos e menu mobile
│   │
│   └── img/                  # Logotipos SVG, produtos e ilustrações decorativas
│       ├── logo/
│       ├── produtos/
│       ├── historia/
│       ├── cafe/
│       └── galeria/
│
└── README.md
```

---

## 📌 Configuração Centralizada de Contatos (`includes/config.php`)

Todos os números de telefone, WhatsApp, redes sociais e endereço foram centralizados em `includes/config.php`. Caso necessite alterar dados de contato, edite apenas este arquivo:

- **WhatsApp:** `+55 38 99150-0439` (Link: `https://wa.me/5538991500439`)
- **Telefone Fixo:** `+55 38 3845-2540`
- **Instagram:** `@cafe_xavier_`
- **Endereço:** Rua Buenos Aires, 402 - Santos Cruzeiro, Taiobeiras - MG, CEP 39550-000

---

## 🚀 Como Executar o Projeto

1. Certifique-se de possuir um servidor web com suporte a PHP (como Apache, Nginx, XAMPP, Laragon, WAMP) ou utilize o servidor embutido do PHP:
   ```bash
   php -S localhost:8000
   ```
2. Acesse `http://localhost:8000` no seu navegador.

