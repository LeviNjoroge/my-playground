// Get the input fields and box
let box = document.getElementById("box");
let redInput = document.getElementById("redInd");
let greenInput = document.getElementById("greenInd");
let blueInput = document.getElementById("blueInd");

// Function to update the background color
function updateColor() {
    let red = redInput.value || 0; // Get red value
    let green = greenInput.value || 0; // Get green value
    let blue = blueInput.value || 0; // Get blue value

    // Set the background color dynamically
    box.style.backgroundColor = `rgb(${red}, ${green}, ${blue})`;
}

// Add event listeners to each input
redInput.onchange = updateColor;
greenInput.onchange = updateColor;
blueInput.onchange = updateColor;