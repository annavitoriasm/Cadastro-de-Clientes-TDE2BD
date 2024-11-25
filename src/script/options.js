const options = document.getElementById("options");
const openOptionsButton = document.getElementById("open-options");

function opOptions(event) {

    if (options.classList.contains('hidden')) {
        options.classList.remove('hidden');
        options.classList.add('flex');
    }
}

function clOptions() {
    options.classList.remove('flex');
    options.classList.add('hidden');
}

// Fecha o menu se o clique for fora do menu de opções e do botão de abrir
document.addEventListener('click', function (event) {
    if (!options.contains(event.target) && !openOptionsButton.contains(event.target)) {
        clOptions();
    }
});