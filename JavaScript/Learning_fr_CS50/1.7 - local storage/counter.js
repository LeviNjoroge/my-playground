if (!localStorage('count')) {
    localStorage.setItem('count', 0);
}

const button = document.querySelector('button');
const hero = document.querySelector('h1');
function counter(){
    let count = localStorage.getItem('count');
    count++;
    hero.innerHTML = count;
}

setInterval(counter, 1000);