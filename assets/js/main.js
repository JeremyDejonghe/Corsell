const myAudio = document.querySelector("#myAudio");
const noteElement = document.querySelector(".note");
noteElement.addEventListener("click", () => {   
    if(!noteElement.classList.contains("play")) {
        noteElement.classList.add("play");       
        myAudio.play();
    } else {
        noteElement.classList.remove("play")
        myAudio.pause();
    }  
});