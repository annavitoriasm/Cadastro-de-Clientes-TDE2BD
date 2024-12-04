let alert = document.getElementById('alertRed');

function showAlert(){
    alert.classList.remove('hidden');
    alert.classList.add('flex');
}

function closeAlert(){
    alert.classList.add('hidden');
    alert.classList.remove('flex');
}

function validateCPF(cpf) {
    cpf = cpf.replace(/[^\d]/g, '');

    if (cpf.length !== 11) {
        return false;
    }

    if (/(\d)\1{10}/.test(cpf)) {
        return false;
    }

    let D1 = 0, D2 = 0;

    for (let i = 0, x = 10; i < 9; i++, x--) {
        D1 += cpf[i] * x;
    }

    for (let i = 0, x = 11; i < 10; i++, x--) {
        D2 += cpf[i] * x;
    }

    D1 = (D1 % 11) < 2 ? 0 : 11 - (D1 % 11);
    D2 = (D2 % 11) < 2 ? 0 : 11 - (D2 % 11);

    return (cpf[9] == D1 && cpf[10] == D2);
}

function validateCNPJ(cnpj) {
    cnpj = cnpj.replace(/[^\d]/g, '');

    if (cnpj.length !== 14) {
        return false;
    }

    if (/(\d)\1{13}/.test(cnpj)) {
        return false;
    }

    let D1 = 0, D2 = 0;
    const W = [6, 5, 4, 3, 2, 9, 8, 7, 6, 5, 4, 3, 2];

    for (let i = 0;i < 12; i++) {
        D1 += cnpj[i] * W[i + 1];
    }

    for (let i = 0; i < 13; i++) {
        D2 += cnpj[i] * W[i];
    }

    D1 = (D1 % 11) < 2 ? 0 : 11 - (D1 % 11);
    D2 = (D2 % 11) < 2 ? 0 : 11 - (D2 % 11);

    return (cnpj[12] == D1 && cnpj[13] == D2);
}

document.getElementById('formEdit').addEventListener('submit', function(event) {
    let input = document.getElementById('clienteCPFCNPJ').value;

    let isCPF = input.length == 14;
    let isValid = isCPF ? validateCPF(input) : validateCNPJ(input);

    if (!isValid) {
        showAlert();
        event.preventDefault();
    }
});

document.getElementById('formCreate').addEventListener('submit', function(event) {
    let input = document.getElementById('cpf_cnpjAdd').value;

    let isCPF = input.length == 14;
    let isValid = isCPF ? validateCPF(input) : validateCNPJ(input);

    if (!isValid) {
        showAlert();
        event.preventDefault();
    }
});