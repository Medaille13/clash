let cache1 = document.getElementById("moustache");
let cache2 = document.getElementById("herisson");
let gif = document.getElementById("mariodecu");
let gif2 = document.getElementById("sonicdecu");
cache1.addEventListener("click", () => {
  if(getComputedStyle(gif2).display != "none"){
    gif2.style.display = "none";
  } else {
    gif2.style.display = "block";
  }
})

function togg(){
  if(getComputedStyle(gif).display != "none"){
    gif.style.display = "none";
  } else {
    gif.style.display = "block";
  }
};
cache2.onclick = togg;