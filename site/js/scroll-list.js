document.addEventListener('DOMContentLoaded', function() {
    const scrollList = document.getElementById('scroll-list');

    // Tableau des options pour la liste déroulante
    const options = [
        'catégories',
        'tableaux',
        'magnets',
        'limité',
        'illimité',
        // Ajoutez autant d'options que vous le souhaitez
    ];

    // Ajouter les options à la liste déroulante
    options.forEach(function(optionText) {
        const option = document.createElement('option');
        option.textContent = optionText;
        scrollList.appendChild(option);
    });
});
