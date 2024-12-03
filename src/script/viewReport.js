const modalRep = document.getElementById("report");
const containerRep = document.getElementById("containerReport");

function openRe(){
    containerRep.classList.remove('clDiv');
    modalRep.classList.remove('hidden');
    modalRep.classList.add('flex');
    containerRep.classList.add('opDiv')
}

function closeRe(){
    console.log("Função closeRe chamada!");
    containerRep.classList.remove('opDiv');
    containerRep.classList.add('clDiv');
    setTimeout(function() {
        modalRep.classList.add('hidden');
        modalRep.classList.remove('flex');
      }, 600);
}

function genRe(){
    window.location.href = "index.php?controller=clients&action=exportToSheet";
}