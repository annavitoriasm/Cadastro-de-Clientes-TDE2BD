function loading() {
    document.getElementById("box-load").style.display = "none";

    const content = document.getElementById("content");
    content.classList.add("show");
}
window.onload = function() {
    setTimeout(loading, 2000);
};