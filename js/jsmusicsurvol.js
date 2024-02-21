let element = document.getElementById('survolm'); // on récupère l'élément qui sera survolé pour jouer le son
let son =  new Audio("sound/marioclear.mp3"); // on récupère l'élément <audio>
 
element.onmouseover = function(){ // lorsque le div est survolé
    son.play(); // on joue le son
};
 
element.onmouseout = function(){ // lorsque la souris quitte le div
    son.pause(); // on met en pause le son
};

let element2 = document.getElementById('survols'); // on récupère l'élément qui sera survolé pour jouer le son
let son2 =  new Audio("sound/introsonic.mp3"); // on récupère l'élément <audio>
 
element2.onmouseover = function(){ // lorsque le div est survolé
    son2.play(); // on joue le son
};
 
element2.onmouseout = function(){ // lorsque la souris quitte le div
    son2.pause(); // on met en pause le son
};