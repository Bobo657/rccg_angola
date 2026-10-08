(function () {
    'use strict';

    var header = document.getElementById('site-header');
    var overlay = header && header.getAttribute('data-overlay') === 'true';
    var toggle = document.getElementById('menu-toggle');
    var menu = document.getElementById('mobile-menu');
    var menuOpen = false;

    // Header: transparent over a hero, solid once scrolled or while the menu is open
    function syncHeader() {
        if (!header || !overlay) { return; }
        var solid = menuOpen || window.scrollY > 24;
        header.setAttribute('data-solid', solid ? 'true' : 'false');
    }
    syncHeader();
    window.addEventListener('scroll', syncHeader, { passive: true });

    // Mobile menu
    if (toggle && menu) {
        var setOpen = function (open) {
            menuOpen = open;
            toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
            toggle.setAttribute('aria-label', open ? 'Close menu' : 'Open menu');
            menu.style.gridTemplateRows = open ? '1fr' : '0fr';
            toggle.querySelector('[data-icon="open"]').classList.toggle('hidden', open);
            toggle.querySelector('[data-icon="close"]').classList.toggle('hidden', !open);
            syncHeader();
        };
        toggle.addEventListener('click', function () { setOpen(!menuOpen); });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && menuOpen) { setOpen(false); toggle.focus(); }
        });
    }

    // Collapse long topic indexes on small screens
    if (window.matchMedia('(max-width: 1023px)').matches) {
        document.querySelectorAll('details[open]').forEach(function (d) { d.removeAttribute('open'); });
    }

    // Scroll reveal
    var items = document.querySelectorAll('[data-reveal]');
    if (!('IntersectionObserver' in window)) {
        items.forEach(function (el) { el.classList.add('is-in'); });
    } else {
        var io = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-in');
                    io.unobserve(entry.target);
                }
            });
        }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });
        items.forEach(function (el) { io.observe(el); });
    }

    // Beliefs index: highlight the topic being read
    var toc = document.querySelector('.toc');
    if (toc && 'IntersectionObserver' in window) {
        var links = {};
        toc.querySelectorAll('a[href^="#"]').forEach(function (a) { links[a.getAttribute('href').slice(1)] = a; });
        var current = null;
        var spy = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (!entry.isIntersecting) { return; }
                var link = links[entry.target.id];
                if (!link || link === current) { return; }
                if (current) { current.removeAttribute('aria-current'); }
                link.setAttribute('aria-current', 'true');
                current = link;
                var box = toc.closest('details');
                if (box && box.scrollHeight > box.clientHeight && window.matchMedia('(min-width: 1024px)').matches) {
                    box.scrollTo({ top: link.offsetTop - box.clientHeight / 2, behavior: 'smooth' });
                }
            });
        }, { rootMargin: '-15% 0px -75% 0px' });
        Object.keys(links).forEach(function (id) {
            var el = document.getElementById(id);
            if (el) { spy.observe(el); }
        });
    }

    // Gallery lightbox (native <dialog>) with previous / next and arrow keys
    var dialog = document.getElementById('lightbox');
    if (dialog && typeof dialog.showModal === 'function') {
        var img = dialog.querySelector('img');
        var cap = dialog.querySelector('[data-caption]');
        var count = dialog.querySelector('[data-count]');
        var buttons = Array.prototype.slice.call(document.querySelectorAll('[data-lightbox]'));
        var index = 0;

        var show = function (i) {
            index = (i + buttons.length) % buttons.length;
            var b = buttons[index];
            img.src = b.getAttribute('data-src');
            img.alt = b.getAttribute('data-alt') || '';
            cap.textContent = b.getAttribute('data-alt') || '';
            if (count) { count.textContent = (index + 1) + ' / ' + buttons.length; }
        };

        buttons.forEach(function (btn, i) {
            btn.addEventListener('click', function () { show(i); dialog.showModal(); });
        });
        dialog.addEventListener('click', function (e) {
            if (e.target === dialog || e.target.closest('[data-close]')) { dialog.close(); }
            else if (e.target.closest('[data-prev]')) { show(index - 1); }
            else if (e.target.closest('[data-next]')) { show(index + 1); }
        });
        dialog.addEventListener('keydown', function (e) {
            if (e.key === 'ArrowLeft') { show(index - 1); }
            if (e.key === 'ArrowRight') { show(index + 1); }
        });
    }
})();
