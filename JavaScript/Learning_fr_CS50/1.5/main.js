// document.querySelector("h1").addEventListener("click", function(){
//     this.innerHTML = "Hello!"
// })

document.querySelector('h1').addEventListener('click', (event) => {
    event.target.innerHTML = "Bonjour";
})

let num = 1;
document.querySelector('p').addEventListener('click', function() {
    this.innerHTML =num;
    num++;
}, {once : true});