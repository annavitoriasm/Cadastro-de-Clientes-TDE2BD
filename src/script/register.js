const modal = document.getElementById("create");

function openC(){
    modal.classList.remove('clDiv');
    modal.classList.remove('hidden');
    modal.classList.add('flex');
    modal.classList.add('opDiv')
}

function closeC(){
    modal.classList.remove('opDiv');
    modal.classList.add('clDiv');
    setTimeout(function() {
        modal.classList.add('hidden');
        modal.classList.remove('flex');
      }, 1000);
}