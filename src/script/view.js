const view = document.getElementById("infoCustomer");

function opOptions() {

    if (view.classList.contains('hidden')) {
        view.classList.remove('hidden');
        view.classList.add('flex');
    }
}

function clOptions() {
    view.classList.remove('flex');
    view.classList.add('hidden');
}