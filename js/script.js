//Save button
let saveBtn = document.getElementById("save-buttn");

saveBtn.addEventListener("click", function () {
    console.log("Button clicked. Article data:", outputData);
}).catch(error => console.error("Saving failed", error));