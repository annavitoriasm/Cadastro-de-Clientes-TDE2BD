const tempoGif = 5000;

const gifElement = document.getElementById("logoIntro");
const imagemEstaticaElement = document.getElementById("logoIntroEstatica");

function trocarPorImagemEstatica() {
    gifElement.src = "public/img/logoIntroEstatica.png"; 

    gifElement.style.display = "none";

    imagemEstaticaElement.style.display = "block";
}

setTimeout(trocarPorImagemEstatica, tempoGif);