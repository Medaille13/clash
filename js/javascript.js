window.addEventListener('DOMContentLoaded', function (){
    let mario = document.getElementById('moustache');
    let sonic = document.getElementById('herisson');
    let avanClicM = 'Team Mario ? Click';
    let apreClicM = 'Its me mario here we go';
    let avanClicH = 'Team Sonic ?';
    let apreClicH = 'Jai failli attendre';
    moustache.addEventListener("click", function (e) {
        changeText.innerText = apreClicM ;
        console.log(el);
    })
    sonic.addEventListener("click", function (e) {
        changeText.innerText = apreClicH;
    })
})  


let cache1 = document.getElementById("moustache");
let cache2 = document.getElementById("herisson");