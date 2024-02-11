let play = document.getElementById("herisson");
function playMusic() {
    let audio = new Audio("sound/sonic.wav");
    audio.play()
}
play.addEventListener("click", playMusic);

const changeText = document.getElementById("herisson");
changeText.addEventListener("click", function() {
    changeText.textContent = "Jai failli attendre!";
});


let play2 = document.getElementById("moustache");
function playMusic2() {
    let audio = new Audio("sound/mario.wav");
    audio.play()
}
play2.addEventListener("click", playMusic2);

const changeText2 = document.getElementById("moustache");
changeText2.addEventListener("click", function() {
    if (document.getElementById("moustache").value = "Team Mario ? Click") {
        document.getElementById("moustache").innerHTML = "Oh";
    } else {
        document.getElementById("moustache").add("Team Mario ? Click");
    }});

