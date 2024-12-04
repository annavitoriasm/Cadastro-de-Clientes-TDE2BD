const navHome = document.getElementById('HC');
const navCustomer = document.getElementById('LC');
const navReport = document.getElementById('RE');
const navCreate = document.getElementById('AC');

document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries) => {
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

    const observerAc = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navCreate.classList.add('active');
                navCreate.classList.remove('item-menu');

                navReport.classList.remove('active');
                navReport.classList.add('item-menu');

                navCustomer.classList.remove('active');
                navCustomer.classList.add('item-menu');

                navHome.classList.remove('active');
                navHome.classList.add('item-menu');
            } else {
                navCreate.classList.remove('active');
                navCreate.classList.add('item-menu');
            }
        });
    }, {
        threshold: 0.3
    });

    const itemCreate = document.getElementById('containerCreate');
    observerAc.observe(itemCreate);

    const observerRe = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                navReport.classList.add('active');
                navReport.classList.remove('item-menu');

                navCustomer.classList.remove('active');
                navCustomer.classList.add('item-menu');

                navHome.classList.remove('active');
                navHome.classList.add('item-menu');
            } else {
                navReport.classList.remove('active');
                navReport.classList.add('item-menu');
                
            }
        });
    }, {
        threshold: 0.3
    });

    const itemReport = document.querySelectorAll('.report');
    itemReport.forEach(item => observerRe.observe(item));
});
