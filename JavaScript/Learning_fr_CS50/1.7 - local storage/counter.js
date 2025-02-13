if (!localStorage.getItem('count')) {
    localStorage.setItem('count', 0);
}

const button = document.querySelector('button');
const hero = document.querySelector('h1');
let count = localStorage.getItem('count');
function counter(){
    count++;
    hero.innerHTML = count;
    localStorage.setItem('count', count);
}

setInterval(counter, 1000);

document.addEventListener('DOMContentLoaded', function(){
    hero.innerHTML = localStorage.getItem('count');
});