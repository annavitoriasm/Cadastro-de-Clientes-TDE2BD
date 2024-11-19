const modal = document.getElementById("create");

function openC(){
    modal.classList.remove('hidden');
    modal.classList.add('flex');
}

function closeC(){
    modal.classList.remove('flex');
    modal.classList.add('hidden');
}