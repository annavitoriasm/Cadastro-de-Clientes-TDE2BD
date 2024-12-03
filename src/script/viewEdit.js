const modalEdit = document.getElementById("editCustomer");
const containerEdit = document.getElementById("containerEdit");

function openEd(clientData){
    containerEdit.classList.remove('clDiv');
    modalEdit.classList.remove('hidden');
    modalEdit.classList.add('flex');
    containerEdit.classList.add('opDiv');

    document.getElementById("clienteID").innerText = clientData.id;
    document.getElementById("clienteNome").innerText = clientData.nome;
    document.getElementById("clienteNome1").innerText = clientData.nome;
    document.getElementById("clienteCPFCNPJ").innerText = clientData.cpf_cnpj;
    document.getElementById("clienteEmail").innerText = clientData.email;
    document.getElementById("clienteContato").innerText = clientData.contato;
    document.getElementById("clienteCEP").innerText = clientData.cep;
    document.getElementById("clienteEndereco").innerText = clientData.endereco;
    document.getElementById("clienteNumEnd").innerText = clientData.numero;
    document.getElementById("clienteComplemento").innerText = clientData.complemento;
    document.getElementById("clienteObservacoes").innerText = clientData.observacoes;

    document.getElementById("clienteTipo").value = clientData.pessoa_fisica === "CPF" ? "fisica" : "juridica";
}

function closeEd(){
    containerEdit.classList.remove('opDiv');
    containerEdit.classList.add('clDiv');
    setTimeout(function() {
        modalEdit.classList.add('hidden');
        modalEdit.classList.remove('flex');
      }, 600);
}