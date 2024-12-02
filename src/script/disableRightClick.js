function desabilitarBotaoDireito() {
    const gif1 = document.getElementById('logoIntro');
    const gif2 = document.getElementById('noCustomer');

    gif1.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });

    gif2.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });
}

document.addEventListener('DOMContentLoaded', desabilitarBotaoDireito);