let loadFile = function(event) {
            
    let input = event.target;
    let file = input.files[0];
    let type = file.type;

   let output = document.getElementById('preview_img');


    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
        URL.revokeObjectURL(output.src) // free memory
    }
};