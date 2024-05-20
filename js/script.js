!(function() {
    'use strict';
    (() => {
        const e = document.getElementById('island-select');
        e.addEventListener('click', (e) => {
            e.target.classList.toggle('form-select_active');
        }),
            document.body.addEventListener('click', (t) => {
                t.target !== e && e.classList.remove('form-select_active');
            });
    })(),
        $('.slider-wrapper').slick({
            arrows: !1,
            adaptiveHeight: !0,
            autoplay: !1,
            autoplaySpeed: 2500,
            fade: !0,
            cssEase: 'linear',
        }),
        $('.cards-slider-wrapper').slick({
            arrows: !1,
            slidesToShow: 4,
            slidesToScroll: 1,
            variableWidth: !0,
            autoplay: !1,
            autoplaySpeed: 3500,
            infinite: !0,
            responsive: [
                { breakpoint: 992, settings: { slidesToShow: 3, slidesToScroll: 3, dots: !1 } },
                { breakpoint: 600, settings: { slidesToShow: 1, slidesToScroll: 1 } },
                { breakpoint: 400, settings: { slidesToShow: 1, slidesToScroll: 1 } },
            ],
        });
    const e = document.querySelector('.nav-menu__btn'),
        t = document.querySelector('.mobile-nav-wrapper'),
        s = document.querySelectorAll('.mobile-nav__item');
    e.addEventListener('click', () => {
        e.classList.toggle('active'), t.classList.toggle('active');
    }),

        Array.from(s).forEach((s) => {
            s.addEventListener('click', () => {
                e.classList.remove('active'), t.classList.remove('active');
            });
        });
    const a = document.querySelector('#island-select'),
        l = document.querySelectorAll('#islandCard'),
        i = document.querySelector('.select-island-form');
    let o, r;
    a.addEventListener('change', (e) => {
        o = false;
        const t = e.target.value;
        l.forEach((e) => {
            e.classList.remove('active');
        }),
            l.forEach((e) => {
                e.dataset.info === t && (e.classList.add('active'), (o = e));
            });
    }),
        i.addEventListener('submit', (e) => {
            if ((e.preventDefault(), o)) {
                r = o.querySelector('.card__price');
                const e = r.getAttribute('href');
                window.open(e, '_blank');
            }
        });
})();