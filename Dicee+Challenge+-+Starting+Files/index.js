let randomNumber1 = Math.floor(Math.random() * 6) + 1;

const playerOneDice = document.querySelector(".img1");
playerOneDice.setAttribute("src", `./images/dice${randomNumber1}.png`);

let randomNumber2 = Math.floor(Math.random() * 6) + 1;

const playerTwoDice = document.querySelector(".img2");
playerTwoDice.setAttribute("src", `./images/dice${randomNumber2}.png`);

const header = document.querySelector("h1");

if (randomNumber1 > randomNumber2) {
    header.innerHTML = "🚩 Player 1 Wins!";
} else if (randomNumber1 < randomNumber2) {
    header.innerHTML = "Player 2 Wins! 🚩";
} else {
    header.innerHTML = "Draw!";
}