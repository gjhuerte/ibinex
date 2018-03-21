$(window).on("load", function(){
    window.sr = ScrollReveal({ mobile: true });

    sr.reveal('.header-text', { /* Animates the top introduction header */

        origin: 'left',
        distance: '200px',
        opacity: 0
    });

    sr.reveal('.intro-text-top', { /* Animates the introduction paragraph at the top */

        origin: 'left',
        opacity: 0,
        duration: 500,
        distance: '200px',
        delay: 250
    },100);

    sr.reveal('.intro-text-bottom', { /* Animates the introduction paragraph at the bottom */
        origin: 'bottom',
        opacity: 0,
        duration: 500,
        distance: '200px',
        delay: 250
    },100);

    sr.reveal('.white-form', { /* Animates the form */
        origin: 'right',
        opacity: 0,
        duration: 500,
        distance: '500px',
        delay: 400
    });

    sr.reveal('.form', { /* Animates the form */
        origin: 'bottom',
        opacity: 0,
        duration: 500,
        distance: '100px',
        delay: 450
    },50);
});