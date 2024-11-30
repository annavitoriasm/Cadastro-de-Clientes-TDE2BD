document.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById("infoCustomer");
    const container = document.getElementById("infoCont");
    const openBtn = document.getElementById("opInfo");
    const closeBtn = document.getElementById("clInfo");

    function openC() {
        container.classList.remove('clDiv');
        modal.classList.remove('hidden');
        modal.classList.add('flex');
        container.classList.add('opDiv');
    }

    function closeC() {
        container.classList.remove('opDiv');
        container.classList.add('clDiv');
        setTimeout(function() {
            modal.classList.add('hidden');
            modal.classList.remove('flex');
        }, 600);
    }

    openBtn.addEventListener('click', openC); 
    closeBtn.addEventListener('click', closeC);
});
