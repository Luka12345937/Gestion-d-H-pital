// main.js - Script principal pour l'application web de l'Hôpital Moderne

// Fonction pour gérer les formulaires avec validation
function handleFormSubmission(formId, successCallback) {
    const form = document.getElementById(formId);
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            if (validateForm(form)) {
                const formData = new FormData(form);
                const data = Object.fromEntries(formData.entries());

                fetch('ajax/submit_form.php', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify(data)
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        successCallback();
                        form.reset();
                    } else {
                        alert('Une erreur s\'est produite. Veuillez réessayer.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                });
            }
        });
    }
}

// Fonction de validation de formulaire générique
function validateForm(form) {
    let isValid = true;
    const inputs = form.querySelectorAll('input, select, textarea');

    inputs.forEach(input => {
        if (input.hasAttribute('required') && !input.value.trim()) {
            isValid = false;
            input.classList.add('is-invalid');
        } else {
            input.classList.remove('is-invalid');
        }
    });

    return isValid;
}

// Fonction pour ajouter des animations subtiles
function addSubtleAnimations() {
    const elements = document.querySelectorAll('.main-content, .service-card, .team-member, .register-card');
    elements.forEach(element => {
        element.addEventListener('mouseover', () => {
            element.style.transform = 'translateY(-5px)';
            element.style.boxShadow = '0 15px 30px rgba(0, 0, 0, 0.2)';
        });
        element.addEventListener('mouseout', () => {
            element.style.transform = 'translateY(0)';
            element.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.1)';
        });
    });
}

// Fonction pour gérer les modales
function handleModals() {
    const modalTriggers = document.querySelectorAll('[data-bs-toggle="modal"]');
    modalTriggers.forEach(trigger => {
        trigger.addEventListener('click', function () {
            const targetModal = document.querySelector(trigger.getAttribute('data-bs-target'));
            if (targetModal) {
                const modal = new bootstrap.Modal(targetModal);
                modal.show();
            }
        });
    });
}

// Fonction pour gérer les DataTables
function initializeDataTables() {
    const tables = document.querySelectorAll('.datatable');
    tables.forEach(table => {
        $(table).DataTable({
            language: {
                url: '//cdn.datatables.net/plug-ins/1.11.5/i18n/fr-FR.json'
            },
            responsive: true
        });
    });
}

// Initialisation des fonctionnalités au chargement de la page
document.addEventListener('DOMContentLoaded', function () {
    addSubtleAnimations();
    handleModals();
    initializeDataTables();

    // Exemple d'utilisation pour un formulaire d'inscription
    handleFormSubmission('registerForm', () => {
        alert('Inscription réussie !');
        window.location.href = 'login.php';
    });

    // Exemple d'utilisation pour un formulaire de contact
    handleFormSubmission('contactForm', () => {
        alert('Message envoyé avec succès !');
        document.getElementById('contactForm').reset();
    });
});
