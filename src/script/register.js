const modal = document.getElementById("create");
const container = document.getElementById("containerCreate");

function openC(){
    container.classList.remove('clDiv');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    container.classList.add('opDiv')
}

function closeC(){
    container.classList.remove('opDiv');
    container.classList.add('clDiv');
    setTimeout(function() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      }, 800);
}