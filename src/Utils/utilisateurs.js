
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('roleModal');
    const modalInputId = document.getElementById('modalUserId');
    const closeModalBtn = document.getElementById('closeModalBtn');

    // Open modal with correct id
    document.addEventListener('click', function(e) {
        const btn = e.target.closest('.btn-edit-role');
        if (btn) {
            modalInputId.value = btn.getAttribute('data-id');
            modal.classList.remove('hidden');
        }
    });

    // Close modal
    closeModalBtn.addEventListener('click', () => modal.classList.add('hidden'));
    window.addEventListener('click', (e) => { if (e.target === modal) modal.classList.add('hidden'); });
});
