let redInd = 0
let greenInd = 0
let blueInd = 0

//red
document.getElementById("red+").onclick = function(){
    if(redInd<255){
        redInd += 1;
    }
    else{
        alert("the value for this color is surpassed/nTry another color!")
    }
    document.getElementById("redInd").innerHTML = redInd;
}
document.getElementById("red-").onclick = function(){
    if (redInd>0) {
        redInd -= 1;
    }
    else{
        alert("Invalid!")
    }
    document.getElementById("redInd").innerHTML = redInd;
}

//green
document.getElementById("green+").onclick = function(){
    if(greenInd<255){
        greenInd += 1;
    }
    else{
        alert("the value for this color is surpassed/nTry another color!")
    }
    document.getElementById("greenInd").innerHTML = greenInd;
}
document.getElementById("green-").onclick = function(){
    if (greenInd>0) {
        greenInd -= 1;
    }
    else{
        alert("Invalid!")
    }
    document.getElementById("greenInd").innerHTML = greenInd;
}

//blue
document.getElementById("blue+").onclick = function(){
    if(blueInd<255){
        blueInd += 1;
    }
    else{
        alert("the value for this color is surpassed/nTry another color!")
    }
    document.getElementById("blueInd").innerHTML = blueInd;
}
document.getElementById("blue-").onclick = function(){
    if (blueInd>0) {
        blueInd -= 1;
    }
    else{
        alert("Invalid!")
    }
    document.getElementById("blueInd").innerHTML = blueInd;
}

//styling the box
// let box = document.getElementById("box");
// document.querySelector("button").onclick = function(){
//     box.style.backgroundColor = `rgb(${redInd}, ${greenInd}, ${blueInd})`
// }

let red = document.getElementById("redInd").value || 0;
let green = document.getElementById("greenInd").value || 0;
let blue = document.getElementById("blueInd").value || 0;

function updateColor(params) {
    box.style.backgroundColor = `rgb(${red}, ${green}, ${blue})`;
}


// Add event listeners to each input
redInput.onchange = updateColor;
greenInput.onchange = updateColor;
blueInput.onchange = updateColor;
// document.querySelector("input").onchange = function(){
//     box.style.backgroundColor = `rgb(${red}, ${green}, ${blue})`
// }