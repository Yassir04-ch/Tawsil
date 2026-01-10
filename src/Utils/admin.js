 document.addEventListener('DOMContentLoaded', () => {
            const openModalBtn = document.getElementById('open-admin-modal');
            const adminModal = document.getElementById('admin-modal');
            const closeModalBtns = document.querySelectorAll('#close-admin-modal');
            const newStaffForm = document.getElementById('new-staff-form');

            // Ouvrir modal
            openModalBtn.addEventListener('click', () => {
                adminModal.classList.remove('hidden');
                document.body.classList.add('overflow-hidden');
            });

            // Fermer modal
            closeModalBtns.forEach(btn => {
                btn.addEventListener('click', () => {
                    adminModal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                });
            });

            // Fermer en cliquant en dehors
            adminModal.addEventListener('click', (e) => {
                if (e.target === adminModal) {
                    adminModal.classList.add('hidden');
                    document.body.classList.remove('overflow-hidden');
                }
            });

            // Soumission du formulaire (exemple console.log)
            newStaffForm.addEventListener('submit', (e) => {
                e.preventDefault();
                const formData = new FormData(newStaffForm);
                const data = Object.fromEntries(formData.entries());
                console.log("Nouveau staff :", data);
                // Ici tu peux envoyer les données à PHP via fetch
                adminModal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                newStaffForm.reset();
            });
        });