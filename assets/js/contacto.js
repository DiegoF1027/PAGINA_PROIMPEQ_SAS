/* contacto.js
   Animaciones on-scroll y utilidades para la página de contacto.
   Todo encapsulado en IIFE para evitar contaminación global.
*/
(function () {
    'use strict';

    // Intersection Observer para animaciones on-scroll
    var revealSelector = '.contacto-reveal';
    var revealElements = [].slice.call(document.querySelectorAll(revealSelector));

    if ('IntersectionObserver' in window && revealElements.length) {
        var obs = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('contacto-in-view');
                    obs.unobserve(entry.target);
                }
            });
        }, { root: null, rootMargin: '0px 0px -8% 0px', threshold: 0.06 });

        revealElements.forEach(function (el) { obs.observe(el); });
    } else {
        // Fallback: si no hay observer, mostrar todos
        revealElements.forEach(function (el) { el.classList.add('contacto-in-view'); });
    }

    // Smooth scroll for internal anchors (if any)
    document.addEventListener('click', function (e) {
        var target = e.target.closest('a');
        if (!target) return;
        var href = target.getAttribute('href');
        if (!href) return;
        if (href.charAt(0) === '#') {
            var el = document.querySelector(href);
            if (el) {
                e.preventDefault();
                el.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        }
    });

    // Small accessibility enhancement: ensure focus after reveal for keyboard users
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Tab') {
            var focused = document.activeElement;
            if (focused && focused.classList && focused.classList.contains('contacto-reveal')) {
                focused.classList.add('contacto-in-view');
            }
        }
    });

})();
