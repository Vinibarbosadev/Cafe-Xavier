/**
 * CAFÉ XAVIER - MAIN JAVASCRIPT
 * Interatividade leve, acessível e otimizada
 */

document.addEventListener('DOMContentLoaded', () => {
  
  // 1. HEADER STICKY & TOPBAR ON SCROLL
  const header = document.getElementById('site-header');
  const topbar = document.querySelector('.site-topbar');

  const handleScroll = () => {
    const scrollY = window.scrollY;
    
    if (header) {
      if (scrollY > 30) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    }

    if (topbar && window.innerWidth > 768) {
      if (scrollY > 50) {
        topbar.style.opacity = '0';
        topbar.style.transform = 'translateY(-100%)';
      } else {
        topbar.style.opacity = '1';
        topbar.style.transform = 'translateY(0)';
      }
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });

  // 2. NAVEGAÇÃO MOBILE & ACESSIBILIDADE ARIA
  const mobileToggle = document.querySelector('.mobile-menu-toggle');
  const navMenu = document.getElementById('nav-menu');

  if (mobileToggle && navMenu) {
    const toggleMenu = () => {
      const isActive = navMenu.classList.contains('active');
      const newState = !isActive;

      mobileToggle.classList.toggle('active', newState);
      navMenu.classList.toggle('active', newState);
      mobileToggle.setAttribute('aria-expanded', newState.toString());
      mobileToggle.setAttribute('aria-label', newState ? 'Fechar menu de navegação' : 'Abrir menu de navegação');
      document.body.classList.toggle('menu-open', newState);
    };

    mobileToggle.addEventListener('click', toggleMenu);

    // Fechar ao clicar em qualquer link de navegação
    document.querySelectorAll('.nav-link').forEach(link => {
      link.addEventListener('click', () => {
        if (navMenu.classList.contains('active')) {
          toggleMenu();
        }
      });
    });

    // Fechar menu ao pressionar a tecla Escape
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && navMenu.classList.contains('active')) {
        toggleMenu();
        mobileToggle.focus();
      }
    });
  }

  // 3. REFINAMENTO UX/UI - SCROLL REVEAL SUAVE & RESPEITO À ACESSIBILIDADE
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  if (!prefersReducedMotion && 'IntersectionObserver' in window) {
    const revealTargets = document.querySelectorAll(
      '.hero-content, .hero-visual, .highlight-item, .story-photo-card, .nosso-cafe-content, ' +
      '.products-header, .products-showcase-single, .nossa-historia-container, ' +
      '.instagram-intro, .insta-photo-card, .contact-header-block, ' +
      '.contact-card, .contact-location-card, .product-item-card, .footer-col, ' +
      '.about-editorial-text, .about-pillar-card, .about-actions'
    );

    revealTargets.forEach(el => {
      el.classList.add('reveal-item');
    });

    const observerOptions = {
      root: null,
      rootMargin: '0px 0px -30px 0px',
      threshold: 0.08
    };

    const revealObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, observerOptions);

    revealTargets.forEach(el => revealObserver.observe(el));
  }

});

