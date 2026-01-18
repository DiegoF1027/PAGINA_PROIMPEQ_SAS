/* nosotros.js - animaciones on-scroll para la página Nosotros
   Encapsulado en IIFE
*/
(function () {
    'use strict';
    var selector = '.nosotros-reveal';
    var els = [].slice.call(document.querySelectorAll(selector));

    if ('IntersectionObserver' in window && els.length) {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('nosotros-in-view');
                    io.unobserve(entry.target);
                }
            });
        }, { root: null, rootMargin: '0px 0px -8% 0px', threshold: 0.06 });

        els.forEach(function (e) { io.observe(e); });
    } else {
        els.forEach(function (e) { e.classList.add('nosotros-in-view'); });
    }

    // Counter animation (trigger once when visible)
    function animateCount(el, to, duration) {
        var start = 0;
        var startTime = null;
        function step(time) {
            if (!startTime) startTime = time;
            var elapsed = time - startTime;
            var t = Math.min(1, elapsed / duration);
            var eased = 1 - Math.pow(1 - t, 3);
            var val = Math.floor(eased * (to - start) + start);
            el.textContent = val.toLocaleString();
            if (t < 1) requestAnimationFrame(step);
            else el.textContent = to.toLocaleString();
        }
        requestAnimationFrame(step);
    }

    var statEls = [].slice.call(document.querySelectorAll('.nosotros-stat'));
    if (statEls.length && 'IntersectionObserver' in window) {
        var statsObserver = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    var numEl = entry.target.querySelector('[data-count]');
                    if (numEl && !numEl.dataset.animated) {
                        var to = parseInt(numEl.getAttribute('data-count') || '0', 10);
                        animateCount(numEl, to, 1400);
                        numEl.dataset.animated = 'true';
                    }
                    statsObserver.unobserve(entry.target);
                }
            });
        }, { threshold: 0.4 });

        statEls.forEach(function (s) { statsObserver.observe(s); });
    }

    // Smooth parallax for hero background
    var heroBg = document.querySelector('.nosotros-hero__bg');
    if (heroBg && typeof window !== 'undefined') {
        var lastY = 0;
        var ticking = false;
        function updateParallax() {
            var rect = heroBg.parentElement.getBoundingClientRect();
            var center = rect.top + rect.height / 2;
            var offset = (window.innerHeight / 2 - center) * 0.08; // subtle parallax factor
            heroBg.style.transform = 'translate3d(0,' + offset + 'px,0) scale(1.02)';
            ticking = false;
        }
        function onScroll() {
            lastY = window.scrollY || window.pageYOffset;
            if (!ticking) {
                window.requestAnimationFrame(updateParallax);
                ticking = true;
            }
        }
        onScroll();
        window.addEventListener('scroll', onScroll, { passive: true });
        window.addEventListener('resize', onScroll);
    }
})();
