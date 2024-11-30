function desabilitarBotaoDireito() {
    const imagem = document.getElementById('logoIntro');

    imagem.addEventListener('contextmenu', function(event) {
        event.preventDefault();
    });
}

document.addEventListener('DOMContentLoaded', desabilitarBotaoDireito);