// ajax.js - Gestion des requêtes AJAX pour l'application web de l'Hôpital Moderne

/**
 * Effectue une requête AJAX POST.
 * @param {string} url - L'URL de la requête.
 * @param {object} data - Les données à envoyer (format JSON).
 * @param {function} successCallback - Fonction appelée en cas de succès.
 * @param {function} errorCallback - Fonction appelée en cas d'erreur.
 */
function ajaxPost(url, data, successCallback, errorCallback) {
    fetch(url, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            successCallback(data);
        } else {
            errorCallback(data.message);
        }
    })
    .catch(error => {
        console.error('Erreur AJAX:', error);
        errorCallback('Une erreur est survenue. Veuillez réessayer.');
    });
}

/**
 * Effectue une requête AJAX GET.
 * @param {string} url - L'URL de la requête.
 * @param {function} successCallback - Fonction appelée en cas de succès.
 * @param {function} errorCallback - Fonction appelée en cas d'erreur.
 */
function ajaxGet(url, successCallback, errorCallback) {
    fetch(url)
    .then(response => response.json())
    .then(data => {
        successCallback(data);
    })
    .catch(error => {
        console.error('Erreur AJAX:', error);
        errorCallback('Une erreur est survenue. Veuillez réessayer.');
    });
}

/**
 * Charge les données pour un sélecteur (par exemple, une liste de patients).
 * @param {string} url - L'URL pour charger les données.
 * @param {string} selector - Le sélecteur jQuery du champ à remplir.
 */
function loadSelectOptions(url, selector) {
    ajaxGet(url, function (data) {
        let options = '<option value="">Sélectionnez une option</option>';
        data.forEach(item => {
            options += `<option value="${item.id}">${item.name}</option>`;
        });
        $(selector).html(options);
    }, function (error) {
        console.error(error);
    });
}

/**
 * Soumet un formulaire via AJAX.
 * @param {string} formId - L'ID du formulaire à soumettre.
 * @param {string} url - L'URL de soumission.
 * @param {function} successCallback - Fonction appelée en cas de succès.
 * @param {function} errorCallback - Fonction appelée en cas d'erreur.
 */
function submitForm(formId, url, successCallback, errorCallback) {
    const form = document.getElementById(formId);
    if (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            const formData = new FormData(form);
            const data = Object.fromEntries(formData.entries());

            ajaxPost(url, data, function (response) {
                successCallback(response);
                form.reset();
            }, function (error) {
                errorCallback(error);
            });
        });
    }
}

// Exemple d'utilisation pour charger les options d'un sélecteur
loadSelectOptions('ajax/get_patients.php', '#patient');

// Exemple d'utilisation pour soumettre un formulaire
submitForm('addFactureForm', 'ajax/add_facture.php', function (response) {
    alert('Facture ajoutée avec succès !');
    $('#addFactureModal').modal('hide');
    $('#facturesTable').DataTable().ajax.reload();
}, function (error) {
    alert(error);
});
