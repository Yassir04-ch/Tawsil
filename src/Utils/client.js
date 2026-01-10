 const openModalBtn = document.getElementById('open-order-modal');
    const modalBackdrop = document.getElementById('modal-backdrop');
    const closeModalBtn = document.getElementById('close-modal');

    openModalBtn.addEventListener('click', () => {
        modalBackdrop.classList.remove('hidden');
        document.body.classList.add('modal-open');
    });
    closeModalBtn.addEventListener('click', () => {
        modalBackdrop.classList.add('hidden');
        document.body.classList.remove('modal-open');
    });
    modalBackdrop.addEventListener('click', (e) => {
        if (e.target === modalBackdrop) {
            modalBackdrop.classList.add('hidden');
            document.body.classList.remove('modal-open');
        }
    });