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

  // 3. NAVEGAÇÃO ATIVA & SCROLLSPY (HOMEPAGE & ÂNCORAS)
  const navLinks = document.querySelectorAll('.nav-menu .nav-link');
  const sectionNossoCafe = document.getElementById('nosso-cafe');
  const sectionGaleria = document.getElementById('galeria');
  const linkInicio = document.querySelector('.nav-menu .nav-link[href="index.php"], .nav-menu .nav-link[href="/"]');
  const linkCafe = document.querySelector('.nav-menu .nav-link[href*="#nosso-cafe"]');
  const linkGaleria = document.querySelector('.nav-menu .nav-link[href*="#galeria"]');

  const setActiveNavLink = (activeLink) => {
    if (!activeLink) return;
    navLinks.forEach(link => link.classList.remove('active'));
    activeLink.classList.add('active');
  };

  let isClickScrolling = false;
  let clickScrollTimeout = null;

  // Interação de clique suave e ativação visual imediata
  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      if (href && href.includes('#')) {
        const hash = href.substring(href.indexOf('#'));
        const targetElement = document.querySelector(hash);

        if (targetElement) {
          setActiveNavLink(link);
          isClickScrolling = true;
          clearTimeout(clickScrollTimeout);
          clickScrollTimeout = setTimeout(() => {
            isClickScrolling = false;
          }, 900);
        }
      } else if (href === 'index.php' || href === '/' || href === './') {
        const isHomePage = window.location.pathname.endsWith('index.php') || 
                           window.location.pathname === '/' || 
                           window.location.pathname === '' ||
                           window.location.pathname.endsWith('/Café Xavier v2/') ||
                           window.location.pathname.endsWith('/Caf%C3%A9%20Xavier%20v2/');

        if (isHomePage && window.scrollY > 20) {
          e.preventDefault();
          window.scrollTo({ top: 0, behavior: 'smooth' });
          setActiveNavLink(link);
          if (window.location.hash) {
            history.replaceState(null, '', window.location.pathname);
          }
          isClickScrolling = true;
          clearTimeout(clickScrollTimeout);
          clickScrollTimeout = setTimeout(() => {
            isClickScrolling = false;
          }, 900);
        }
      }
    });
  });

  // ScrollSpy ativo na homepage (para destacar "Início", "O Café" e "Galeria")
  if (sectionNossoCafe || sectionGaleria) {
    const updateScrollSpy = () => {
      if (isClickScrolling) return;

      const scrollY = window.scrollY;
      const headerHeight = header ? header.offsetHeight : 74;
      const offsetMargin = headerHeight + 140;

      const cafeTop = sectionNossoCafe ? sectionNossoCafe.offsetTop - offsetMargin : Infinity;
      const galeriaTop = sectionGaleria ? sectionGaleria.offsetTop - offsetMargin : Infinity;

      if (scrollY < cafeTop) {
        if (linkInicio) setActiveNavLink(linkInicio);
      } else if (scrollY >= cafeTop && scrollY < galeriaTop) {
        if (linkCafe) setActiveNavLink(linkCafe);
      } else if (scrollY >= galeriaTop) {
        if (linkGaleria) setActiveNavLink(linkGaleria);
      }
    };

    window.addEventListener('scroll', () => {
      window.requestAnimationFrame(updateScrollSpy);
    }, { passive: true });

    // Verificação inicial baseada na âncora presente na URL (ex: #nosso-cafe ou #galeria)
    const checkHashOnLoad = () => {
      const hash = window.location.hash;
      if (hash === '#nosso-cafe' && linkCafe) {
        setActiveNavLink(linkCafe);
      } else if (hash === '#galeria' && linkGaleria) {
        setActiveNavLink(linkGaleria);
      } else if (!hash && linkInicio) {
        if (window.scrollY < 200) {
          setActiveNavLink(linkInicio);
        }
      }
    };

    checkHashOnLoad();
    window.addEventListener('hashchange', checkHashOnLoad);
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

