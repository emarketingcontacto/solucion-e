document.querySelectorAll('details').forEach((faq) => {
    faq.addEventListener('click', (e) => {
        // Obtenemos el estado antes del click
        const isOpen = faq.hasAttribute('open');

        // Si el usuario hizo clic para abrirla
        if (!isOpen) {
            // Cerramos todas las demás
            document.querySelectorAll('details').forEach((otherFaq) => {
                if (otherFaq !== faq) {
                    otherFaq.removeAttribute('open');
                }
            });
        }
    });
});
