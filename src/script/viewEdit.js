const modalEdit = document.getElementById("editCustomer");
const containerEdit = document.getElementById("containerEdit");

function openEd(clientData){
    containerEdit.classList.remove('clDiv');
    modalEdit.classList.remove('hidden');
    modalEdit.classList.add('flex');
    containerEdit.classList.add('opDiv');

    document.getElementById("clienteID1").innerText = clientData.id;
    document.getElementById("clienteID").value = clientData.id;
    document.getElementById("clienteNome").innerText = clientData.nome;
    document.getElementById("clienteNome1").value = clientData.nome;
    document.getElementById("clienteTipo").value = clientData.pessoa_fisica;
    document.getElementById("clienteCPFCNPJ").value = clientData.cpf_cnpj;
    document.getElementById("clienteEmail").value = clientData.email;
    document.getElementById("clienteContato").value = clientData.contato;
    document.getElementById("clienteCEP").value = clientData.cep;
    document.getElementById("clienteEndereco").value = clientData.endereco;
    document.getElementById("clienteNumEnd").value = clientData.numero;
    document.getElementById("clienteComplemento").value = clientData.complemento;
    document.getElementById("clienteObservacoes").value = clientData.observacoes;
}

function closeEd(){
    containerEdit.classList.remove('opDiv');
    containerEdit.classList.add('clDiv');
    setTimeout(function() {
        modalEdit.classList.add('hidden');
        modalEdit.classList.remove('flex');
      }, 600);
}
