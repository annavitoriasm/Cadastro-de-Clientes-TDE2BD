let selectedValueAdd = $('#tipoPessoa').val();
$('#contatoAdd').mask('(00) 00000-0000');
$('#cepAdd').mask('00000-000');

if (selectedValueAdd === 'CPF') {
    $('#cpf_cnpjAdd').mask('000.000.000-00', { reverse: true });
} else if (selectedValueAdd === 'CNPJ') {
    $('#cpf_cnpjAdd').mask('00.000.000/0000-00', { reverse: true });
}

$('#tipoPessoa').change(function () {
    selectedValueAdd = $(this).val();

    if (selectedValueAdd === 'CPF') {
        $('#cpf_cnpjAdd').mask('000.000.000-00', { reverse: true });
    } else if (selectedValueAdd === 'CNPJ') {
        $('#cpf_cnpjAdd').mask('00.000.000/0000-00', { reverse: true });
    }
});

let selectedValueEdit = $('#clienteTipo').val();
$('#clienteContato').mask('(00) 00000-0000');
$('#clienteCEP').mask('00000-000');

if (selectedValueEdit === 'CPF') {
    $('#clienteCPFCNPJ').unmask().mask('000.000.000-00', { reverse: true });
} else if (selectedValueEdit === 'CNPJ') {
    $('#clienteCPFCNPJ').unmask().mask('00.000.000/0000-00', { reverse: true });
}

$('#clienteTipo').change(function () {
    selectedValueEdit = $(this).val();

    if (selectedValueEdit === 'CPF') {
        $('#clienteCPFCNPJ').unmask().mask('000.000.000-00', { reverse: true });
    } else if (selectedValueEdit === 'CNPJ') {
        $('#clienteCPFCNPJ').unmask().mask('00.000.000/0000-00', { reverse: true });
    }
});

function setInputFilter(textbox, inputFilter) {
    ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
        textbox.addEventListener(event, function(e) {
            const specialKeys = ["Backspace", "Delete", "ArrowLeft", "ArrowRight", "Tab"];
            if (e.type === "keydown" && !specialKeys.includes(e.key)) {
                if (!inputFilter(this.value + e.key)) {
                    e.preventDefault();
                }
            }

            if (inputFilter(this.value)) {
                if (["keydown", "mousedown", "focusout"].indexOf(e.type) >= 0) {
                    this.classList.remove("input-error");
                    this.setCustomValidity("");
                }

                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                this.classList.add("input-error");
                this.setCustomValidity(errMsg);
                this.reportValidity();
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                this.value = "";
            }
        });
    });
}

setInputFilter(document.getElementById("numeroendAdd"), function(value) {
    return /^\d*$/.test(value);
});

setInputFilter(document.getElementById("clienteNumEnd"), function(value) {
    return /^\d*$/.test(value);
});
