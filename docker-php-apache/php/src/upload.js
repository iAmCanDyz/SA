let uploadButton = document.getElementById("upload");
let chosenImg = document.getElementById("chosen-image");
let fileName = document.getElementById("file-name");

uploadButton.onchange = () =>{
    let reader = new FileReader();
    reader.readAsDataURL(uploadButton.files[0]);

    reader.onload = () =>{
        chosenImg.setAttribute("src",reader.result);
    }

    fileName.textContent = uploadButton.files[0].name;
}


