const navHome = document.getElementById('HC');
const navCustomer = document.getElementById('LC');

document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {

                navCustomer.classList.add('active');
                navCustomer.classList.remove('item-menu');
                navHome.classList.add('item-menu');
                navHome.classList.remove('active');
            } else {

                navCustomer.classList.remove('active');
                navCustomer.classList.add('item-menu');
                navHome.classList.remove('item-menu');
                navHome.classList.add('active');
            }
        });
    }, {
        threshold: 0.3
    });

    const items = document.querySelectorAll('.listCustomer');
    items.forEach(item => observer.observe(item));
});
