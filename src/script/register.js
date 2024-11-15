const buttonOp = document.getElementById("create-costumer");
const buttonCl = document.getElementById("close-register");
const modal = document.querySelector("dialog");

buttonOp.onclick = function() {
    modal.showModal();
};

buttonCl.onclick = function() {
    modal.close();
};
