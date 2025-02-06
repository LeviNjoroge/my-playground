// document.querySelector("h1").addEventListener("click", function(){
//     this.innerHTML = "Hello!"
// })

document.querySelector('h1').addEventListener('click', (event) => {
    event.target.innerHTML = "Bonjour";
})