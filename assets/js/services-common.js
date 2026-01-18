(function () {
    'use strict';

    window.se_carouselControls = { start: function () { }, stop: function () { } };

    function enableSmoothScroll() {
        if ('scrollBehavior' in document.documentElement.style) return;
        document.addEventListener('click', function (e) {
            const a = e.target.closest('a[href^="#"]');
            if (!a) return;
            const id = a.getAttribute('href').slice(1);
            const el = document.getElementById(id);
            if (el) { e.preventDefault(); el.scrollIntoView({ behavior: 'smooth', block: 'start' }); }
        });
    }

    function setupRevealOnScroll() {
        const items = document.querySelectorAll('.se-animate');
        if (!items.length) return;
        const obs = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });
        items.forEach(el => obs.observe(el));
    }

    function setupCardTouchToggle() {
        const cards = document.querySelectorAll('.se-card');
        if (!cards.length) return;
        cards.forEach(card => {
            card.addEventListener('click', function (e) {
                if (window.innerWidth <= 768) {
                    card.classList.toggle('se-overlay-active');
                }
            });
        });

        document.addEventListener('click', function (e) {
            if (window.innerWidth > 768) return;
            const isCard = !!e.target.closest('.se-card');
            if (!isCard) {
                document.querySelectorAll('.se-card.se-overlay-active').forEach(c => c.classList.remove('se-overlay-active'));
            }
        });
    }

    function ensureHeroBackground() {
        const hero = document.querySelector('.se-hero');
        if (!hero) return;
        const css = getComputedStyle(hero).getPropertyValue('--se-hero-image') || '';
        const m = css.match(/url\(['"]?(.*?)['"]?\)/);
        if (!m || !m[1]) return;
        const img = new Image();
        img.src = m[1];
        img.onerror = function () {
            hero.style.backgroundImage = 'linear-gradient(180deg, rgba(58,74,92,0.55), rgba(58,74,92,0.55))';
        };
    }

    function setupServiceModal() {
        const modalEl = document.getElementById('seModal');
        if (!modalEl || typeof bootstrap === 'undefined') return;
        const bsModal = new bootstrap.Modal(modalEl, { keyboard: true, backdrop: true });
        const img = modalEl.querySelector('#se-modal-image');
        const title = modalEl.querySelector('#se-modal-title');
        const desc = modalEl.querySelector('#se-modal-desc');
        const list = modalEl.querySelector('#se-modal-list');
        let lastFocused = null;

        document.querySelectorAll('.se-card[data-servicio]').forEach(card => {
            card.addEventListener('click', function () {
                const key = card.getAttribute('data-servicio');
                const data = window.se_serviciosData && window.se_serviciosData[key];
                if (!data) return;
                if (window.se_carouselControls && typeof window.se_carouselControls.stop === 'function') window.se_carouselControls.stop();
                lastFocused = document.activeElement;
                img.src = data.imagen || '';
                img.alt = data.titulo || '';
                title.textContent = data.titulo || '';
                desc.innerHTML = '<p>' + (data.descripcion || '').replace(/\n\s+/g, '</p><p>') + '</p>';
                list.innerHTML = (data.beneficios || []).map(b => '<li>' + b + '</li>').join('');
                bsModal.show();
            });
        });

        modalEl.addEventListener('hidden.bs.modal', function () {
            if (window.se_carouselControls && typeof window.se_carouselControls.start === 'function') window.se_carouselControls.start();
            if (lastFocused && typeof lastFocused.focus === 'function') lastFocused.focus();
        });
    }

    function initBootstrapCarousel() {
        if (typeof bootstrap === 'undefined') return;
        var ids = ['seProjectsCarousel', 'seProjectsCarouselMobile'];
        var instances = [];
        ids.forEach(function (id) {
            var el = document.getElementById(id);
            if (!el) return;
            try {
                var inst = new bootstrap.Carousel(el, { interval: 3500, ride: 'carousel', pause: 'hover' });
                instances.push(inst);
            } catch (e) { }
        });

        window.se_carouselControls.start = function () { instances.forEach(function (i) { try { i.cycle(); } catch (e) { } }); };
        window.se_carouselControls.stop = function () { instances.forEach(function (i) { try { i.pause(); } catch (e) { } }); };

        function openImageInModal(src, alt) {
            var imageModal = document.getElementById('seImageModal');
            if (!imageModal) return;
            try { window.se_carouselControls.stop(); } catch (e) { }
            var bsModal = new bootstrap.Modal(imageModal);
            imageModal.querySelector('#se-image-modal-image').src = src;
            imageModal.querySelector('#se-image-modal-image').alt = alt || '';
            imageModal.querySelector('#se-image-modal-title').textContent = alt || 'Proyecto';
            bsModal.show();
            imageModal.addEventListener('hidden.bs.modal', function handler() { window.se_carouselControls.start(); imageModal.removeEventListener('hidden.bs.modal', handler); });
        }

        ids.forEach(function (id) {
            var el = document.getElementById(id);
            if (!el) return;
            el.querySelectorAll('.carousel-thumb').forEach(function (img) { img.addEventListener('click', function () { openImageInModal(img.src, img.alt); }); });
        });
    }

    window.seCommonInit = function () {
        enableSmoothScroll();
        setupRevealOnScroll();
        setupCardTouchToggle();
        ensureHeroBackground();
        setupServiceModal();
        initBootstrapCarousel();

        ['.se-desc', '.se-services', '.se-cta'].forEach(sel => {
            const el = document.querySelector(sel);
            if (el) el.classList.add('se-animate');
        });
        setTimeout(setupRevealOnScroll, 120);
    };

})();
