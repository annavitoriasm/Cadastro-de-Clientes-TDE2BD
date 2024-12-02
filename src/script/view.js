document.addEventListener('DOMContentLoaded', function () {
    const openBtns = document.querySelectorAll('[id^="opInfo"]');
    const closeBtns = document.querySelectorAll('[id^="clInfo"]');

    openBtns.forEach(openBtn => {
        openBtn.addEventListener('click', function() {
            const clientId = openBtn.id.replace('opInfo', '');
            const modal = document.getElementById(`infoCustomer${clientId}`);
            const container = document.getElementById(`infoCont${clientId}`);

            container.classList.remove('clDiv');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            container.classList.add('opDiv');
        });
    });

    closeBtns.forEach(closeBtn => {
        closeBtn.addEventListener('click', function() {
            const clientId = closeBtn.id.replace('clInfo', '');
            const modal = document.getElementById(`infoCustomer${clientId}`);
            const container = document.getElementById(`infoCont${clientId}`);

            container.classList.remove('opDiv');
            container.classList.add('clDiv');
            setTimeout(function() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
            }, 600);
        });
    });

    const dropdownBtns = document.querySelectorAll('[id^="dropdownDelayButton"]');

    dropdownBtns.forEach(dropdownBtn => {
        dropdownBtn.addEventListener('click', function() {
            const clientId = dropdownBtn.id.replace('dropdownDelayButton', '');
            const dropdown = document.getElementById(`dropdownDelay${clientId}`);


            dropdown.classList.toggle('hidden');
        });
    });
});