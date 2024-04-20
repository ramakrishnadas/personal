const drumButtons = document.querySelectorAll(".drum");

// Detect button click
drumButtons.forEach((drumButton) => {
    drumButton.addEventListener("click", function() {
        const letter = this.innerHTML;
        playAudio(letter);
        buttonAnimation(letter);
    })
})

// Detect keyboard press
document.addEventListener('keydown', (event) => {
    playAudio(event.key);
    buttonAnimation(event.key);
})

// Functionality to play sound
function playAudio(letter) {
    let audioURL = ""
        switch (letter) {
            case "w":
                audioURL = "sounds/tom-1.mp3";
                break;

            case "a":
                audioURL = "sounds/tom-2.mp3";
                break;

            case "s":
                audioURL = "sounds/tom-3.mp3";
                break;

            case "d":
                audioURL = "sounds/tom-4.mp3";
                break;

            case "j":
                audioURL = "sounds/snare.mp3";
                break; 

            case "k":
                audioURL = "sounds/crash.mp3";
                break;

            case "l":
                audioURL = "sounds/kick-bass.mp3";
                break;      
                
            default:
                console.log(letter);
        }

        const audio = new Audio(audioURL);
        audio.play();
}

function buttonAnimation(letter) {
    
    const activeButton = document.querySelector("." + letter);

    activeButton.classList.add("pressed");

    setTimeout(function() {
        activeButton.classList.remove("pressed");
    }, 100);
}